@extends('dashboard.master')
@section('content')
    <h6>Crear Publicación</h6>
    
    <form action="{{ route('post.store') }}" method="post">
    @include('dashboard.post._form')
    </form>
@endsection