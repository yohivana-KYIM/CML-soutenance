<?php

namespace App\Http\Livewire\LaravelExamples;
use App\Models\User;
use App\Models\pointage;
use App\Models\Role;
use Livewire\Component;
//use Illuminate\Support\Facades\Hash;ll
use Illuminate\Support\Facades\Validator;
use Livewire\WithPagination;
class UserManagement extends Component
{
//{{ $users->links() }}
public $userr;
    //public $id;
    public $users ;
    public  $nom ;
    public $role_id;
   public  $roles ;
    public $state = [];
    public $name,$fonction,$email,$pointages,$signature,$heure_A,$heure_D;
    public $updateNew=false;
    use WithPagination;
    public $search = '';
    public $searchTerm;
    public $updateMode = false;
    public function render()
    {
        $this->users=User::all();
        $this->pointages=pointage::all();
        $this->roles=Role::all();


        return view('livewire.laravel-examples.user-management');
  //  return redirect(route('user-management'));
    }



//paginate

    ///public function mount()
   // {
     //  dd('search');

      // if($this->search)
     //  {


       // $users = User::where('name',  'like',
        //'%' .$this->search .'%')->orderBy('id' ,'ASC')
        //->orWhere('fonction', 'like',
       // '%' .$this->search .'%')->paginate(2);


 //  }else{
           // $users = User::paginate(2);
     ///  }


      //  return view('livewire.laravel-examples.user-management',compact('users'));
    //}



   //// public function store()
//{

//$this->validate();




    //User::create([

      //  'name' => $this->name,
      //  'email' => $this->email,
       // 'fonction' => $this->fonction,
       // 'password' => $this->password,
       // 'password' => Hash::make($this->password),
        //'picture' => $this->picture->store('profile', 'public'),
       // 'role_id' => $this->role_id,

 //   ]);

 //   return redirect(route('user-management'))->with('status', 'User successfully created.');
//}







           public function store()
       {
          $this->validate();

          User::create([



             'name' => $this->name,
             'email' => $this->email,
             'fonction' => $this->fonction,
             'password' => $this->password,
            // 'password' => Hash::make($this->password),
             //'picture' => $this->picture->store('profile', 'public'),
             'role_id' =>$this->role_id,



          ]);
          return redirect(route('user-management'))->with('status', 'user successfully created.');


}


public function delete($id)
   {
        if($id){
         User::where('id',$id)->delete();
          $this->users = User::all();
       }

    }
}
