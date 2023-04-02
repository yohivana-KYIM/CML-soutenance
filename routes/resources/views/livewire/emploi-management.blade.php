<div class="px-5 flex flex-wrap -mx-3">
    <div class="w-full flex justify-between p-2 pb-0 mb-8">
        <h6>All EMPLOIS TEMPS</h6>
        @if(Auth::user()->isAdmin())
            <div class="float-right ml-4 self-end">
                <a href="{{ route('inscriptionemploi') }}">
                    <button type="button" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">
                        Add Emploi
                        <i class="fa fa-plus ml-1"></i>
                    </button>
                </a>
            </div>
        @endif
    </div>

    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <p>Here you can manage EMPLOI.</p>
            </div>
            <div>
                <input type="search"wire:model="search"
                       class="p-6 pb-0 mb-0 bg-white border-b0 border-b-solid rounded-t-2xl border-b-transparent"
                       placeholder="recherche"/>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                @if ($loading)
                    <div class="flex items-center gap-2 text-gray-500 ml-6 mt-4 mb-2">
                        <span class="h-6 w-6 block rounded-full border-4 border-t-blue-300 animate-spin"></span>
                        loading...
                    </div>
                @else
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                            <tr>
                                <h2
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                </h2>

                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Nom
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Date de debut
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Date de fin
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Utilisateur
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Legende Desc
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Legende Lib
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Equipe categorie
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Date de creation
                                </th>
                                @if(Auth::user()->isAdmin())
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Action
                                    </th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($emplois as $emploi)
                                <tr>
                                    <td
                                        class="pl-6 bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-size-xs">{{$emploi->nom_emploi}}</p>
                                    </td>
                                    <td
                                        class="pl-6 bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-size-xs">{{$emploi->date_debut}}</p>
                                    </td>
                                    <td
                                        class="pl-6 bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-size-xs">{{$emploi->date_fin}}</p>
                                    </td>
                                    <td
                                        class="pl-6 bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-size-xs">
                                            {{optional($emploi->user)->name}}
                                        </p>
                                    </td>

                                    {{-- <td
                                        class="pl-6 bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-size-xs">{{optional($emploi->legende)->description}}</p>
                                    </td>
                                    <td
                                        class="pl-6 bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-size-xs">{{optional($emploi->legende)->libelle}}</p>
                                    </td> --}}
                                    <td
                                    class="pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{$emploi->legende->description }}</p>
                                </td>
                                <td
                                class="pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 font-semibold leading-tight text-size-xs">{{$emploi->legende->libelle}}</p>
                            </td>

                                    <td
                                        class="pl-6 bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-size-xs">{{optional($emploi->equipe)->categorie}}</p>
                                    </td>

                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-size-xs">
                                            {{ $emploi->created_at->format('d/m/y') }}
                                        </p>
                                                        </td>
                                    @if(Auth::user()->isAdmin())
                                        <td  class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 font-semibold leading-tight text-base">
                                                <a href="{{route('editemploi',$emploi->id)}}"onclick="confirm('Are you sure you want to updated the emploi') || event.stopImmediatePropagation()"> <button type="submit"
                                                    class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-gradient-cyan hover:scale-102 hover:shadow-soft-xs active:opacity-85">Modifier
                                                    </button></a>
                                               
                                                <a href="#" onclick="confirm('Are you sure you want to remove the emploi') || event.stopImmediatePropagation()"
                                                   wire:click.after="delete({{$emploi->id}})">
                                                   <button type="submit"
                                                   class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-gradient-cyan hover:scale-102 hover:shadow-soft-xs active:opacity-85">Supprimer</button>
                                                    {{-- <i class="cursor-pointer fas fa-trash" aria-hidden="true"></i> --}}
                                                </a>
                                            </p>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3 px-5">
                        {{ $emplois->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:load', () => {
        @this.init();
        @this.on('loading', () => {
            window.setTimeout(() => {
                @this.init();
            }, 2000)
        });
    })
</script>
