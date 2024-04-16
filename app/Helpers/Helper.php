<?php


namespace App\Helpers;


use App\Models\Category;
use App\Models\User;
use App\Models\Wallet;
use App\Repositories\ProductRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class Helper
{

    const per_page=10;
    public static function str_slug($text){
        return strtolower(str_ireplace(" ","_",$text)) ;
    }
    public static function upload(string $dir, string $format, $image = null)
    {
        if ($image != null) {
            $imageName = \Carbon\Carbon::now()->toDateString() . "-" . uniqid() . "." . $format;
            if (!Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir);
            }
            Storage::disk('public')->put($dir . $imageName, file_get_contents($image));
        } else {
            $imageName = 'def.png';
        }

        return $imageName;
    }
    public static function getWallet($id){
        $wallet=Wallet::query()->firstWhere(['user_id'=>Auth::user()->id,'crypto_id'=>$id]);
        return $wallet;
    }
    public static function getWalletHome($id,$userid){
        $wallet=Wallet::query()->firstWhere(['user_id'=>$userid,'crypto_id'=>$id]);
        return $wallet;
    }
    public static function generatenumber()
    {
        $tabs=['1','2','3','4','5','6','7','8','9','0'];
        $strong=date("ymds");
        for ($i = 1; $i <= 15; $i++) {
            $strong .= $tabs[rand(0, count($tabs) - 1)];
        }
        return $strong;
    }
    public static function send_creation_account($data)
    {
        $data_ = array('email' => $data['email'],'first_name' => $data['first_name'],'activate_key'=>$data['activate_key'],'slot'=>"");
        Mail::send(['html' => 'mails.verified_mail'], $data_, function ($message)
        use ($data) {
            $message->to($data['email'], $data['first_name'])->subject("Confirm email");
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });

    }
}
