<?php

namespace App\Http\Livewire;
use App\Models\legende;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
class Editlegende extends Component
{


    public  $legendes ;
    public $state = [];

    public $updateMode = false;
   public function render()
   {
    return view('livewire.editlegende');

    }

    public function mount($id)
    {
        $this->updateMode = true;

        $legendes = legende::find($id);

        $this->state = [
            'id' =>$legendes ->id,
            'description' =>$legendes ->description,
            'libelle' => $legendes ->libelle,



        ];
    }


    public function update()
    {
        $validator = Validator::make($this->state, [
            'description' => 'required',
            'libelle' => 'required',

        ])->validate();


        if ($this->state['id']) {
            $legendes = legende::find($this->state['id']);
            $legendes->update([
                'id' => $this->state['id'],
                'description' => $this->state['description'],
                'libelle' => $this->state['libelle'],


            ]);
            $this->updateMode = false;
            $this->reset('state');

            $this->legendes=legende::all();
            redirect()->intended('legende-management');
        }
    }





}
