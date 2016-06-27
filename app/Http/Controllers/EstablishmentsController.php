<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\Http\Requests;
use App\Establishment;
use Auth;

class EstablishmentsController extends Controller
{

    public function create()
    {
    	return view('establishments.create');
    }

    public function store(Request $request)
    {
    	Model::unguard();
    	$establishment = Establishment::create(array_merge(
    		$request->except('_token'),
    		['user_id' => Auth()->user()->id,]
    	));
    	return redirect('/establishments/'.$establishment->id);
    	Model::reguard();
    }

    public function show(Establishment $establishment)
    {
    	return view('establishments.show', ['establishment' => $establishment]);
    }

    public function index()
    {
        return view('establishments.index', ['establisments' => Auth::user()->establisments]);
    }

}
