@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold border-b-4 text-blue-300 border-black">Dashboard</h2>
<div class="grid grid-cols-3 gap-8 my-6">
    <div class="p-4 flex justify-between bg-green-600 text-white rounded-lg">
        <span class="text-xl font-bold">Total News</span>
        <span class="texxt-5xl font-bold">665</span>
    </div>
    <div class="p-4 flex justify-between bg-blue-600 text-white rounded-lg">
        <span class="text-xl font-bold">Categories</span>
        <span class="texxt-5xl font-bold">665</span>
    </div>
    <div class="p-4 flex justify-between bg-red-600 text-white rounded-lg">
        <span class="text-xl font-bold">Total Visits</span>
        <span class="texxt-5xl font-bold">665</span>
    </div>
</div>
@endsection