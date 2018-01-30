<?php

namespace App\Http\Controllers;
use Illuminate\Session\Middleware\StartSession;
use DB;
class DemoController extends Controller
{
   public function index()
   {
        dump(DB::connection()->getPdo());
        phpinfo();die;
       
   }
}
