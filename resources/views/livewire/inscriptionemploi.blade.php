<div class="flex-auto p-6">
    <form wire:submit.prevent="store">
        <div>
            <h4>Creation d'un nouvel emploi de temps</h4>
        </div>
        <div class="my-5">
            <label for="nom_emploi">
                Nom de l'emploi de temps
            </label>
            <input wire:model.lazy="nom_emploi" id="nom_emploi" type="text"
                   class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full
                   appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding
                   py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white
                   focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="nom_emploi"
                   name="nom_emploi" aria-label="nom_emploi" aria-describedby="email-addon" required autofocus />
            @error('nom_emploi')
            <p class="text-size-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="date_debut">
                Date de debut
            </label>
            <input wire:model.lazy="date_debut" id="date_debut" type="date"
                   class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full
                   appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding
                   py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white
                   focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="date_debut"
                   name="date_debut" aria-label="date_debut" aria-describedby="email-addon" required autofocus />
            @error('date_debut')
            <p class="text-size-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="date_fin">date de fin</label>
            <input wire:model.lazy="date_fin" id="date_fin" type="date"
                   class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full
                   appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding
                   py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white
                   focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="date_fin"
                   name="date_fin" aria-label="date_fin" aria-describedby="email-addon" required autofocus />
            @error('date_fin')
            <p class="text-size-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        {{-- <div>
            <label class="block text-sm font-bold text-gray-700" for="legende">
                Legende
            </label>
            <select id="legende_id" name="legende" wire:model.lazy="legende" type="text" class="form-select
                form-select-sm appearance-none block w-full px-2 py-1 text-sm font-normal text-gray-700 bg-white
                bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    aria-label=".form-select-sm example">
                <option selected>Selectionner une legende</option>
                @foreach ($legendes as  $legende)
                    <option value="{{$legende->id }}">{{$legende->libelle}}</option>
                @endforeach
            </select>
        </div> --}}
        <div >
            <label class="block text-sm font-bold text-gray-700" for="">DESCRIPTION</label>

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


        <div >
            <label class="block text-sm font-bold text-gray-700" for="">Libelle</label>

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
                <option selected>Selectionner un libelle</option>
                @foreach ($legendes as  $legende){
                    <option value="{{$legende->id }}">{{$legende->libelle }}</option>

                    }
              @endforeach


            </select>


        </div>

        <div>
            <label class="block text-sm font-bold text-gray-700" for="user_id">
                User
            </label>
            <select id="user_id" name="user_id" wire:model.lazy="user_id" type="text" class="form-select
                form-select-sm appearance-none block w-full px-2 py-1 text-sm font-normal text-gray-700
                bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition
                ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    aria-label=".form-select-sm example">
                <option selected>Selectionner un name</option>
                @foreach ($users as $user)
                    <option value="{{$user->id }}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-bold text-gray-700" for="equipe_id">
                Equipe
            </label>
            <select id="equipe_id" name="equipe_id" wire:model.lazy="equipe_id" type="text" class="form-select
                form-select-sm appearance-none block w-full px-2 py-1 text-sm font-normal text-gray-700 bg-white
                bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out
                m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    aria-label=".form-select-sm example">
                <option selected>Selectionner une categorie</option>
                @foreach ($equipes as $equipe)
                <option value="{{$equipe->id }}">{{$equipe->categorie}}</option>
                @endforeach
            </select>
        </div>

        <div class="my-auto ml-auto pr-6">
            <button type="submit"
                    class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase
                    align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer
                    active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs
                    ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-gray
                    hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                Enregistrer
            </button>
        </div>
    </form>
</div>
