<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 401);
        } else {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ];
        }
        // Create user in the database
        DB::beginTransaction();
        try {
            $user = User::create($data);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            p($e->getMessage());
            $user = null;
        }

        if ($user) {
            $token = $user->createToken("auth_token")->accessToken;
            return response()->json([
                "message" => "Successfully created user!",
                "access_token" => $token,
                "status" => 1,
            ],200);}
        else
        {
        return response()->json([
            "message" => "Error creating user!",
            "status" => 0,
        ], 500);
        }
    }




    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if ($user) {
            // If a user with the given email exists, compare the input password with the hashed password
            if (Hash::check($validatedData['password'], $user->password)) {
                // Return token and user data on successfull authentication
                $token = $user->createToken("auth_token")->accessToken;
                return response()->json(
                    [
                        "message" => "Login Successfully",
                        "access_token" => $token,
                        "status" => 1
                    ],200
                );
            } else {
                // Passwords do not match
                return response()->json(
                    [
                        "message" => "Passwords do not match",
                        "status" => 0
                    ],401
                );
            }
        } else {
            // User with the given email does not exist
            return response()->json(
                [
                    "message" => "User Not Found",
                    "status" => 0
                ],401
            );
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        // p($user);

       
        if ($user) {
            // If a user with the given email exists, compare the input password with the hashed password
            return response()->json(
                [
                    "message" => "User Found",
                    'data'=>$user,
                    "status" => 1,
                ],200
            );
        } else {
            // User with the given email does not exist
            return response()->json(
                [
                    "message" => "User Not Found",
                    "status" => 0
                ],401
            );
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
