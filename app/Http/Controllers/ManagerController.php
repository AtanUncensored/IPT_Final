<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Models\Rgm;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(){
        $manager = Manager::orderBy('id')->get();

        return view('managers.index',['managers' => $manager]);
    }

    
    public function create()
    { 
        $rgms = Rgm::list();
        return view('managers.create', ['rgms' => $rgms]);
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'rgm_id'   => 'required|numeric',
            'full_name' => 'required',
            'email' => 'required|email',
            'station' => 'required',
            'contact_number' => 'required',
            'salary' => 'required'
        ]);

        Manager::create([
            'rgm_id'   => $request->rgm_id,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'station' => $request->station,
            'contact_number' => $request->contact_number,
            'salary' => $request->salary
        ]);

        return redirect('/managers')->with('message', 'A new manager has been added.');
    }

    public function edit(Manager $manager)
    {  
        $rgms = Rgm::list();
        return view('managers.edit',  ['rgms' => $rgms], compact('manager'));
    }

    public function update(Manager $manager, Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email'     => 'required',
            'station'   => 'required',
            'salary'  => 'required',
            'contact_number' => 'required'
        ]);

        $manager->update($request->all());
        return redirect('/managers')->with('message', "$manager->full_name has been updated" );
    }
    public function delete(Manager $manager)
    {
        $manager->delete();
        return redirect('/managers')->with('message', "$manager->full_name has been deleted" );

    }
}
