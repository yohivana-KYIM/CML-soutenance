
@extends('emploi.layout')

@section('content')

    <div class="max-w-4xl mx-auto mt-8">
        <div class="mb-4">
            <h1 class="text-3xl font-bold">
                 Add New Emploi
            </h1>
            <div class="flex justify-end mt-5">
                <a class="px-2 py-1 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600" href="{{ route('emplois.index') }}">< Back</a>
            </div>
        </div>
 
        <div class="flex flex-col mt-5">
            <div class="flex flex-col">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

                    @if ($errors->any())
                        <div class="p-3 rounded bg-red-500 text-white m-3">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">

                        <form action="{{ route('emplois.store') }}" method="POST">
                            @csrf
 <div>
                                <label class="block text-sm font-bold text-gray-700" for="nom_emploi">nom_emploi</label>
                                <input type="text" name="nom_emploi" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="nom_emploi">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700" for="date_debut">date_debut</label>
                                <input type="date" name="date_debut" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="date_debut">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700" for=" date_fin"> date_fin</label>
                                <input type="date" name="date_fin" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="date_fin">
                            </div>


                            <div>
                                <label class="block text-sm font-bold text-gray-700" for="">legende</label>

                                <select name="legende_id" class="form-select form-select-sm
                                appearance-none
                                block
                                w-full
                                px-2
                                py-1
                                text-sm
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-sm example">
                                    <option selected>+Selectionner une description pour legende</option>

                                    @foreach ($legende as  $legende){

                                        <option value="{{$legende->id }}">{{$legende->description}}</option>

                                        }
                                          @endforeach
                                </select>



                            </div>



                            <div>
                                <label class="block text-sm font-bold text-gray-700" for="">equipe</label>

                                <select name="equipe_id" class="form-select form-select-sm
                                appearance-none
                                block
                                w-full
                                px-2
                                py-1
                                text-sm
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-sm example">
                                    <option selected>+Selectionner un equipe</option>




                                    @foreach ($equipes as  $equipe){

                                        <option value="{{$equipe->id}}">{{$equipe->categorie}}</option>

                                        }

                                        @endforeach


                                </select>

                            </div>


                            <div >
                                <label class="block text-sm font-bold text-gray-700" for="">User</label>

                                <select name="user_id" class="form-select form-select-sm
                                appearance-none
                                block
                                w-full
                                px-2
                                py-1
                                text-sm
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-sm example">
                                    <option selected>Selectionner un name</option>
                                    @foreach ($users as  $User){
                                        <option value="{{$User->id }}">{{$User->name}}</option>

                                        }

                                  @endforeach

                                </select>
                            </div>

                          
                            <div class="flex items-center justify-start mt-4 gap-x-2">
                                <button type="submit" class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-green-100 bg-green-500 hover:bg-green-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">Submit</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
