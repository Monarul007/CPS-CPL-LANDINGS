<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function get(Request $request){
        return view('subscribe', [
        'intent' => auth()->user()->createSetupIntent(),
        'id' => $request->id ?? '',
        ]);
    }
}
