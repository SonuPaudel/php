@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold border-b-4 text-red-500 border-black">Edit Category</h2>

<form action="{{ route('category.update',$category->id) }}" method="POST" class="my-10">
    @csrf
    <input type="text" class="w-full p-2 rounded-lg mt-2" name="name" placeholder="Category Name" value="{{$category->name}}">
    @error('name')
    <span class="text-red-500 -mt-4">*{{$message}}</span>
    @enderror
    <input type="text" class="w-full p-2 rounded-lg mt-2" name="priority" placeholder="Enter Priority" value="{{$category->priority}}">
    @error('priority')
    <span class="text-red-500 -mt-4">*{{$message}}</span>
    @enderror

    <div class="mt-2">
        <input type="submit" value="Update" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer">
        <a href="{{ route('category.index') }}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer">Exit</a>
    </div>

</form>

@endsection