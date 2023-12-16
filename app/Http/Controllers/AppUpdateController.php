<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AppUpdateController extends Controller
{
    //

    public function update_app(){

        // Artisan::call('git:pull');

        // You can also get the output of the command if needed
        $output = shell_exec('git pull');

        // You can return a response or redirect as needed
        // return response()->json(['output' => $output]);



        return back()->with('msg', $output);
    }
}
