<?php


namespace App\Http\Controllers;


use App\Helpers\UploadableTrait;
use App\Models\Mouvement;
use App\Models\Trading;
use App\Models\User;
use App\Models\Wallet;
use App\Services\FlutterwareService;
use Flutterwave\Flutterwave;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class PaymentController extends Controller
{
    use UploadableTrait;
    protected $flutterwareSerivice;

    /**
     * PaymentController constructor.
     * @param $flutterwareSerivice
     */
    public function __construct(FlutterwareService $flutterwareSerivice)
    {
        $this->flutterwareSerivice = $flutterwareSerivice;
    }

    public function finish_transaction(Request $request)
    {
        $mouvement=Mouvement::query()->firstWhere(['reference'=>$request->txr]);
        $user = Auth::user();
        if (is_null($user->country)) {
            toastr()->error("Country is not null", 'Request failed', ["Failed loggedIn"]);
            return back();
        }
        if ($request->method()=="POST"){
            if ($request->hasFile('proof') && $request->file('proof') instanceof UploadedFile) {
                $proof = $this->storeFile($request->file('proof'), 'proofs');
                $mouvement->proof = $proof;
                $mouvement->status=Trading::PROCESSING;
                $mouvement->save();
            }
            toastr()->success("Proof send successfull", 'Request success', ["Failed loggedIn"]);
            return redirect()->route('back.trade');
        }
        return view("payment.mode_simple", [
            'user'=>$user
        ]);
    }
    public function finish_trade(Request $request)
    {
        $trade=Trading::query()->find($request->id);
        $user = Auth::user();
        if ($trade->status==Trading::ACCEPTED || $trade->status==Trading::DENIED) {
            toastr()->error("Trade status is not correct", 'Request failed', ["Failed loggedIn"]);
            return back();
        }
        if ($request->method()=="POST"){
            if ($request->hasFile('proof') && $request->file('proof') instanceof UploadedFile) {
                $proof = $this->storeFile($request->file('proof'), 'proofs');
                $trade->proof = $proof;
                $trade->status=Trading::PROCESSING;
                $trade->save();
            }
            toastr()->success("Proof send successfull", 'Request success', ["Failed loggedIn"]);
            return redirect()->route('back.trade');
        }

        return view("payment.mode_crypto", [
            'user'=>$user,
            'trade'=>$trade
        ]);
    }

    public function collect_flutterware(Request $request)
    {
        $user = Auth::user();
        if (is_null($user->country)) {
            toastr()->error("Country is not null", 'Request failed', ["Failed loggedIn"]);
            return back();
        }
        $payment = $this->flutterwareSerivice->make_transfert([
            'amount' => $request->get('amount'),
            'email' => Auth::user()->email,
            'phone' => $request->get('phone'),
            'name' => $request->get('name'),
            'flutterwave_callback' => route('payment.fluttercallback'),
        ]);
        if ($payment->status !== 'success') {

            return \redirect()->route('payment-fail');
        }
        return redirect($payment->data->link);
    }
    public function web3bnb(Request $request)
    {
        $trade=Trading::query()->find($request->id);
        $user = Auth::user();
        if (is_null($user->country)) {
            toastr()->error("Country is not null", 'Request failed', ["Failed loggedIn"]);
            return back();
        }
        return view("payment.web3", [
            'user'=>$user,
            'trade'=>$trade,
            'wallet'=>Wallet::query()->firstWhere(['user_id'=>$user->id,'crypto_id'=>$trade->crypto_id])
        ]);
    }
    public function withDrawModal(Request $request)
    {
        if ($request->method() == 'POST') {
            if ($request->amount > Auth::user()->balance) {
                toastr()->error("Balance insufficient", 'Request error', ["Failed loggedIn"]);
                return back();
            }
            $withdraw = new Mouvement();
            $withdraw->user_id = Auth::user()->id;
            $withdraw->reference = Uuid::uuid4();
            $withdraw->amount = $request->amount;
            $withdraw->name = $request->name;
            $withdraw->phone = $request->phone;
            $withdraw->type = "WITHDRAW";
            $withdraw->status = Trading::PENDING;
            $withdraw->save();
            toastr()->success("Withdraw successful", 'Request success', ["Failed loggedIn"]);
            return redirect()->back();
        }
        return view("front.modals.withdraw", [

        ]);
    }

    public function deposit(Request $request)
    {
        if ($request->method() == 'POST') {
            if ($request->amount < 0) {
                toastr()->error("Amount insufficient", 'Request error', ["Failed loggedIn"]);
                return back();
            }
            $withdraw = new Mouvement();
            $withdraw->user_id = Auth::user()->id;
            $withdraw->reference = Uuid::uuid4();
            $withdraw->amount = $request->amount;
            $withdraw->name = Auth::user()->first_name;
            $withdraw->phone = $request->phone;
            $withdraw->type = "DEPOSIT";
            $withdraw->status = Trading::PENDING;
            $withdraw->save();
            toastr()->success("Withdraw successful", 'Request success', ["Failed loggedIn"]);
            return redirect()->route('payment.finish_transaction');
        }
        return view("front.modals.deposit", [

        ]);
    }

    public function fluttercallback()
    {
        $status = request()->status;
        if ($status == 'successful') {
            $txf = request()->tx_ref;
            $user = User::query()->firstWhere(['unique_number' => $txf]);
            $user->balance = \request()->amount;
            $user->save();
            /*
               $transaction=Trading::query()->firstWhere(['reference'=>$txf]);
               $transaction->status=Trading::ACCEPTED;
               if ($transaction->type_trade==Trading::TRADE_BUY){

               }
               logger("FLUTTER CALLBAACK");
               $transaction->save();*/
        }
    }

}
