<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\legende;
use Illuminate\Support\Facades\Storage;


class LegendeController extends Controller{

	/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['legendes'] = legende::orderBy('id','asc')->paginate(5);
return view('legendes.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('legendes.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
	'description'=> 'required',
        'libelle'=> 'required',

]);
$legende  = new legende;
$legende ->description = $request->description;
$legende ->libelle= $request->libelle;

$legende->save();
return redirect()->route('legendes.index')
->with('success','legende has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\legende  $legende
* @return \Illuminate\Http\Response
*/
public function show(legende $legende)
{
return view('legendes.show',compact('legende'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\legende $legende
* @return \Illuminate\Http\Response
*/
public function edit(legende $legende)
{
return view('legendes.edit',compact('legende'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\legende  $legende
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
	'description'=> 'required',
	'libelle'=> 'required',

]);

$legende = legende::find($id);
$legende ->description = $request->description;
$legende ->libelle= $request->libelle;

$legende->save();

return redirect()->route('legendes.index')
->with('success','legendeHas Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\legende $legende
* @return \Illuminate\Http\Response
*/
public function destroy(legende $legende)
{
$legende->delete();
return redirect()->route('legendes.index')
->with('success','legende has been deleted successfully');
}
}



