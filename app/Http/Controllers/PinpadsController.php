<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pinpad;

class PinpadsController extends Controller
{

    public function create()
    {
    	return view('pinpads.create');
    }

    public function store(Request $request)
    {
    	Model::unguard();
    	$pinpad = Pinpad::create($request->except('_token'));
    	return redirect('/pinpads/'.$pinpad->id);
    	Model::reguard();
    }

    public function show(Pinpad $pinpad)
    {
        return view('pinpads.show', ['pinpad' => $pinpad]);
    }

    public function index()
    {
        return view('pinpads.index', ['pinpads' => Pinpad::all()]);
    }

}
