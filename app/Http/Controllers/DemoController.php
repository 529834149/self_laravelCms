<?php

namespace App\Http\Controllers;
use Illuminate\Session\Middleware\StartSession;
use DB;
class DemoController extends Controller
{
   public function index()
   {
       dd(DB::connection()->getPdo());
   }
}
