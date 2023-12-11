<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ghasedak\Laravel\GhasedakFacade;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function sendotp(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'phoneNumber' => ['required', 'numeric', 'min:10', 'regex:/^(\+98|0)?9\d{9}$/'],
        ]);

        if ($validator->fails()) {
            $showingmessages = makeErrors($validator->errors()->getMessages());
            return response()->json(['data' =>  $showingmessages]);
        }


        try {
            $validationCode = rand(1, 9) . rand(1, 9) . rand(1, 9) . rand(1, 9);

            $user = User::where("phone_number", $request->phoneNumber)->first();

            if ($user == null) {
                $user = new User();
                $user->phone_number = $request->phoneNumber;

                $user->password = Hash::make($validationCode);
                $user->save();
            } else {

                $user->password = Hash::make($validationCode);
                $user->save();
            }



            $response = GhasedakFacade::setVerifyType(GhasedakFacade::VERIFY_MESSAGE_TEXT)
                ->Verify(
                    $request->phoneNumber,
                    "accountkade",
                    $validationCode,
                );

            return response()->json(["data" => "done"], 200);
        } catch (\Throwable $th) {
            return response()->json(['data' =>  $th->getMessage()]);
        }
    }
}
