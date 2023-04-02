<?php

namespace App\Http\Controllers;
use App\Models\emploi;
use App\Models\legende;
use App\Models\User;
use App\Models\equipe;
use Illuminate\Http\Request;

class EmploiController extends Controller
{

    public $i;

    public function qwery(Request $request)
    {
        $emploi = emploi::where([
            ['nom_emploi', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('nom_emploi', 'LIKE', '%' . $s . '%')

                        ->get();
                }
            }]
        ])->paginate(6);

        return view('emploi.index', compact('emploi'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emploi = emploi::latest()->get();

        return view('emploi.index',compact('emploi'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $emplois=emploi::all();
        $equipes=equipe::all();
        $users=User::all();
        $legendes=legende::all();
        return view('emploi.create')->with([

        'users'=>$users,
        'legende'=>$legendes,
        'emploi'=>$emplois,
            'equipes'=>$equipes,

         ]);


       // return view('emploi.create');
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
            'nom_emploi' => 'required',
            'date_debut'=> 'required',
           'date_fin'=> 'required',
            'equipe_id'=> 'required',
            'legende_id'=> 'required',
            'user_id'=> 'required',

        ]);
        $emploi = new emploi;
        $emploi->nom_emploi=$request->nom_emploi;
        $emploi->date_debut= $request->date_debut;
       $emploi->date_fin= $request->date_fin;
        $emploi->equipe_id=$request->equipe_id;
        $emploi->legende_id=$request->legende_id;
        $emploi->user_id=$request->user_id;
//dd($emploi);
      $emploi->save();
       //emploi::create($request->all());

        return redirect()->route('emplois.index')
                        ->with('success','emploi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function show(emploi $emploi)
    {
        return view('emploi.show',compact('emploi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\emploi $emploi
     * @return \Illuminate\Http\Response
     */
    public function edit(emploi $emploi)
    {
        return view('emploi.edit',compact('emploi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\emploi $emploi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, emploi $emploi)
    {
        $request->validate([
            'nom_emploi' => 'required',
            'date_debut'=> 'required',
           // 'date_fin'=> 'required',
            'equipe_id'=> 'required',
            'legende_id'=> 'required',
            'user_id'=> 'required',
        ]);

        $emploi->update($request->all());

        return redirect()->route('emplois.index')
                        ->with('success','emploi updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\emploi $emploi
     * @return \Illuminate\Http\Response
     */
    public function destroy(emploi $emploi)
    {
        $emploi->delete();

        return redirect()->route('emplois.index')
                        ->with('success','emploi deleted successfully');
    }
}










