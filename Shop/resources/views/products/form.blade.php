{{--@extends('layouts/master.blade.php')--}}
@extends('layouts/master')

@section('content')
<h2>Create Product</h2>
<form action="{{ route('product.store') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="title">
    <input type="text" name="slug">
    <input type="text" name="description">
    <input type="number" name="page">
    <button type="submit">Valider</button>
</form>

@if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif

@stop
