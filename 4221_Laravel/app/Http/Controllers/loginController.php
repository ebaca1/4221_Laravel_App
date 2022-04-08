<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller {

    public function badLogin(Request $request) {
        //mysqli connection
        $conn = mysqli_connect("localhost", env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'));
        //Get username and password from request
        $username = $request->username;
        $password = $request->passw;
        //Build sql string
        
        /**** Raw sql query - Vulnerable to SQL injection ****/
        
        //Attacker can get in as the first user by typing the following into the username field: someUser' or 1=1 -- \
            // OR, typing the following into the username: someUser - and password: somePassword' or 1=1 -- \

        //Attacker can get into aspecific account if they know the username, by entering the following into the username field: aUsername' -- \

        $sql = "Select * FROM users WHERE username = '$username' AND passw = '$password'";

        //Run query
        $query = mysqli_query($conn, $sql);

        //If the login is successful, redirect to the home page
        if(mysqli_num_rows($query) > 0){
            return view ('4221_Test');
        }
        //If the login is unsuccessful, return to badForm page
        else{
            return redirect ('/badForm');
        }
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
        if($results){
            return view ('4221_Test');
        }
        //If the login is unsuccessful, return to badForm page
        else{
            return redirect ('/badForm');
        }
    }

}