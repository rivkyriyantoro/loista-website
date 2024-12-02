<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:100',
            'password' => 'required|min:8|max:50',
        ]);

        if ($validator->fails()) {
            # code...
            return response()->json([
                'status' => 400,
                'message' => $validator->getMessageBag()
            ]);
        } else {
            $admin = Admin::where('email', $request->email)->first();
            if ($admin) {
                if (Hash::check($request->password, $admin->password)) {
                    $request->session()->put('admin', $admin->id_admin);
                    $request->session()->put('email', $admin->email);
                    return response()->json([
                        'status' => 200,
                        'message' => 'success',
                    ]);
                } else {
                    return response()->json([
                        'status' => 400,
                        'message' => 'Password or Email Incorrect'
                    ]);
                }
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'User not found'
                ]);
            }
        }
    }

    public function logout()
    {
        if (session()->has('admin')) {
            session()->pull('admin');  // Hapus session admin
            return response()->json([
                'status' => 200,
                'message' => 'success',
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'No active session',
            ]);
        }
    }
}
