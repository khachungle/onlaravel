@extends('layout')

@section('title')
    Them danh muc
@endsection

@section('content')
    <h1 class="text-center">Them danh muc</h1>
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <input name="name" type="text" placeholder="nhap ten danh muc"">
        <input type="submit" value="Them danh muc">
    </form>
@endsection
