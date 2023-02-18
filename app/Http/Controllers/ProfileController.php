<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
    //
    public function getprofileView()
    {
        return view('profile');
    }

    public function update(Request $request){
        $current_user = Auth::user();
        $request->validate([
            'username'=>'max:125|min:5|unique:users,username',
            'firstname' => ['string', 'max:60'],
            'lastname' => ['string', 'max:60'],
            'email' => [ 'email', 'max:100', 'unique:users,email,'. $current_user->id],
            'phone_number'=>'max:20',
            'address'=>'max:125',
        ]);
        $current_user->username = $request->get('username');
        $current_user->firstname = $request->get('firstname');
        $current_user->lastname = $request->get('lastname');
        $current_user->email = $request->get('email');
        $current_user->phone_number = $request->get('phone_number');
        $current_user->address = $request->get('address');
        // Update user
        $current_user->update();
        return redirect('profile')
            ->with('success', 'User data updated successfully');
    }

//    public function deleteprofile($id) {
////        $current_user = Auth::user();
////        $current_user->avatar = "default.png";
////        $current_user->save();
//    }
}
