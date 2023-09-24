@extends('layouts.app')

@section('title', '')

@section('contents')
<div class="container">
    <h1 class="mb-4">Edit Task</h1>
    <hr />

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Employee Name</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="status" class="form-label">Status</label>
                <select name="product_code" class="form-control" id="status" required>
                    <option value="To-Do">To-Do</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Done">Done</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description" required>{{ $product->description }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-grid">
                    <button class="btn btn-warning">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
