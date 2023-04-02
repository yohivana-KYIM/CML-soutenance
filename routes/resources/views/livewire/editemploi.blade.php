<div class="flex-auto p-6">

    <form wire:submit.prevent="mount">

    
        <div class="mb-4">
            <input  type="text"
                class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                wire:model="state.nom_emploi" id="nom_emploi"placeholder="nom_emploi" name="nom_emploi" aria-label="nom_emploi" aria-describedby="email-addon"
                required autofocus />
            @error('nom_emploi')
            <p class="text-size-sm text-red-500">{{$message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <input type="date"
                class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                wire:model="state.date_debut" id="date_debut"placeholder="date_debut" name="date_debut" aria-label="date_debut" aria-describedby="email-addon"
                required autofocus />
            @error('date_debut')
            <p class="text-size-sm text-red-500">{{$message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <input type="date"
                class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                wire:model="state.date_fin" id="date_fin" placeholder="date_fin" name="date_fin" aria-label="date_fin" aria-describedby="email-addon"
                required autofocus />
            @error('date_fin')
            <p class="text-size-sm text-red-500">{{$message }}</p>
            @enderror
        </div>


        <div >
            <label class="block text-sm font-bold text-gray-700" for="">User</label>

            <select name="user_id" wire:model.lazy="user_id" type="text" class="form-select form-select-sm
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
                    <option value="{{$User->id }}">{{$User->name }}</option>

                    }

              @endforeach
            </select>
        </div>
        <div>
            <label class="block text-sm font-bold text-gray-700" for="">Equipe</label>

            <select name="equipe_id" wire:model.lazy="equipe_id" type="text"class="form-select form-select-sm
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
                <option selected>Selectionner une categorie</option>
                @foreach ($equipes as  $equipe){
                    <option value="{{$equipe->id }}">{{$equipe->categorie }}</option>

                    }
              @endforeach


            </select>


        </div>
        {{-- <div >
            <label class="block text-sm font-bold text-gray-700" for="">Legende</label>

            <select name="legende_id" wire:model.lazy="legende_id" type="text"class="form-select form-select-sm
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
                <option selected>Selectionner un description</option>
                @foreach ($legendes as  $legende){
                    <option value="{{$legende->id }}">{{$legende->libelle }}</option>

                    }
              @endforeach


            </select>


        </div> --}}

{{-- 
        <div >
            <label class="block text-sm font-bold text-gray-700" for="">Legende</label>

            <select name="legende_id" wire:model.lazy="legende_id" type="text"class="form-select form-select-sm
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
                <option selected>Selectionner un description</option>
                @foreach ($legendes as  $legende){
                    <option value="{{$legende->id }}">{{$legende->description }}</option>

                    }
              @endforeach


            </select>
        </div> --}}
        <div >
            <label class="block text-sm font-bold text-gray-700" for="">Legende</label>

            <select name="legende_id" wire:model.lazy="legende_id" type="text"class="form-select form-select-sm
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
                <option selected>Selectionner un description</option>
                @foreach ($legendes as  $legende){
                    <option value="{{$legende->id }}">{{$legende->libelle }}</option>

                    }
              @endforeach


            </select>


        </div>


        <div >
            <label class="block text-sm font-bold text-gray-700" for="">Legende</label>

            <select name="legende_id" wire:model.lazy="legende_id" type="text"class="form-select form-select-sm
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
                <option selected>Selectionner un description</option>
                @foreach ($legendes as  $legende){
                    <option value="{{$legende->id }}">{{$legende->description }}</option>

                    }
              @endforeach


            </select>


        </div>



        {{-- <div class="my-auto ml-auto pr-6">
        @if ($updateMode)
        <button type="button" wire:click.prevent="update" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Mettre à jour</button>
    @else
        <button type="button" wire:click.prevent="store" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">SAVE</button>
    @endif

               </button>

    </div> --}}
    {{-- <div class="my-auto ml-auto pr-6">
        @if ($updateMode)
        <button type="button" wire:click.prevent="update" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Mettre à jour</button>
    @else
        <button type="button" wire:click.prevent="store" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Enregistrer</button>
    @endif

               </button>

    </div>

    </form>
</div>
</div>
</div>
</div> --}}


<div class="my-auto ml-auto pr-6">
    @if ($updateMode)
    <button type="button" wire:click.prevent="update" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Mettre à jour</button>
@else
    <button type="button" wire:click.prevent="store" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">SAVE</button>
@endif

           </button>

</div>

</form>
</div>
</div>
</div>
</div>