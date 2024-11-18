@extends('layout')

@section('title')
    Trang chu
@endsection

@section('content')
    <h1 class="text-center">Trang chu</h1>

    <a class="btn btn-primary" href="{{ route('categories.index') }}">Danh muc</a>
@endsection