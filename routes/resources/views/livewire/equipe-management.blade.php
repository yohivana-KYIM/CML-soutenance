<div class="px-5 flex flex-wrap -mx-3">
    <div class="w-full flex justify-between p-2 pb-0 mb-8">
        <h6>All Equipes</h6>
        @if(Auth::user()->isAdmin())
            <div class="float-right ml-4 self-end">
                <a href="{{ route('inscriptionequipe') }}">
                    <button type="button" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">
                        Add Equipe
                        <i class="fa fa-plus"></i>
                    </button>
                </a>
            </div>
        @endif
    </div>

    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <p>Here you can manage legendes.</p>
            </div>
            <div>
                <input type="search"wire:model="search"
                       class="p-6 pb-0 mb-0 bg-white border-b0 border-b-solid rounded-t-2xl border-b-transparent"
                       placeholder="recherche"/>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 mt-2 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">
                        <tr>
                            <th
                                class="p-2 pl-6 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                ID
                            </th>
                            <th
                                class="p-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                Categorie
                            </th>
                            <th
                                class="p-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                USER
                            </th>
                            <th
                                class="p-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                Date de creation
                            </th>
                            @if(Auth::user()->isAdmin())
                                <th
                                    class="p-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Action
                                </th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($equipes as $equipe)
                            <tr>
                                <td
                                    class="p-2 pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">
                                        {{$equipe->id}}
                                    </p>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">
                                        {{$equipe->categorie}}
                                    </p>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">
                                        {{$equipe->user->name }}
                                    </p>
                                </td>
                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">
                                        {{$equipe->created_at->format ('m/d/Y')}}
                                    </p>
                                </td>
                                @if(Auth::user()->isAdmin())
                                    <td  class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-base">
                                            <a href="{{route('editequipe',$equipe->id)}}">
                                                <button type="submit"
                                                class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-gradient-cyan hover:scale-102 hover:shadow-soft-xs active:opacity-85">Modifier
     </button>
                                                {{-- <i class="fas fa-user-edit" aria-hidden="true"></i> --}}
                                            </a>
                                            <a href="#" onclick="confirm('Are you sure you want to remove the equipe') || event.stopImmediatePropagation()" wire:click.after="delete({{$equipe->id}})">
                                                <button type="submit"
                                                class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-gradient-cyan hover:scale-102 hover:shadow-soft-xs active:opacity-85">Supprimer
                                                </button>
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
                    {{$equipes->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
