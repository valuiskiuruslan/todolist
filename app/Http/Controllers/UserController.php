<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
//        DB::insert('INSERT INTO `users` (`name`,`email`,`password`) VALUES (?,?,?)', [
//             'Mike Brown', 'devtiger404@gmail.com', '0000'
//        ]);

//        $users = DB::select('SELECT * FROM `users`');
//        return $users;

//        DB::update("UPDATE `users` set `name`=? WHERE `id`=1", [
//            'Mike Brown'
//        ]);

//        DB::delete('DELETE FROM `users` WHERE `id`=1');

//        $user = new User();
//        dd($user);
//        $user->name = 'Test';
//        $user->email = 'test@test.te';
//        $user->password = 'pass';
//        $user->save();

//        $user = User::all();
//        return $user;

//        User::where('id', 2)->delete();

//        $data = [
//            'name' => 'Mike123 Brown',
//            'email' => 'mike1234@me.me',
//            'password' => 'pass',
//            'mobile' => 'asdf'
//        ];
//
//        $user = User::create($data);

        //$user = User::where('id', 3)->get();
//        dd($user);

//        $user = (new User())->where('id', 3);
//        dd($user);

        //return $user;

        return view('home');
    }

    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('images', $filename,'public');

            auth()->user()->update(['avatar' => $filename]);

           return redirect()->back();
        }
    }
}
