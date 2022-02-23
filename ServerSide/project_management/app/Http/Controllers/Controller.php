<?php

namespace App\Http\Controllers;

use Gate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $itemPerPage = 15;

    public function checkPermission(String $permission)
    {
        abort_if(Gate::denies($permission), 403);
    }

    public function checkPermissions(Array $permissions)
    {
        abort_if(Gate::none($permissions), 403);
    }

    public function putSL($collection)
    {
        $start = ($collection->currentPage() * $this->itemPerPage - $this->itemPerPage) + 1;
        $collection->each(function ($value) use (&$start) {
            $value->sl = $start++;
        });
    }
}
