<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;
use App\Http\Resources\UserListingResource;


class PassportAuthController extends Controller
{
    //
    /**
     * Registration
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'role_id' => 'required|numeric',
            'phone' => 'required',
            'address' => 'required',
        ]);
 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
       
        $token = $user->createToken('Employee_management_app')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }
    /**
     * Login
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('Employee_management_app')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
    public function employee_details()
    {
       
        $role_id = auth()->user()->role_id;
        if($role_id == 1){
            \Log::info('0');
            $employee_details = User::with('role')->get();
            \Log::info('1');
            return response()->json([
                'success' => true,
                'employee_details' => $employee_details
            ]);
        }
        else{
            \Log::info('1');
            return response()->json([
                'success' => false,
                
            ]);
        }
       
        
    }
    
}
