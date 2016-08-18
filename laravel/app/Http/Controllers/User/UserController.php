<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
/**
 * Created by PhpStorm.
 * User: mona
 * Date: 8/17/2016 AD
 * Time: 19:01
 */


class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profile');
    }





    public function editInfo(Request $request){


        $user = User::find($request->post('id'));

        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->username = $request->post('username');


        $user->save();

        return Redirect::to(admin/question);

    }


    public function editPass(Request $request){



        $user = User::find($request->post('id'));

        $newPass = $request->post('password');
        $newPassR=$request->post('password_repeat');

        //check hash passwords with each other .... validator
        if($newPass == $newPassR){
            $user->save();
            $notif = 'رمز عبور با موفقیت تغییر یافت ';
        }

        return view('user.profile')->with('notif', $notif);

    }
}