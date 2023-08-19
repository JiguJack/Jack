<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('registration');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password'
            ]
        );

        $fName = $request->input('firstName');
        $lName = $request->input('lastName');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirm_password = $request->input('confirm_password');

        DB::table('user')->insert([
            'firstName' => $fName,
            'lastName' => $lName,
            'email' => $email,
            'password' => $password,
            'confirmPassword' => $confirm_password
        ]);

        // echo "Data inserted successfully.<br/>";
        // echo "<a href='/'>Click here</a> to go Home.";
        return redirect()->route('homepage');

    }
    public function show()
    {
        if( $user = DB::table('user')->get()->where('isDeleted', '=', 0)){
            return view('home', ['data' => $user]);
        }
    }
    public function destroy(string $userid)
    {
        DB::table('user')->where('userid', $userid)->update(
            [
                'isDeleted' => 1,
            ]
        );
        return redirect()->route('homepage')->with('success', 'Data deleted successfully');
    }
    public function showupdate(string $userid)
    {
        $showupdateUser = DB::table('user')->where('userid', $userid)->first();
        return view('updateUser')->with('data', $showupdateUser);
    }
    public function update(Request $request)
    {

       $request->validate(
            [
                'newfirstName' => 'required',
                'newlastName' => 'required',
                'newemail' => 'required|email',
                'newpassword' => 'required',
                'newconfirm_password' => 'required|same:newpassword'
            ]
       );
       $userID = $request->userid;
       $newFirstName = $request->input('newfirstName');
       $newLastName = $request->input('newlastName');
       $newEmail = $request->input('newemail');
       $newPassword = $request->input('newpassword');
       $newConfirmPassword = $request->input('newconfirm_password');

       $updateUser=DB::table('user')->where('userid', $userID )->update(
        [
            'firstName' => $newFirstName,
            'lastName' => $newLastName,
            'email' => $newEmail,
            'password' => $newPassword,
            'confirmPassword' => $newConfirmPassword
        ]
       );

       return redirect()->route('homepage');

    //    echo $request->userid;
       
    }
}