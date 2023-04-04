<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;



class AuthController extends Controller
{


    use AuthorizesRequests, ValidatesRequests;

   

    public function login(Request $request)
    {
        
        $username = $request->input('username');
    $password = $request->input('password');

    // check if the username and password are correct
    if ($username === 'gees' && $password === 'gees') {
        return redirect()->route('gees');
    } else {
        // handle invalid credentials
        return back()->withErrors(['message' => 'Invalid username or password']);
    }


    }

    
    
 

}
