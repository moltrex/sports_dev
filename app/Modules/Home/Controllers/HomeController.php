<?php
/**
 * Created by PhpStorm.
 * User: dgame
 * Date: 3/18/2019
 * Time: 22:30
 */

namespace App\Modules\Home\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function displayHomePage(){
        try{
            return view('Home::home');
        }catch (\Exception $e){
            dd($e);
        }
    }
}