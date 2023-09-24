@extends('layouts.app')

@section('title')

@section('contents')
<div class="container">
    <h1 class="mb-4">Add Task Here</h1>
    <hr />

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Employee Name</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Enter employee name">
        </div>

        <div class="mb-3">
            
            <label for="status" class="form-label">Status</label>
            <select name="product_code" class="form-control " id="status">
                <option value="To-Do">To-Do</option>
                <option value="In Progress">In Progress</option>
                <option value="Done">Done</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter description"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection