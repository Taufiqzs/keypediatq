@extends('layout.mainlayout')

@section('contentkp')
<header class="">
    <div class="text-center fs-1 mb-0 pt-2">
        <h1>Update Category</h1>
    </div>
</header>

<div>
    <form action="{{ route('updateCategory', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $category->id }}">
        <div>
            Category Name:
            <input type="text" id="category_name" name="category_name" class="form-control"
            value="{{ $category->category_name }}">
        </div>
        <div>
            Category Image:
            <input type="text" id="category_name" name="category_name" class="form-control"
            value="{{ $category->category_image }}">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Update category</button>
        </div>
    </form>
</div>
@endsection