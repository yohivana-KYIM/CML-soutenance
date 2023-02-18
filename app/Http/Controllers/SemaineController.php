<?php

namespace App\Http\Controllers;
use App\Models\semaine ;
use Illuminate\Http\Request;

class SemaineController extends Controller
{
public $i;

    public function qwery(Request $request)
    {
        $semaine = semaine::where([
            ['jour_semaine', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('jour_semaine', 'LIKE', '%' . $s . '%')

                        ->get();
                }
            }]
        ])->paginate(6);

        return view('semaine.index', compact('semaine'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semaine = semaine::latest()->get();

        return view('semaine.index',compact('semaine'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('semaine.create');
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
            'jour_semaine' => 'required',

        ]);

        semaine::create($request->all());

        return redirect()->route('semaines.index')
                        ->with('success','semaine created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\semaine  $semaine
     * @return \Illuminate\Http\Response
     */
    public function show(semaine $semaine)
    {
        return view('semaine.show',compact('semaine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\semaine  $semaine
     * @return \Illuminate\Http\Response
     */
    public function edit(semaine $semaine)
    {
        return view('semaine.edit',compact('semaine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\semaine $semaine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, semaine $semaine)
    {
        $request->validate([
            'jour_semaine' => 'required',

        ]);

        $semaine->update($request->all());

        return redirect()->route('semaines.index')
                        ->with('success','semaine updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\semaine $semaine
     * @return \Illuminate\Http\Response
     */
    public function destroy(semaine $semaine)
    {
        $semaine->delete();

        return redirect()->route('semaines.index')
                        ->with('success','semaine deleted successfully');
    }
}


