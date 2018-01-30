<?php

namespace App\Http\Controllers;
use Illuminate\Session\Middleware\StartSession;
use DB;
class DemoController extends Controller
{
   public function index()
   {
        $pdo = DB::connection('mysql')->getPdo();
        echo '----------------------------------------';
        $pdo1 = DB::connection('mysql')->getPdo();
        dump($pdo);
        dump($pdo1);
//        phpinfo();die;
       
   }
}
