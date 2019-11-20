<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /*
     * Function to retrieve a users comment
     * */
    public function getUserComments($id){
        $user = User::findOrFail($id);

        //  return $user['name'];
        return view('user-comments', compact('user'));
    }

}
