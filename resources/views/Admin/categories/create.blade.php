@extends('Admin.layout.app')

@section('content')


<div class="container pb-5">

    <div class="row mb-5 pt-2">
        <div class="col-sm-12">
            <h1 class="text-center">Add New Category</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-8 offset-2">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-8 offset-2">
            <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name *</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required autofocus>
                </div>
                <div class="mb-3">
                  <label for="status" class="form-label">Category Status *</label>
                  <select id="status" name="status" class="form-control" aria-describedby="emailHelp" required autofocus>
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Add New Category</button>
            </form>
        </div>
    </div>
</div>

