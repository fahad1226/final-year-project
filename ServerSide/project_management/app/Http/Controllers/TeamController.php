<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeamResource;
use App\Models\Team;
use App\Models\TeamUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $teams=Team::with('teamUsers')->paginate(10);
        //dd($teams);
       return $this->apiResponseResourceCollection(200,'Team List',TeamResource::collection( $teams));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_one_id'=>'required|unique:users,uid',
            'student_two_id'=>'required|unique:users,uid',
            'student_three_id'=>'required|unique:users,uid',
            'student_one_phone'=>'required|unique:users,phone',
            'student_two_phone'=>'required|unique:users,phone',
            'student_three_phone'=>'required|unique:users,phone',
            'student_one_email'=>'required|unique:users,email',
            'student_two_email'=>'required|unique:users,email',
            'student_three_email'=>'required|unique:users,email',
        ]);
       
       
       $student_one= User::create([
            'uid'       =>$request->student_one_id,
            'name'       =>$request->student_one_name,
            'email'     =>$request->student_one_email,
            'phone'     =>$request->student_one_phone,
            'password'  => Hash::make('123123123'),
        ]);
        $student_two= User::create([
            'uid'       =>$request->student_two_id,
            'name'       =>$request->student_two_name,
            'email'     =>$request->student_two_email,
            'phone'     =>$request->student_two_phone,
            'password'  => Hash::make('123123123'),
        ]);
        $student_three= User::create([
            'uid'       =>$request->student_three_id,
            'name'       =>$request->student_three_name,
            'email'     =>$request->student_three_email,
            'phone'     =>$request->student_three_phone,
            'password'  => Hash::make('123123123'),
        ]);
         
        $team= Team::create([
             'batch'            =>$request->batch
         ]);
         TeamUser::create([
             'user_id'  =>$student_one->id,
             'team_id'  =>$team->id,
             'user_type'=>1
         ]);
         TeamUser::create([
             'user_id'  =>$student_two->id,
             'team_id'  =>$team->id,
             'user_type'=>1
         ]);
         TeamUser::create([
             'user_id'  =>$student_three->id,
             'team_id'  =>$team->id,
             'user_type'=>1
         ]);
         TeamUser::create([
             'user_id'  =>auth()->id(),
             'team_id'  =>$team->id,
             'user_type'=>2
         ]);
        return $this->apiResponse(200,'Team created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
       $team->load('teamUsers');
        return $this->apiResponse(200,'Team List',TeamResource::make( $team));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
