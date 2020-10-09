@extends('layouts.admin-master')

@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=0.1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Upload</title>

</head>
<body>
<form method="POST" action="{{route('add-template')}}" enctype="multipart/form-data">
    @csrf
    <label for="file"> Choose File</label>
    <input type="file" name="file" />
    <button type="submit" name="submit">Upload</button>
</form>
</body>
</html>
@endsection
