<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentsRequest;
use App\User;

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


    /*
  * Function to handle form post request, this returns the user
  * back to the page with
  *  an error message if not found and a
  * success message if found
  * */
    public function  createPostUserComment(CommentsRequest $request){
        $findUser = User::find($request->id);

        if(!empty($findUser)){
            $findUser->comments .= $request->comments;
            $findUser->save();
            return redirect()->back()->with(['success' => 'User Created']);
        }else{
            return redirect()->back()->with(['error' => 'Invalid User']);
        }
    }

    /*
   * Function to handle json post request and returns 404 if not found
   * */
    public function createJsonUserComment(CommentsRequest $request){
        $findUser = User::find($request->id);

        if(!empty($findUser)){
            $findUser->comments .= $request->comments;
            $findUser->save();
            return response()->json(['success' => 'comment successfully added'], 201);
        }else{
            return response()->json(['error' => 'user not found'], 404);
        }


    }
}
