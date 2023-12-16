<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\Manager;
use App\Models\Rgm;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    public function index(){
        $crew = Crew::orderBy('id')->get();

        return view('crews.index',['crews' => $crew]);
    }

    public function create()
    {
        $rgms = Rgm::list();
        $managers = Manager::list();
        return view('crews.create', compact('managers', 'rgms'));

    }

    

    public function store(Request $request)
    {
        $request->validate([
            'manager_id'   => 'required|numeric',
            'rgm_id'       => 'required|numeric',
            'full_name' => 'required',
            'address' => 'required',
            'salary' => 'required',
            'station' => 'required',
            'contact_number' => 'required',
        ]);

       Crew ::create([
            'manager_id'   => $request->manager_id,
            'rgm_id'       => $request->rgm_id,
            'full_name' => $request->full_name,
            'address' => $request->address,
            'salary' => $request->salary,
            'station' => $request->station,
            'contact_number' => $request->contact_number,
        ]);

        return redirect('/crews')->with('message', 'A new trainor has been added.');
    }

    public function edit(Crew $crew)
    {
        $rgms = Rgm::list();
        $managers = Manager::list();
        return view('crews.edit',  ['rgms' => $rgms, 'managers' => $managers], compact('crew'));
    }

    public function update(Crew $crew, Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'address'     => 'required',
            'station'   => 'required',
            'salary'  => 'required',
            'contact_number' => 'required'
        ]);

        $crew->update($request->all());
        return redirect('/crews')->with('message', "$crew->full_name has been updated" );
    }

    public function delete(Crew $crew)
    {
        $crew->delete();
        return redirect('/crews')->with('message', "$crew->full_name has been deleted" );

    }
}
