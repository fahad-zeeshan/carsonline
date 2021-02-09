<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{


    public function create()
    {
        return view('admins.add-users');
    }

//    /**
//     * @param UserRequest $request
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
//     */
    public function store(UserRequest $request)
    {
        try {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->back()->with('success' , 'User Added successfully');
        } catch (Exception $e) {
          return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function index()
    {
         $users = User::all();
         return view('admins.view-all-users', compact('users'));
    }
    public function edit($id)
    {
        $edit=User::find($id);
        return view('Admins.edit',compact('edit'));
    }

    public function update(Request $request)
    {
         $update=User::find($request->id);
         $update->name = $request->name;
         $update->email = $request->email;
         $update->save();
//        return response()->json(['success' => 'User has been updated successfully']);
//         return redirect('show-data');
         return redirect()->route('users')->with('status', 'Profile updated!');
    }

    public function delete($id)
    {
       $delete = User::find($id);
       $delete->delete();
       return response()->json(['success' => 'User has been deleted successfully']);
    }
}
