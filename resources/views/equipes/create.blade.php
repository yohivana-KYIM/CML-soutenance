<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 9 CRUD EQUIPE</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>


        <div class="container mt-2">
        <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
        <h2>Add equipe</h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('equipes.index') }}"> Back</a>
        </div>
        </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('equipes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
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
                </div>
                        </div>
                        <div  class="sm:hidden p-4">
                            <label>User</label>
                            <select name="user_id" class="form-select">
                                <option selected>Selectionner un name</option>




                                @foreach ( $users as  $User){
                                    <option value="{{ $User->id }}">{{ $User->name }}</option>

                                    }

                                    @endforeach


                            </select>



                        </div>
                    </div>

                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
            </form>
            </body>
            </html>
















































































































        </div>
            </div>
        </div>
