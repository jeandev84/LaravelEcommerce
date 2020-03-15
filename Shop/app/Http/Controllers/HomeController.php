<?php
namespace App\Http\Controllers;


use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;


/**
 * Class HomeController
 * @package App\Http\Controllers
*/
class HomeController extends Controller
{
     /**
      * @return Factory|\Illuminate\View\View
     */
     public function index()
     {
         return view('welcome');
     }
}