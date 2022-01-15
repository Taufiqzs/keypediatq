@extends('layout.mainlayout')

@section('contentkp')
<header class="">
    <div class="text-center fs-1 mb-0 pt-2">
        <h1>Manage Category</h1>
    </div>
</header>

<div class="container d-flex flex-wrap align-items-stretch">
    {{-- <div class="column"> --}}
        @foreach ($categories as $c)
        <div class="align-item-stretch">
            
            <div class="m-2 card h-100" style="width: 32rem;">
                <img src="{{ $c->category_image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $c->category_name }}</h5>
                    <a href="/manageCategory/update/{{ $c->id }}" class="btn btn-primary" type="submit">Update category</a>
                    <form action="{{ route('deleteCategory', $c->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="" class="btn btn-primary" type="submit">Delete category</a>
                    </form>
                    
                </div>
            </div>
           
        </div>
        @endforeach
    {{-- </div>   --}}
</div>
@endsection