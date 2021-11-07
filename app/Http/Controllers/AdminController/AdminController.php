<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\AdminInfo;

class AdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function __construct(){
//	$this->middleware('auth')->except('edit');
}
     public function hello(){
    	return 'hello admin';
    }

     public function add(){
    	return 'add admin';
    }
       public function edit(){
    	return 'edit admin';
    }
       public function delete(){
    	return 'delete admin';
    }
    public function getInfo1(){
      $data=['saeed','najeeb'];
	     return view('admin\adminInfo',compact('data'));
    }
    public function getInfo2(){

   //   $obj = new \stdClass();
   //   $obj -> name='saeed';
   //   $obj -> age='38';

     $obj = new AdminInfo('saeed','39');
   //   $obj -> name='saeed';
   //   $obj -> age='38';

    return view('admin\adminInfo1',compact('obj'));
   }
}
