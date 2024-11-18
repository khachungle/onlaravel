@extends('layout')

@section('title')
    @isset($category)
        {{ $category->name }}
    @endisset
@endsection

@section('content')
    <h1 class="text-center">Thong tin danh muc</h1>
    @isset($category)
        <div class="content ms-5">
            <h2>Ten danh muc: {{ $category->name }}</h2>
            <h3>Ngay tao: {{ $category->created_at }}</h3>
            <h3>Cap nhat gan nhat: {{ $category->updated_at }}</h3>
        </div>
    @endisset
@endsection
