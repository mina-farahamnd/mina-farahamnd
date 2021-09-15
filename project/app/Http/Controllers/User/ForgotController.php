<?php

namespace App\Http\Controllers\User;

use App\Helper\Helper;
use App\Models\Generalsetting;
use App\Models\User;
use Illuminate\Http\Request;
use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;

class ForgotController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showForgotForm()
    {
      return view('user.forgot');
    }

    public function forgot(Request $request)
    {
      $gs = Generalsetting::findOrFail(1);
      $input =  $request->all();
      if (User::where('email', '=', $request->email)->count() > 0) {
      // user found
      $admin = User::where('email', '=', $request->email)->firstOrFail();
      $autopass = str_random(8);
      $input['password'] = bcrypt($autopass);
      $admin->update($input);
      $subject = "Reset Password Request";
      $msg = "Your New Password is : ".$autopass;
      if($gs->is_smtp == 1)
      {
          $data = [
                  'to' => $request->email,
                  'subject' => $subject,
                  'body' => $msg,
          ];

          $mailer = new GeniusMailer();
          $mailer->sendCustomMail($data);                
      }
      else
      {
          $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
          mail($request->email,$subject,$msg,$headers);            
      }
      return response()->json('Your Password Reseted Successfully. Please Check your email for new Password.');
      }
      else{
      // user not found
      return response()->json(array('errors' => [ 0 => 'No Account Found With This Email.' ]));    
      }  
    }


    public function sendVerifyCode(Request $request)
    {
        $request->validate([
            'phone' => 'required'
        ]);
        $user = User::where(['phone' => $request->phone])->first();
        if(!$user || ($user && $user->phone_verified == 'No'))
        {
            return response()->json(['msg' => 'حساب کاربری یافت نشد. لطفا ثبت نام کنید'  , 'status' => -1]);
        }
        $code = Helper::generate_verification_code();
        session()->put('verify_time', time());
        session()->put('mobile_number', $user->phone);
        session()->put('verify_key', $code);
        Helper::sendSms($user->phone, $code);
        return response()->json(['status' => 1]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'reset_code' => 'required',
            'reset_password' => 'required|confirmed',
        ]);

        if ($request->session()->has('verify_time')) {
            $diff_time = time() - $request->session()->get('verify_time');
            if ($diff_time > 120 ) {
                $request->session()->forget('verify_key');
                return response()->json(['status' => '-1'  , 'msg' => 'کد تایید منقضی شده است']);
            }
            $mobile = $request->session()->get('mobile_number');
            $verify_key = $request->session()->get('verify_key');
            $code = $request->reset_code;
            if($verify_key == $code){
                $user = User::where(['phone' => $mobile])->first();
                if($user){
                    $user->update(['password' => bcrypt($request->reset_password)]);
                }
                Auth::loginUsingId($user->id);
                session()->forget('verify_time');
                session()->forget('mobile_number');
                session()->forget('verify_key');
                return response()->json(['status' => '1' ]);
            }else{
                return response()->json(['status' => '-1' , 'msg' => 'کد تایید اشتباه است']);
            }
        }
    }

}
