<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{

	/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response

*/

//recuperation des donnees
// public function render()
// {

 //  $equipes=equipe::all();
   // $users=User::all();
   //  return view('equipes.index')->with([
     //  'equipes'=>$equipes,
     //   'users'=>$users]);

     // return view('equipes.index', compact('emploi','le','users','se'));
// }



//insertion
public function create()

{
    $equipes=equipe::all();
   $users=User::all();
    return view('equipes.create')->with([
        'equipes'=>$equipes,
        'users'=>$users
     ]);


}
public function store(Request $request)
{
$request->validate([
	'categorie'=> 'required',
    'user_id'=> 'required',



]);
$equipe = new equipe;
$equipe->categorie= $request->categorie;
$equipe->user_id= $request->user_id;

//dd($equipe);
$equipe->save();


return redirect()->route('equipes.index')
->with('success','equipes has been created successfully.');
}


    public function index()
{
$data['equipes'] = equipe::orderBy('id','desc')->paginate(5);
return view('equipes.index', $data);
}


/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/

/**
* Display the specified resource.
*
* @param  \App\equipe  $equipe
* @return \Illuminate\Http\Response
*/
public function show(equipe $equipe)
{
return view('equipes.show',compact('equipe'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\equipe $equipe
* @return \Illuminate\Http\Response
*/
public function edit(equipe $equipe)
{ $equipes=equipe::all();
    $users=User::all();
     return view('equipes.edit',compact('equipe'))->with([
         'equipes'=>$equipes,
         'users'=>$users
      ]);


//return view('equipes.edit',compact('equipe'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\equipe $equipe
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([

    'categorie'=> 'required',
    'user_id'=> 'required',

]);

$equipe= equipe::find($id);
$equipe->categorie= $request->categorie;

$equipe->save();

return redirect()->route('equipes.index')
->with('success','emplois Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\equipe $equipe
* @return \Illuminate\Http\Response
*/
public function destroy(equipe $equipe)
{
    $equipe->delete();
return redirect()->route('equipes.index')
->with('success','equipes has been deleted successfully');
}
}
