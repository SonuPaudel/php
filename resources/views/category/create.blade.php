@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold border-b-4 text-red-500 border-black">Category New Category</h2>

<form action="" class="my-10">
    <input type="text" class="w-full p-2 rounded-lg my-4" name="" placeholder="Category Name">
    <input type="text" class="w-full p-2 rounded-lg" name="" placeholder="Enter Priority">

    <div class="mt-2">
        <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer">
        <a href="{{ route('category.index') }}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer">Exit</a>
    </div>

</form>

@endsection