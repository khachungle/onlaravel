@extends('layout')

@section('title')
    Chinh sua danh muc
@endsection

@section('content')
    <h1 class="text-center">Chinh sua danh muc</h1>
    @isset($category)
        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @csrf
            @method('put')
            <input name="name" type="text" value="{{ $category->name }}">
            <input type="submit" value="Cap nhat">
        </form>
    @endisset
@endsection
