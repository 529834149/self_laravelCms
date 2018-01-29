<?php

namespace App\Http\Controllers;
use Illuminate\Session\Middleware\StartSession;
class DemoController extends Controller
{
   public function index()
   {
       echo phpinfo();
   }
}
