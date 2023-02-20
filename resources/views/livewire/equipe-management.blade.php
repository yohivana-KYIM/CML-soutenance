


<div class="flex flex-wrap -mx-3">

    <div class="flex-auto p-2 pb-0">
        <div alert
            class="relative p-4 pr-12 mb-4 text-white border border-slate-200 border-solid rounded-lg bg-slate-500">
            <span class="font-bold">Add, Edit, Delete features are not functional!</span> This is a <span
                class="font-bold">PRO</span> feature! Click <a href="https://www.creative-tim.com/product/soft-ui-dashboard-pro-tall" target="_blank"
                class="font-bold text-white">here</a> to see the <span class="font-bold">PRO</span> product!
        </div>
    </div>

    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>All legendes</h6>
                <p>Here you can manage legendes.</p>
            </div>
            @if(Auth::user()->isAdmin())
            <div class="my-auto ml-auto pr-6">
                <button type="button" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">+&nbsp; <a href="{{ route('inscriptionequipe') }}">Add Equipe</a>
              @endif </button>

            </div>

            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">
                            <tr>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    ID</th>


                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    USER</th>



                                    <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    categorie    </th>

                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    @if(Auth::user()->isAdmin())   Creation Date</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Action</th>
                                    @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($equipes as $equipe)

                            <tr>
                                <td
                                class="pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 font-semibold leading-tight text-size-xs">{{$equipe ->id}}</p>
                            </td>
                                <td
                                    class="pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">
                                        {{$equipe->User->name }}
                                    </p>
                                </td>



                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{$equipe->categorie}}</p>
                                </td>
                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{$equipe->created_at->format ('m/d/Y')}}</p>
                                </td>
                                @if(Auth::user()->isAdmin())
                                <td  class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
        <p class="mb-0 font-semibold leading-tight text-base">
            <a href="{{route('editequipe',$equipe->id)}}"onclick="confirm('Are you sure you want to updated the equipe') || event.stopImmediatePropagation()"><i class="fas fa-user-edit" aria-hidden="true"></i></a>


         <a href="#"onclick="confirm('Are you sure you want to remove the equipe') || event.stopImmediatePropagation()" wire:click.prevent="delete({{$equipe->id}})"><i class="cursor-pointer fas fa-trash" aria-hidden="true"></i></a>
                                    </p>
                                </td>
                            </tr>

@endif
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
