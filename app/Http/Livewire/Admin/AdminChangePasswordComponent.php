<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminChangePasswordComponent extends Component
{
    public $current_password;
    public $new_password;
    public $confirm_password;
    public function render()
    {
        return view('livewire.admin.admin-change-password-component')->layout('FrontEnd.layouts.guest');
    }

    public function updatePassword()
    {
        $user = Auth::user();

        if (Hash::check($this->current_password, $user->password)) {
            if ($this->new_password === $this->confirm_password) {
                $user->password = Hash::make($this->new_password);
                $user->save();
                session()->flash('message', 'Password has been changed successfully!');
                return redirect()->back();
            } else {
                session()->flash('message', 'New Password and Confirm Password does not match!');
                return redirect()->back();
            }
        } else {
            session()->flash('message', 'Current Password does not match!');
            return redirect()->back();
        }
    }
    // if (Hash::check($request->current_password, Auth::user()->password)) {

    //     if ($request->new_password === $request->confirm_password) {
    //         $user = User::findOrFail(Auth::user()->id);
    //         $user->password = Hash::make($request->new_password);
    //         $user->save();
    //         // return redirect('doctor/doctor_change_password')->with('status', 'Password Changed Successfully');
    //         session()->flash('status', 'Password Changed Successfully');
    //     } else {
    //         return redirect()->back()->with('status', 'New Password and  Confirm Password not matched ');
    //     }
    // } else {
    //     return redirect()->route('doctor.doctor_change_password')->with('status', 'Password does not change');
    // }
}
