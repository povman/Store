<?php

namespace App\Http\Controllers;
use Closure;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller {
    public function handle($request, Closure $next) {
        return $next($request);
    }
   public function index() {
      echo "<br>Test Controller.";
   }
}