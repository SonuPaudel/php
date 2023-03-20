@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold border-b-4 text-blue-300 border-black">Category</h2>

<div class="my-4 text-right">
    <a href="{{ route('category.create') }}" class="bg-blue-600 text-white rounded-lg px-3 py-2">Add Category</a>
</div>
<table id="example" class="display w-auto">
    <thead>
        <th>Order</th>
        <th>Category Name</th>
        <th>Action</th>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Sport</td>
            <td>Edit Delete</td>
        </tr>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

@endsection