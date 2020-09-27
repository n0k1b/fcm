<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UserController extends Controller
{
    //

    public function register(Request $request)
    {
        $name = $request->name;
        $mobile = $request->mobile;
        $city = $request->city;
        $social_id = $request->social_id;

        $avail = User::where('mobile',$mobile)->first();
        // if($avail)
        // {
        //     $id = $avail->id;
        // }
        // else{
          User::create(['name'=>$name,'mobile'=>$mobile,'city'=>$city,'social_id'=>$social_id]);
          $user_id = Auth::user()->id;
        // }
        return $user_id;
        //return Auth::User();
    }
    public function test()
    {
        return "hello";
    }

    

}
