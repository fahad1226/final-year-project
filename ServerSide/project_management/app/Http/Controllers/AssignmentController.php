<?php

namespace App\Http\Controllers;

use App\Http\Resources\AssignmentResource;
use App\Models\Assignment;
use App\Models\User;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        if(auth()->user()->role==User::SUPERVISOR || auth()->user()->role==User::SUPERVISOR){
             $request->validate([
            'project_id'=>'required|exists:projects,id',
            'details'   =>'required|string'
        ]);
        Assignment::create($request->all());
        return $this->apiResponse(200,'New Assignment Added');
        }
        else
        return $this->apiResponse(403,'Unauthorised!!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        return $this->apiResponse(200,'Details',AssignmentResource::make( $assignment));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
         if(auth()->user()->role==User::SUPERVISOR || auth()->user()->role==User::SUPERVISOR){
         if($request->status==1){
        $assignment->update(['status'=>1]);
         return $this->apiResponse(200,'Assignment Completed');
    }
       $input= $request->validate([
            'project_id'=>'required|exists:projects,id',
            'details'   =>'required|string'
        ]);
        if($request->status==1){ $input['status']=Assignment::APPROVED;$message='Assignment Completed';}
        $assignment->update($input);
        $message='Assignment Updated Succesfully';
        return $this->apiResponse(200,$message);
        }
        else
        return $this->apiResponse(403,'Unauthorised!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
}
