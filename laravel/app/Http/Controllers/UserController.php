<?php
namespace App\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: mona
 * Date: 8/17/2016 AD
 * Time: 19:01
 */
use App\Http\Requests;

use Validator, Input;

use App\Entities\User; // should be change to user
use App\Entities\Image;
use App\Entities\Article;
use App\Entities\Link;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//
//    {
//        echo "hiiiiii";
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


//    /**
//     * Display the admin login form if not logged in,
//     * else redirect him/her to the admin dashboard.
//     *
//     */
//    public function getAdminLogin()
//    {
//        if(Auth::check() && Auth::user()->role === 'admin')
//        {
//            return redirect('/admin/dashboard');
//        }
//        return view('admin_login');
//    }
//
//    /**
//     * Process the login form submitted, check for the
//     * admin credentials in the users table. If match found,
//     * redirect him/her to the admin dashboard, else, display
//     * the error message.
//     *
//     */
//    public function postAdminLogin(Request $request)
//    {
//        $this->validate($request, [
//            'email'    => 'required|email|exists:users,email,role,admin',
//            'password' => 'required'
//        ]);
//
//        $credentials = $request->only( 'email', 'password' );
//
//        if(Auth::attempt($credentials))
//        {
//            return redirect('/admin/dashboard');
//        }
//        else
//        {
//            // Your logic of invalid credentials.
//            return 'Invalid Credentials';
//        }
//    }
//


    public function index()

    {

        $allLink = Link::all();
        $allArticle = Article::all();
        $allImage = Image::all();

        return view('user.profile')->with("linked_links", $allLink)
            ->with("articles", $allArticle)
            ->with('images',$allImage);

    }





    public function editBaseInfo(Request $request){

        //echo "mona is good";

        $user = User::find('1');

        $user->email = $request->input('email');

        $user->save();



        $request->session()->flash('alert-success', 'ایمیل با موفقیت تغییر یافت');
        return redirect('/admin');
    }


    public function editPass(Request $request){



        $user = User::find('1');

        $newPass = $request->input('pass');
        $newPassR=$request->input('repeat_pass');

        //check hash passwords with each other .... validator
        if($newPass == $newPassR){
            $user->password = bcrypt($newPass);
            $user->save();
            $request->session()->flash('alert-success', 'رمز عبور با موفقیت تغییر یافت');
        }
        else{
            $request->session()->flash('alert-danger', 'رمز عبور با تکرار آن متفاوت است');
        }





        return redirect('/admin');

    }

    //edit photo of user
    public function editPhoto(Request $request){

        $user = User::find('1');

        //$user
        return redirect('/admin');
    }
}