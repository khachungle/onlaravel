@extends('layout')

@section('title')
    Them san pham
@endsection

@section('content')
    <h1 class="text-center">Them san pham</h1>
    <form class="ms-5" action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="nhap ten san pham"><br>
        <select name="category_id">
            @isset($categories)
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            @endisset
        </select><br>
        <textarea name="description" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Them">
    </form>
@endsection
