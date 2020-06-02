<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

class DetailController extends Controller
{
    public function index()
    {
       $users = Detail::all();
       return view ('details/index',['users'=>$users]);
    }
    public function create()
    {
       return view('details/create');
    }

    public function edit(Detail $users)
    {
        return view('details/edit',compact('users'));
    }

    public function update(Request $request,Detail $users)
    {
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        Detail::where('id',$users->id)
            ->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
            ]);
        return redirect('/Details')->with('status','Editing Succes');    
    }

    public function destroy(Detail $users)
    {
        Detail::destroy($users->id); 
        return redirect('/Details')->with('status','Deleting Succes');
       
    }
    public function show(Detail $users)
    {
        return view('details.view',compact('users'));
      
    }
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        Detail::create($request->all());
        return redirect('/Details')->with('status','Input Succes');
    }
    public function json(){
        $users = Detail::all();
        return $users;
    }
}
