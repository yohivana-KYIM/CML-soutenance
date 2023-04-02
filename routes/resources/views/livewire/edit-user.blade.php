<div class="flex-auto p-6">

    <form wire:submit.prevent="mount">

        <div class="mb-4">
            <input  type="text"
                class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                wire:model="state.name" id="name" placeholder="Name" name="name" aria-label="Name" aria-describedby="email-addon"
                required autofocus />
            @error('name')
            <p class="text-size-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
<div class="mb-4">
            <input  type="text"
                class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                wire:model="state.fonction" id="fonction"   placeholder="fonction" name="fonction" aria-label="fonction" aria-describedby="email-addon"
                required autofocus />
            @error('fonction')
            <p class="text-size-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>







        <div class="my-auto ml-auto pr-6">
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
</div>




