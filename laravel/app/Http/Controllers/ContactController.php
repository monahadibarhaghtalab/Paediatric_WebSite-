<?php
/**
 * Created by PhpStorm.
 * User: mona
 * Date: 2/8/2017 AD
 * Time: 16:13
 */


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function getContact()

    {
        return view('contact.contact');
    }
}
