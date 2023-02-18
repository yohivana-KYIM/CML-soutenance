<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit equipe Form - Laravel 9 CRUD EQUIPE</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit equipe </h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('equipes.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('emplois.update',$equipe->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="py-8">
    <div class="bg-white overflow-hidden shadow rounded-md">
        <div class="bg-white border-b border-gray-200">
            <div class="sm:hidden p-4">

        <label>Categorie D'equipes Du Centre Médical La Life</label>
        <input type="text" class="form-control" name=categorie>
        @error('categorie')
        <div class="alert alert-danger mt-1 mb-1">{{$message }}</div>
        @enderror
    </div>

    <div  class="sm:hidden p-4">
        <label>User</label>
        <select name="user_id" class="form-select">
            <option selected>Selectionner un name</option>




            @foreach( $users as  $User){
                <option value="{{ $User->id }}">{{$User->name }}</option>

                }

                @endforeach


        </select>

    </div>
    <button type="submit" class="btn btn-primary ml-3">Submit</button>



