<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library\Response;
use Illuminate\Http\Request;

class PagesController extends Controller {

    function dashboard(){
        return Response::view('admin.index');
    }

}
