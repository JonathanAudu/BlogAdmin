<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function updateUser(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'profile_photo' => 'mimes:jpg,bmp,png',
            'phone_number' => 'required|unique:users|digits:11'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $user = $request->user();
        if ($request->hasFile('profile_photo')) {
            if ($user->profile_photo) {
                $old_path = public_path() . '/uploads/profile_images/' . $user->profile_photo;
                if (File::exists($old_path)) {
                    File::delete($old_path);
                }
            }
            $image_name = 'profile_photo-' . time() . '.' . $request->profile_photo->extension();
            $request->profile_photo->move(public_path('/uploads/profile_images/'), $image_name);
        } else {
            $image_name = $user->profile_photo;
        }

        $user->update([
            'name' => 'required|string',
            'profile_photo' => 'mimes:jpg,bmp,png',
            'phone_number' => 'required|unique:users|digits:11'
        ]);

        return view('home');
    }
}
