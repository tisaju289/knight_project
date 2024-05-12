<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Auth;
use App\Models\User;
use App\Mail\OTPMail;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function signUp(){
        return view('auth.pages.signUp');
    }
    
    public function signIn(){
        return view('auth.pages.signIn');
    }
    
    public function passwordResetOption(){
        return view('auth.pages.passwordResetOption');
    }
    
    public function passwordResetMobile(){
        return view('auth.pages.passwordResetMobile');
    }
    
    public function passwordResetEmail(){
        return view('auth.pages.passwordResetEmail');
    }
    
    public function otpMobile(){
        return view('auth.pages.otpMobile');
    }
    
    public function otpEmail(){
        return view('auth.pages.otpEmail');
    }
    
    public function passwordChange(){
        return view('auth.pages.passwordChange');
    }
    
    public function successMessage(){
        return view('auth.pages.successMessage');
    }
    
    public function screenLock(){
        return view('auth.pages.screenLock');
    }
    
    public function logout(){
        return view('auth.pages.logout');
    }







//Auth API Part

public function UserRegistration(Request $request){

    try{
        $request->validate([
         
            "fullname"=>'required|string|max:50',
            "email"=>'required|string|max:50',
            "mobile"=>'required|string|max:50',
            "password"=>'required|string|min:3',
        ]);

        Auth::create([
            "fullname"=>$request->input("fullname"),
            "email"=>$request->input("email"),
            "mobile"=>$request->input("mobile"),
            "password"=>$request->input("password"), 
        ]);

        return response()->json(['status'=>'success', 'message'=> 'User Registration Successfully']);
    }catch(Exception $e){
        return response()->json(['status'=>'Failed', 'message'=> $e->getMessage()]);
    }

}






  function UserLogin(Request $request){
    try{
        $request->validate([
            'email' => 'required|string|email|max:50',
            'password' => 'required|string|min:3'
        ]);

        $user = Auth::where('email', $request->input('email'))
        ->where('password', $request->input('password'))
        ->first();

        if (!$user) {
            return response()->json(['status' => 'failed', 'message' => 'Invalid User']);
        }
        $token=JWTToken::CreateToken($request->input('email'),$user->id);
        return response()->json([
            'status' => 'success',
            'message' => 'User Login Successful',
        ],200)->cookie('token',$token,time()+60*24*30);


    }catch(Exception $e){
        return response()->json(['status' => 'failed', 'message' => $e->getMessage()]);
    }
}

public function UserLogout(){
    return redirect('/')->cookie('token','',-1);
}



function SendOTPCode(Request $request){

    $email=$request->input('email');
    $otp=rand(100000,999999);
    $count=Auth::where('email','=',$email)->count();

    if($count==1){
        // OTP Email Address
        Mail::to($email)->send(new OTPMail($otp));
        // OTO Code Table Update
        Auth::where('email','=',$email)->update(['otp'=>$otp]);

        return response()->json([
            'status' => 'success',
            'message' => '6 Digit OTP Code has been send to your email !'
        ],200);
    }
    else{
        return response()->json([
            'status' => 'failed',
            'message' => 'unauthorized'
        ]);
    }
}



function VerifyOTP(Request $request){
    $email=$request->input('email');
    $otp=$request->input('otp');
    $count=Auth::where('email','=',$email)
        ->where('otp','=',$otp)->count();

    if($count==1){
        // Database OTP Update
        Auth::where('email','=',$email)->update(['otp'=>'0']);

        // Pass Reset Token Issue
        $token=JWTToken::CreateTokenForSetPassword($request->input('email'));
        return response()->json([
            'status' => 'success',
            'message' => 'OTP Verification Successful',
        ],200)->cookie('token',$token,60*24*30);

    }
    else{
        return response()->json([
            'status' => 'failed',
            'message' => 'unauthorized'
        ],200);
    }
}







function ResetPassword(Request $request){
    try{
        $email=$request->header('email');
        $password=$request->input('password');
        Auth::where('email','=',$email)->update(['password'=>$password]);
        return response()->json([
            'status' => 'success',
            'message' => 'Request Successful',
        ],200);

    }catch (Exception $exception){
        return response()->json([
            'status' => 'fail',
            'message' => 'Something Went Wrong',
        ],200);
    }
}



function UserProfile(Request $request){
    $email=$request->header('email');
    $user=Auth::where('email','=',$email)->first();
    return response()->json([
        'status' => 'success',
        'message' => 'Request Successful',
        'data' => $user
    ],200);
}

function UpdateProfile(Request $request){
    try{
        $email=$request->header('email');
        $fullname=$request->input('fullname');
        $mobile=$request->input('mobile');
        $password=$request->input('password');
        Auth::where('email','=',$email)->update([
            'fullname'=>$fullname,
            'mobile'=>$mobile,
            'password'=>$password
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Request Successful',
        ],200);

    }catch (Exception $exception){
        return response()->json([
            'status' => 'fail',
            'message' => 'Something Went Wrong',
        ],200);
    }
}



}