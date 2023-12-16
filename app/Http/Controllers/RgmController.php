<?php

namespace App\Http\Controllers;

use App\Models\Rgm;
use Illuminate\Http\Request;

class RgmController extends Controller
{
    public function index(){
        
        $rgm = Rgm::orderBy('id')->get();

        return view('rgms.index',['rgms' => $rgm]);
    }

    public function create(){
        return view('rgms.create');
    }

    public function store(Request $request){
        $request->validate([
            'full_name'      => 'required',
            'email'         => 'required|email',
            'branch'     => 'required',
            'salary'     => 'required',
            'contact_number'     => 'required'
        ]);

        Rgm::create([
            'full_name'      => $request->full_name,
            'email'         => $request->email,
            'branch'     => $request->branch,
            'salary'     =>$request->salary,
            'contact_number' =>$request->contact_number
        ]);

        return redirect('/rgms')->with('message','A new rgm has been added');
    }

    public function edit(Rgm $rgm)
    {
        return view('rgms.edit', compact('rgm'));
    }

    public function update(Rgm $rgm, Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email'     => 'required',
            'branch'  => 'required',
            'salary'  => 'required',
            'contact_number' => 'required'
        ]);

        $rgm->update($request->all());
        return redirect('/rgms')->with('message', "$rgm->full_name has been updated" );
    }

}
