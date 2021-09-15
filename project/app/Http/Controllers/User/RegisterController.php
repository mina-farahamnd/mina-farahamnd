<?php

namespace App\Http\Controllers\User;

use App\Helper\Helper;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Generalsetting;
use App\Models\User;
use App\Classes\GeniusMailer;
use App\Models\Notification;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showRegisterForm()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {

    	$gs = Generalsetting::findOrFail(1);

/*    	if($gs->is_capcha == 1)
    	{
	        $value = session('captcha_string');
	        if ($request->codes != $value){
	            return response()->json(array('errors' => [ 0 => 'Please enter Correct Capcha Code.' ]));
	        }
    	}

        --- Validation Section*/

        $rules = [
		        'email'   => 'required|email',
		        'password' => 'required|confirmed',
		        'name' => 'required',
		        'lastname' => 'required',
		        'phone' => 'required',
                ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

        $user = User::where('phone',$request->phone)->first();
        $input = $request->all();
        $input['password'] = bcrypt($request['password']);
        $token = md5(time().$request->name.$request->email);
        $input['verification_link'] = $token;
        $input['affilate_code'] = md5($request->name.$request->email);
        $input['email_verified'] = 'No';
        if($user && $user->phone_verified == "No"){
            $user->update($input);
        }elseif(!$user){
            $user = new User;
            $user->fill($input)->save();
        }else{
            return response()->json(array('errors' => ["register" => 'شما از قبل دارای حساب کاربری میباشید.']));
        }


	         /* if(!empty($request->vendor))
	          {
					//--- Validation Section
					$rules = [
						'shop_name' => 'unique:users',
						'shop_number'  => 'max:10'
							];
					$customs = [
						'shop_name.unique' => 'This Shop Name has already been taken.',
						'shop_number.max'  => 'Shop Number Must Be Less Then 10 Digit.'
					];

					$validator = Validator::make(Input::all(), $rules, $customs);
					if ($validator->fails()) {
					return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
					}
					$input['is_vendor'] = 1;

			  }*/
			  
	        /*if($gs->is_verification_email == 1)
	        {
	        $to = $request->email;
	        $subject = 'Verify your email address.';
	        $msg = "Dear Customer,<br> We noticed that you need to verify your email address. <a href=".url('user/register/verify/'.$token).">Simply click here to verify. </a>";
	        //Sending Email To Customer
	        if($gs->is_smtp == 1)
	        {
	        $data = [
	            'to' => $to,
	            'subject' => $subject,
	            'body' => $msg,
	        ];

	        $mailer = new GeniusMailer();
	        $mailer->sendCustomMail($data);
	        }
	        else
	        {
	        $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
	        mail($to,$subject,$msg,$headers);
	        }
          	return response()->json('We need to verify your email address. We have sent an email to '.$to.' to verify your email address. Please click link in that email to continue.');
	        }*/


	        $notification = new Notification;
	        $notification->user_id = $user->id;
	        $notification->save();
            $code = Helper::generate_verification_code();
            session()->put('verify_time', time());
            session()->put('mobile_number', $user->phone);
            session()->put('verify_key', $code);
            Helper::sendSms($user->phone, $code);
            //Auth::guard('web')->login($user);
          	return response()->json(1);


    }

    public function checkVerifyCode(Request $request)
    {
        $request->validate([
            'verify_code' => 'required'
        ]);

        if ($request->session()->has('verify_time')) {
            $diff_time = time() - $request->session()->get('verify_time');
            if ($diff_time > 120 ) {
                $request->session()->forget('verify_key');
                return response()->json(['status' => '-1'  , 'msg' => 'کد تایید منقضی شده است']);
            }
            $mobile = $request->session()->get('mobile_number');
            $verify_key = $request->session()->get('verify_key');
            $code = $request->verify_code;
            if($verify_key == $code){
                $user = User::where(['phone' => $mobile])->first();
                if($user){
                    $user->update(['phone_verified' => 'Yes']);
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

    public function token($token)
    {
        $gs = Generalsetting::findOrFail(1);

        if($gs->is_verification_email == 1)
	        {    	
        $user = User::where('verification_link','=',$token)->first();
        if(isset($user))
        {
            $user->email_verified = 'Yes';
            $user->update();
	        $notification = new Notification;
	        $notification->user_id = $user->id;
	        $notification->save();
            Auth::guard('web')->login($user); 
            return redirect()->route('user-dashboard')->with('success','Email Verified Successfully');
        }
    		}
    		else {
    		return redirect()->back();	
    		}
    }
}