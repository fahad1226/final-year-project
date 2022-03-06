<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        dd('create');
    }

    public function store(Request $request)
    {
       
        
         $this->checkPermission('user.create');
         
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        $this->checkPermission('profile.access');

        return view('dashboard.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function editProfile()
    {
       
       $this->checkPermission('profile.edit');
           
        return $this->apiResponse(200,'ok');
        
        $user = auth()->user();
        
        return view('dashboard.user.edit-profile', compact('user'));
    }

    public function change_password()
    {
        $this->checkPermission('profile.edit');
        return view('dashboard.user.change_password');
    }
    public function student()
    {
        $users=User::where('role',User::STUDENT)->with('teamUser')->paginate(20);
        $users->load('teamUser');
      //  $users->whenLoaded('teamUser')->load('team');
       // dd($users);
        return view('dashboard.user.student',compact('users'));
    }
}
