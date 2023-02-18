@extends('emploi.layout')

@section('content')
    <div class="max-w-4xl mx-auto mt-8">
        <div class="mb-4">
            <h1 class="text-3xl font-bold">
                Show emploi

            </h1>
            <div class="flex justify-end mt-5">
                <a class="px-2 py-1 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600" href="{{ route('emplois.index') }}">< Back</a>
            </div>
        </div>

        <div class="flex flex-col mt-5">
            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                <h3 class="text-2xl font-semibold">{{$emploi->nom_emploi}}</h3>

            </div>
            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                <h3 class="text-2xl font-semibold">{{$emploi->date_debut}}</h3>

            </div>
            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                <h3 class="text-2xl font-semibold">{{$emploi->date_fin}}</h3>

            </div>
        </div>
    </div>
@endsection
