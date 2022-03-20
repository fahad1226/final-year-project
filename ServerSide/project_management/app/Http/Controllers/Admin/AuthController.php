<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\MyContestResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'token' => $user->createToken('tokens')->plainTextToken,
            'message' => 'User successfully registered',
        ], 201);
    }

    public function login(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $user = User::where('email', $input['email'])->first();
        // dd($user);
        if (!$user || !Hash::check($input['password'], $user->password)) {
            return response()->json([
                'message' => 'These credentials do not match our records.'
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token
        ], 201);
    }


    public function logout(Request $request)
    {

        $request->user()->currentAccessToken()->delete();
        return response(['message' => 'You have been successfully logged out.'], 200);
    }

    public function changeProfile(Request $request)
    {
        $input = $request->validate(
            [
                'email' => 'nullable|string|email|unique:users,email,' . auth()->id(),
                'phone' => 'required|digits:11',
                'gender' => 'nullable',
                'country' => 'nullable',
            ]
        );

        auth()->user()->update([
            'email' => $input['email'],
            'phone' => $input['phone'],
            'country' => $input['country'],
            'gender' => $input['gender'],
        ]);
        return $this->apiResponse(201, 'Update User Successfully');
    }

    public function changePassword(Request $request)
    {

        $validator = $request->validate(
            [
                'old_password' => 'required|min:8',
                'password' => 'required|min:8|confirmed',
            ],
        );
        // $data = $request->all();
        if (Hash::check($validator['old_password'], Auth::user()->password)) {
            auth()->user()->update([
                'password' => Hash::make($request->password),
            ]);
            return response()->json([
                'message' => 'Password Update Succesfully',
            ], 201);
        } else {
            return response()->json([
                'message' => 'Current_Password Is incorrect ',
            ], 404);
        }
    }


    public function changeProfilepicture(Request $request)
    {
        $input = $request->validate([
            'photo' => 'required|max:3024|mimes:png,jpg'
        ]);
        $user = auth()->user();
        $profile_image = updateFile($input['photo'], 'profile', $user->image);
        $user->image = $profile_image;
        $user->save();
        return response()->json([
            'message' => 'Photo Upload Successfully ',

        ], 201);
    }

    public function show()
    { 
        return UserResource::make(auth()->user());
    }
}