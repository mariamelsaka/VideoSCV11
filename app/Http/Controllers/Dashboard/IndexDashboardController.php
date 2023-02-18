<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IndexDashboardController extends Controller
{
//    DASHBOARDDDDDDDDDDDD
    public function index(){
        $users=User::all();
        return view('dashboard.dashboard',compact('users'));
    }

//    ADMINNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

    public function addadminview(){

        $genders=Gender::all();
        $users=User::all();
        return view('dashboard.AddAdmin',compact('genders'),compact('users'));
    }

    public function DoAdd_admin(Request $request){

        $rules=[
            'username'=>'required|max:125|min:5|unique:users,username',
            'firstname'=>'required|max:60',
            'lastname'=>'max:60',
            'phone_number'=>'max:20',
            'address'=>'max:125',
            'email'=>'required|email|max:125|min:5|unique:users,email',
            'password'=>'required|max:125|min:5',
            'is_admin'=>'',
            'gender_id'=>'',
        ];
//        $requestData = $request->all();
        $data=$request->all();
        $validator=Validator::make($data,$rules);
        if($validator->fails()){
            return redirect('/addadmin')->withInput($data)->withErrors($validator->errors());

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

        return redirect('admin/editadmins')->with(["success"=>"Registered Success"]);

    }
//    public function admin_id(Request $id){
//        $users=User::all();
//        return view('dashboard.edit_admin',compact('users'));
//    }
    public function admin_editview($id){
        $user = User::find($id);
        $users=User::all();
        return view('dashboard.edit_admin',compact('users'),compact('user'));
    }
    public function admin_update(Request $request,$id){
        $user = User::find($id);
        $request->validate([
            'username'=>'required|max:125|min:5',
            'firstname'=>'required|max:60|min:5',
            'lastname'=>'max:60',
            'phone_number'=>'max:20',
            'address'=>'max:125',
            'email' => [ 'email', 'max:100', 'unique:users,email,'. $user->id],
            'gender_id'=>'',
        ]);
        $user->username = $request->get('username');
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->phone_number = $request->get('phone_number');
        $user->address = $request->get('address');
        $user->email = $request->get('email');
        $user->gender_id = $request->get('gender_id');

        // Update user
        $user->update();
        return redirect()->back()->with('status','Student Updated Successfully');
//        return redirect('admin/updateadmin')
//            ->with('success', 'User data updated successfully');
    }
    public function delete_admin($id) {
        DB::delete('delete from users where id = ?',[$id]);

        echo "Record deleted successfully.<br/>";
        echo '<a href = "admin/editadmins">Click Here</a> to go back.';
    }
//    AUTHINTICATION
    public function doLogout(){
        Auth::logout();
        return redirect('/admin_login');
    }


    public function admin_getLoginView(){
        if(Auth::check() ){
            return  redirect('/');
        }
        return view('dashboard.admin_login');
    }

    public function admin_doLogin(Request $request){

        $rules=[
            'username'=>'required|max:100|min:5',
            'password'=>'required|max:125|min:5'
        ];

        $data=$request->all();

        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            return redirect()->route('dashboard.admin_login')->withInput($request->all())->withErrors($validator->errors());
        }
        if(Auth::attempt(['username'=>$data["username"],'password'=>$data["password"]])){
            return redirect('admin/dashboard');

        }else{
            return redirect('/admin_login')->withErrors(['login'=>'username and / or password is /are wrong']);
        }

    }

}
