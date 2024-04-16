<?php


namespace App\Http\Controllers;


use App\Helpers\Helper;
use App\Models\CryptoMonaire;
use App\Models\Mouvement;
use App\Models\Trading;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{

    public function home()
    {
        $transactions=Trading::query()->orderByDesc('id')->paginate(10);
        return view('front.home', [
            'transactions'=>$transactions
        ]);
    }
    public function join_us($id)
    {
        $parent=User::query()->firstWhere(['unique_number'=>$id]);
       return redirect()->back();
    }
    public function dashboard(Request $request)
    {
        $transactions=Trading::query()->where(['user_id'=>Auth::user()->id])->orderByDesc('id')->paginate(10);
        return view('front.dashboard', [
            'transactions'=>$transactions
        ]);
    }

    public function wallet(Request $request)
    {
        $auth=Auth::user();
        $wallats=[];
        $my_wallet=Wallet::query()->where(['user_id'=>$auth->id]);
        $all_wallaets=CryptoMonaire::query()->where('status',true)->get();
        foreach ($all_wallaets as $crypto){
            $cp=Wallet::query()->firstWhere(['user_id'=>$auth->id,'crypto_id'=>$crypto->id]);
            if (isset($cp)){
                $wallats[]=[
                    'address'=>$cp->address,
                    'balance'=>$cp->total_cfa,
                    'profit'=>1,
                    'balance_estimated'=>0.0,
                    'id'=>$crypto->id,
                    'icon'=>$crypto->iconUrl,
                    'name'=>$crypto->name,
                    'symbol'=>$crypto->symbol,
                    'active'=>true
                ];
            }else{
                $wallats[]=[
                    'address'=>"",
                    'balance'=>0.0,
                    'balance_estimated'=>0.0,
                    'profit'=>"-1",
                    'id'=>$crypto->id,
                    'icon'=>$crypto->iconUrl,
                    'name'=>$crypto->name,
                    'symbol'=>$crypto->symbol,
                    'active'=>false
                ];
            }
        }
        $withdraws=Mouvement::query()->where(['type'=>"WITHDRAW",'user_id'=>$auth->id])->orderByDesc('id')->paginate(10);
        $deposits=Mouvement::query()->where(['type'=>"DEPOSIT",'user_id'=>$auth->id])->orderByDesc('id')->paginate(10);
        return view('front.wallet', [
            'wallets'=>$wallats,
            'my_wallets'=>$my_wallet,
            'withdraws'=>$withdraws,
            'deposits'=>$deposits
        ]);
    }

    public function trade(Request $request)
    {
        $auth=Auth::user();
        $all_wallaets=CryptoMonaire::query()->where('status',true)->get();
        $transactions=Trading::query()->where(['user_id'=>Auth::user()->id])->orderByDesc('id')->paginate(10);
        return view('front.trade', [
            'wallets'=>$all_wallaets,
            'transactions'=>$transactions
        ]);
    }
    public function price(Request $request)
    {
        $cryptos=CryptoMonaire::query()->where('status',true)->get();
        return view('front.price', [
            'cryptos'=>$cryptos
        ]);
    }
    public function country(Request $request)
    {
        return view('front.country', []);
    }
    public function price_detail($id,Request $request)
    {
        $wallet=Helper::getWallet($id);
        if (is_null($wallet)){
            toastr()->success("You not have wallet for currency", 'Request success', ["Failed loggedIn"]);
        }
        return view('front.price_detail', [
            'price'=>CryptoMonaire::query()->find($id),
            'wallet'=>$wallet
        ]);
    }
}
