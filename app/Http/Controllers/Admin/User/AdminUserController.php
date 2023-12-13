<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    public function all()
    {
        $users = User::all();
        return view("panels.admin.users.all", compact("users"));
    }


    public function changeStatus(Request $request, $userId)
    {
        $user = User::find($userId);
        $user->status = $user->status == 1 ? 0 : 1;
        $user->save();
        return redirect()->back()->with("success", "کاربر با موفقیت ویرایش شد!");
    }


    public function changeRoll(Request $request, $userId)
    {
        $user = User::find($userId);
        $user->roll = $user->roll == 1 ? 0 : 1;
        $user->save();
        return redirect()->back()->with("success", "کاربر با موفقیت ویرایش شد!");
    }



    public function delete(Request $request, $userId)
    {
        $user = User::find($userId);
        $user->delete();
        return redirect()->back()->with("success", "کاربر با موفقیت حذف شد!");
    }
}
