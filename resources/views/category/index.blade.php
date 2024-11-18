@extends('layout')

@section('title')
    Danh muc san pham
@endsection

@section('content')
    <h1 class="text-center">Danh muc san pham</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Thêm danh mục</a>
    @isset($categories)
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Xem</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">
                                Xem
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                                Sửa
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center">Không có danh mục nào để hiển thị.</p>
    @endisset
@endsection
