<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
use Log;

class TestController extends Controller
{
    public function index(){
    	$values = Test::all();
    	$tests = DB::table('tests')->get();
    	//dd($tests);
    	 Log::debug('$tests1="' .$tests. '"');
    	Log::debug(print_r('$tests2='.$tests, true));
    	return view('tests.test', compact('values'));
    }
}
