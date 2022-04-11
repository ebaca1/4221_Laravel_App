<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller {

    public function badForm() {
        $error = "";
        return view('badForm')->with([
            'error' => $error
        ]);
    }

    public function badLogin(Request $request) {
        //Get username and password from request
        $username = $request->username;
        $password = $request->passw;
        //Build sql string
        $vulnerableSql = DB::raw(" Select * FROM users WHERE username ='$username' AND passw ='$password' ");
        /**** Raw sql query - Vulnerable to SQL injection ****/
        
        //Attacker can get in as the first user by typing the following into the username field: someUser' or 1=1 -- \
            // OR, typing the following
                //username: someUser
                //password: somePassword' or 1=1 -- \

        //Attacker can get into a specific account if they know the username, by entering the following into the username field: aUsername' -- \

        //Run query
        $results = DB::SELECT($vulnerableSql);

        
        //If the login is successful, redirect to the home page
        if(!collect($results)->isEmpty()){
            return view ('success')->with([
                'results' => $results
            ]);
        }
        //If the login is unsuccessful, return to badForm page
        else{
            $error = "Authentication Failed: Incorrect Username or Password";
            return view ('badForm')->with([
                'error' => $error
            ]);
        }
    }

    public function goodForm() {
        $error = "";
        return view('goodForm')->with([
            'error' => $error
        ]);
    }

    public function goodLogin(Request $request) {
        //Get username and password from request
        $username = $request->username;
        $password = $request->passw;
        
        //Laravel Framework's built in query builder - Secure from SQL injection
        $results = DB::table('users')
                     ->where('username', $username)
                     ->where('passw', $password)
                     ->get();

        //If the login is successful, redirect to the home page
        if(!$results->isEmpty()){
            return view ('success')->with([
                'results' => $results
            ]);
        }
        //If the login is unsuccessful, return to goodForm page
        else{
            $error = "Authentication Failed: Incorrect Username or Password";
            return view ('goodForm')->with([
                'error' => $error
            ]);
        }
    }
   

    public function success() {
        return redirect ('/');
    }

}