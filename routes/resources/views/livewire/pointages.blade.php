

<div class="card m-auto" style="width: 18re">


@if(is_null($showHeureDepart))
vous avez deja pointer

@else
<div class="form-check form-switch ">
  <input class="form-check-input" type="checkbox"  wire:model="state.signature"id="signature" aria-describedby="signature" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked">SIGNATURE</label>
</div>

@if ($showHeureDepart)
rassurez-vous d'avoir pointer avant de partir
<div class="form-check">
    <input class="form-check-input" type="checkbox"  wire:model="state.heure_D"id="heure_D" aria-describedby=" "  >
    <label class="form-check-label" for="flexCheckChecked">
      HEURE DEPART
    </label>
  </div>
 @else
 <div class="form-check">
    <input class="form-check-input" type="checkbox"  wire:model="state.heure_A"id="heure_A" aria-describedby=" " >
    <label class="form-check-label" for="flexCheckChecked">
      HEURE ARRIVEE
    </label>
  </div>
@endif

<div>
  <button type="button" wire:click.prevent="store" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Enregistrer</button>


</div>
</form>
@endif















<div class="flex flex-wrap -mx-3">

    <div class="flex-auto p-2 pb-0">
        <div alert
            class="relative p-4 pr-12 mb-4 text-white border border-slate-200 border-solid rounded-lg bg-slate-500">
            <span class="font-bold">Bonjour Madame !</span> /Monsieur <span
                class="font-bold">Bienvenue  sur </span> notres systemes de pointages !  
        </div>
    </div>

    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>All pointages</h6>
                <p>Here you can manage pointages.</p>
            </div>
                  {{-- <div>
            <input type="search"wire:model="search"
            class="
            inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85"
        placeholder="recherche"/>
        </div> --}}
{{-- <div class="flex-auto px-0 pt-0 pb-2">
    <div class="p-0 overflow-x-auto">
        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
            <thead class="align-bottom">
                <tr>
                    <th
                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        ID</th>
                        <th
                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                       NAME</th>


                    <th
                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        SIGNATURE</th>
                    <th
                        class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        HEURE ARRIVEE</th>
                        <th
                        class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        HEURE DEPART </th>


                    <th
                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Creation Date</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($pointages  as $value)
                <tr>
                    <td
                        class="pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 font-semibold leading-tight text-size-xs">{{$value ->id}}</p>
                    </td>


                    <td
                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{$value->User->name}}</p>
                </td>
                    <td
                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 font-semibold leading-tight text-size-xs">{{$value ->signature}}</p>
                    </td>
                    <td
                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 font-semibold leading-tight text-size-xs">{{$value ->heure_A}}</p>
                    </td>
                    <td
                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 font-semibold leading-tight text-size-xs"> {{$value->heure_D}}</p>
                    </td>


                    <td
                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 font-semibold leading-tight text-size-xs">{{$value ->created_at->format ('m-d-y')}}</p>
                    </td>


                </tr>


                </tr>

                @endforeach
            </tbody>
        </table>
    </div>


</div>
</div>
</div>
</div> --}}


































{{-- 


<div class="flex flex-wrap -mx-3 mt-16">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>All pointages</h6>
                <p>Here you can manage pointages.</p>
            </div> --}}
            {{-- <div>
                <input type="search"wire:model="search"
                class="p-6 pb-0 mb-0 bg-white border-b0 border-b-solid rounded-t-2xl border-b-transparent"
                placeholder="recherche"/>
        </div> --}}
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
                                NAME</th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                SIGNATURE</th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                HEURE ARRIVEE</th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                HEURE DEPART </th>

                            {{-- <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                              total-HEURE</th> --}}
                            <th
                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                Creation Date</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($pointages as $value)
                            <tr>
                                <td
                                    class="pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->id }}</p>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->User->name }}</p>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->signature }}</p>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{$value->heure_A}}</p>
                                </td>
                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs"> {{$value->heure_D}}</p>
                                </td>
                                {{-- <td
                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs"> {{$value->scopeCurrentMonthPointage}}</p>
                                </td> --}}

                                {{-- <td
                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">
                                        {{ $value->timing }}
                                    </p>
                                </td> --}}
                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->created_at->format('d/m/y')}}</p>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                       
                    </table>
                    {{-- {{ $pointages->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
