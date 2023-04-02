<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
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
<div class="pull-left">
<h2> CRUD LEGENDE</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('legendes.create') }}"> Create legende</a>
</div>
</div>
</div>
@if($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>legende Description</th>
<th>legende Libelle</th>

<th width="280px">Action</th>
</tr>
@foreach ($legendes as $legende)
<tr>
<td>{{ $legende->id }}</td>
<td>{{ $legende->description }}</td>
<td>{{ $legende->libelle }}</td>

<td>
<form action="{{ route('legendes.destroy',$legende->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('legendes.edit',$legende->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $legendes->links() !!}
</body>
</html>




