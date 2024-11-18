@extends('layout')

@section('title')
    Sua san pham
@endsection

@section('content')
    <h1 class="text-center">Sua san pham</h1>
    <form class="ms-5" action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="nhap ten san pham" value="{{ $product->name }}"><br>
        <select name="category_id">
            @isset($categories)
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            @endisset
        </select><br>
        <textarea name="description" cols="30" rows="10">{{ $product->description }}</textarea><br>
        <input type="submit" value="sua">
    </form>
@endsection
