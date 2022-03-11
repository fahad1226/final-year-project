<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeamSupervisorResource;
use App\Models\SupervisorProject;
use Illuminate\Http\Request;

class SupervisorProjectController extends Controller
{
   public function index()
   {
       $supervisor=SupervisorProject::where('user_id',auth()->id())->with('project')->get();
      return $this->apiResponseResourceCollection(200,'List',TeamSupervisorResource::collection($supervisor));
   }
}
