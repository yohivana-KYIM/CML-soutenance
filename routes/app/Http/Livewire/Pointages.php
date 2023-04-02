<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

use App\Models\pointage;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class Pointages extends Component
{

    use WithPagination;
    public  $search='';

   public $pointages;
    public $state = [];
//protected $pointages;
    public $updateMode = false;

    public function mount()
    {
        // $this->pointages = pointage::all();
        $this->pointages = pointage::where('user_id',Auth::user()->id)->get();
    }

    private function resetInputFields(){
        $this->reset('state');
    }



    public function store()
    {
        if (isset($this->state['heure_A'])){

        $validator = Validator::make($this->state, [
            'signature' => 'required',
           'heure_A' => 'required',
        ])->validate();

        $this->state['user_id']=Auth::user()->id;

        if($this->state['heure_A']){
            $this->state['heure_A']=Carbon::now();
            // $now = Carbon::now();
            // $now->setTimeZone('Africa/Douala');
            // $now=Carbon::now()->format('H:i');
            // $this->state['heure_A']=$now;
        }



        pointage::create($this->state);
        }

        if (isset($this->state['heure_D'])){
            // $now = Carbon::now();
            // $now->setTimeZone('Africa/Douala');
            // $now=Carbon::parse($now)->format('H:i');
             // $pointageDuJour= pointage::where('user_id',Auth::user()->id)->where('heure_A','=',$now)->first();
           $pointageDuJour= pointage::where('user_id',Auth::user()->id)->where('heure_A','like','%'.Carbon::now()->toDateString().'%')->first();

            $validator = Validator::make($this->state, [
                        'signature' => 'required',
                       'heure_D' => 'required',
                    ])->validate();

                    $this->state['user_id']=Auth::user()->id;

                    if($this->state['heure_D']){
                        // $now = Carbon::now();
                        // $now->setTimeZone('Africa/Douala');
                        // $now=Carbon::parse($now)->format('H:i');
                        // $this->state['heure_D']=$now;

                       $this->state['heure_D']=Carbon::now();
                    }

                    $pointageDuJour->update(['heure_D'=>$this->state['heure_D']]);
                }

        $this->reset('state');
        $this->pointages = pointage::where('user_id',Auth::user()->id)->get();
        // $this->pointages = pointage::all();
    }


    // public function edit($id)
    // {
    //     $this->updateMode = true;

    //     $pointage = pointage::find($id);

    //     $this->state = [

    //         'signature' => $pointage->signature,
    //         'heure_A' => $pointage->heure_A,
    //         'heure_D' => $pointage->heure_D,


    //     ];
    // }


    // public function cancel()
    // {
    //     $this->updateMode = false;
    //     $this->reset('state');
    // }

    // public function update()
    // {
    //     $validator = Validator::make($this->state, [

    //         'signature' => 'required',
    //         'heure_A' => 'required',
    //         'heure_D' => 'required',

    //     ])->validate();


    //     if ($this->state['id']) {
    //         $pointage  = pointage::find($this->state['id']);
    //         $pointage ->update([
    //             'signature' => $this->state['signature'],
    //             'heure_A' => $this->state['heure_A'],
    //             'heure_D' => $this->state['heure_D'],
    //         ]);


    //         $this->updateMode = false;
    //         $this->reset('state');
    //         $this->pointages = pointage::all();
    //     }
    // }

    // public function delete($id)
    // {
    //     if($id){
    //         pointage::where('id',$id)->delete();
    //         $this->pointages = pointage::all();
    //     }


    // }




    public function render()

    {

$showHeureDepart=false;
// $now = Carbon::now();
// $now->setTimeZone('Africa/Douala');
// $now=Carbon::parse($now)->format('H:i');
 //$pointageDuJour= pointage::where('user_id',Auth::user()->id)->where('heure_A','=',$now)->get();
$pointageDuJour= pointage::where('user_id',Auth::user()->id)->where('heure_A','like','%'.Carbon::now()->toDateString().'%')->get();
if (!empty($pointageDuJour) && count($pointageDuJour)==1){
if(is_null($pointageDuJour[0]->heure_D)){
    $showHeureDepart=true;
}
else{
    $showHeureDepart=null;
}

}
// historique pointages
//pointages::where('user_id',Auth::user()->id)->get();

        return view('livewire.pointages',compact('showHeureDepart'));

    }




}
