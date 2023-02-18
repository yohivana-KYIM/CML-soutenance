

@extends('emploi.layout')

@section('content')

    <div class="max-w-4xl mx-auto mt-8">

        <div class="mb-4">
            <h1 class="text-3xl font-bold text-center">
                Gestion des emplois du Centre Medical la life 
                   
               
                    
            </h1>
        </div>

        <div class="flex justify-end mt-10">
            <a href="{{ route('emplois.create') }}"class="px-2 py-1 rounded-md bg-blue-500 text-sky-100 hover:bg-blue-700">+ Create New emploi</a>
        </div>
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">



                <div class="mt-1 mb-4">
                    <div class="relative max-w-xs">
                        <form action="{{ route('emploi.search') }}" method="GET">
                            <label for="search" class="sr-only">
                                Search
                            </label>
                            <input type="text" name="s"
                                class="block w-full p-3 pl-10 text-sm border-gray-200 rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Search..." />
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </form>
                    </div>

                </div>



        <div class="flex flex-col mt-10">
            <div class="flex flex-col">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

                    @if ($message = Session::get('success'))
                        <div class="p-3 rounded bg-green-500 text-green-100 mb-4 m-3">
                            <span>{{ $message }}</span>
                        </div>
                    @endif

                     <table class="min-w-full">
                        <tr>

                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">No</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">nom_emploi</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">date_debut</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">date_fin</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Name</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">CAtegorieEquipe</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">legendeDESCRIPTION</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">legendeLIBELLE</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Action</th>


                        </tr>
                        <tbody class="bg-white">
                            @foreach ($emploi as $emploi)
                            <tr>
                                <td class="px-6 whitespace-no-wrap border-b border-gray-200">{{ $emploi->id}}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$emploi->nom_emploi}}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$emploi->date_debut}}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$emploi->date_fin}}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $emploi->User->name}}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $emploi->equipe->categorie}}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $emploi->legende->description}}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $emploi->legende->libelle }}</td>
 </td>     <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <span> {{$emploi->created_at }}</span>
                            </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <form action="{{ route('emplois.destroy', $emploi->id) }}" method="POST">

                                        <a class="text-indigo-600 hover:text-indigo-900" href="{{ route('emplois.show', $emploi->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </a>

                                        <a href="{{ route('emplois.edit', $emploi->id) }}" class="text-indigo-600 hover:text-indigo-900 text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>



                </div>
            </div>
        </div>
    </div>

@endsection

