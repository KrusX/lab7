@extends('layout')
@section('title', 'Products')
@section('content')

<div class="container products">
<form action="{{ URL::to('/db_create') }}" method="post">
<p><b>Name:</b><br>
{{ csrf_field() }}
<input type="text" name="name">
<p><b>Description:</b><br>
{{ csrf_field() }}
<input type="text" name="description">
<p><b>Photo:</b><br>
{{ csrf_field() }}
<input type="text" name="photo">
<p><b>Price:</b><br>
{{ csrf_field() }}
<input type="text" name="price">
<button>CrEaTe</button>
</form>
</div>
@endsection