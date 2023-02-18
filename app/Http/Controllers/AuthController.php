<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Gender;
use App\Models\User;
use AuthenticatesUsers;
class AuthController extends Controller
{



    public function getLoginView(){


        if(Auth::check() ){
            return  redirect('/');
        }
        return view('auth.user_login');


    }



    public function doLogin(Request $request){

        $rules=[
            'username'=>'required|max:100|min:5',
            'password'=>'required|max:125|min:5'
        ];

        $data=$request->all();

        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return redirect()->route('login')->withInput($request->all())->withErrors($validator->errors());
        }

        if(Auth::attempt(['username'=>$data["username"],'password'=>$data["password"]])){
            return redirect('/home');

        }else{
            return redirect('/login')->withErrors(['login'=>'username and / or password is /are wrong']);
        }

    }


    public function getRegisterView(){
        if(Auth::check()){
            return  redirect('/');
        }
        $genders=Gender::paginate(2);
        return view('auth.register',compact('genders'));
    }

    public function doRegister(Request $request){

        $rules=[
            'username'=>'required|max:125|min:5|unique:users,username',
            'firstname'=>'required|max:60|min:5',
            'lastname'=>'max:60',
            'phone_number'=>'max:20',
            'address'=>'max:125',
            'email'=>'required|email|max:125|min:5|unique:users,email',
            'password'=>'required|max:125|min:5',
            'is_admin'=>'',
            'gender_id'=>'',
        ];
        $data=$request->all();
        $validator=Validator::make($data,$rules);
        if($validator->fails()){
            return redirect('/register')->withInput($data)->withErrors($validator->errors());

        }
        User::create($data);
        $newUser=new User();
        $fileName = time().$request->file('user_img')->getClientOriginalName();
        $path = $request->file('user_img')->storeAs('users', $fileName, 'public');
        $newUser->user_img = '/storage/'.$path;
        $newUser->username=$data["username"];
        $newUser->firstname=$data["firstname"];
        $newUser->lastname=$data["lastname"];
        $newUser->phone_number=$data["phone_number"];
        $newUser->address=$data["address"];
        $newUser->email=$data["email"];
        $newUser->password=bcrypt($data["password"]);
        $newUser->is_admin=$data["is_admin"];
        $newUser->gender_id=$data["gender_id"];
        $newUser->save();
        return redirect('/login')->with(["success"=>"Registered Success"]);

    }

    public function doLogout(){
        Auth::logout();
        return redirect('/login');
    }



}
