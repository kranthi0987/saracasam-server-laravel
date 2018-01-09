<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/29/2017
 * Time: 7:49 PM
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{


    public $successStatus = 200;


    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['error'] = false;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            $success['error'] = true;
            $success['error message'] = 'Unauthorised';
            return response()->json(['error' => $success], 401);
        }
    }


    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'name' => 'required',
//            'email' => 'required|email',
//            'password' => 'required',
//            'c_password' => 'required|same:password',
//        ]);


//        if ($validator->fails()) {
//            return response()->json(['error'=>$validator->errors()], 401);
//        }


        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;


        return response()->json(['success' => $success], $this->successStatus);
    }


    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        return response()->json(['user' => Auth::user()], $this->successStatus);
    }
}