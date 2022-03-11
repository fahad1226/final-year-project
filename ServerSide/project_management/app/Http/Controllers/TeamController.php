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
        
        $teams=Team::with('teamUsers','project')->paginate(10);
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
        if(auth()->user()->role==User::SUPERVISOR){
         $team= Team::create([
             'batch'            =>$request->batch
         ]);
        foreach($request->user as $key=>$user)
     {
        $request->validate([
            'user.'.$key.'.uid'    =>'required|unique:users,uid',
            'user.'.$key.'.name'  =>'required|string',  
            'user.'.$key.'.email'  =>'required|email|unique:users,email',
            'user.'.$key.'.phone'  =>'required|string|unique:users,phone', 
        ]);
        $user['password']=Hash::make('123123123');
        $student= User::create($user);
        TeamUser::create([
             'user_id'  =>$student->id,
             'team_id'  =>$team->id,
             'user_type'=>TeamUser::STUDENT
         ]);

     }

      
        TeamUser::create([
             'user_id'  =>auth()->id(),
             'team_id'  =>$team->id,
             'user_type'=>TeamUser::SUPERVISOR
         ]);
     
        return $this->apiResponse(200,'Team created successfully');}
         else
        return $this->apiResponse(403,'Unauthorised!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
   $team->load('teamUsers','teamSuperVisor','project');
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
         if(auth()->user()->role==User::SUPERVISOR){
             $team->batch=$request->batch;
             $team->update();
         
           foreach($request->user as $key=>$user)
     {
        $request->validate([
            'user.'.$key.'.uid'    =>'required|unique:users,uid',
            'user.'.$key.'.name'  =>'required|string',  
            'user.'.$key.'.email'  =>'required|email|unique:users,email',
            'user.'.$key.'.phone'  =>'required|string|unique:users,phone', 
        ]);
        $user['password']=Hash::make('123123123');
        $student= User::create($user);
        TeamUser::create([
             'user_id'  =>$student->id,
             'team_id'  =>$team->id,
             'user_type'=>TeamUser::STUDENT
         ]);
        }
     } else
        return $this->apiResponse(403,'Unauthorised!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
         if(auth()->user()->role==User::SUPERVISOR){
        $team->delete();
        return $this->apiResponse(200,'Team Data Deleted');
        } else
        return $this->apiResponse(403,'Unauthorised!!');
    
    }
}
