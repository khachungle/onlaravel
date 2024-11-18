@extends('layout')

@section('title')
    @isset($product)
        {{ $product->name }}
    @endisset
@endsection

@section('content')
    <h1 class="text-center">Thong tin san pham</h1>
    @isset($product)
        <h2>Ten san pham: {{ $product->name }}</h2>
        <h2>Danh muc: {{ $product->category->name }}</h2>
        <h2>Mo ta: {{ $product->description }}</h2>
    @endisset
@endsection
