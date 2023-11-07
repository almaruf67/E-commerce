@extends('Admin.layout.app')
@section('title','Panel')
@section('content')
<main class="page-content">
      <div class="container pb-5">

            <div class="row mb-5 pt-2">
                <div class="col-sm-12">
                    <h2 class="text-center">Update User Info.</h2>
                </div>
            </div>
    
            <div class="row">
                <div class="col-8 offset-2">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name *</label>
                            <input value="{{$user->name }}" type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required autofocus>
                        </div>
    
                        <div class="mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input value="{{$user->email }}" type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">User Type *</label>
                            <select id="type" name="type" class="form-control" aria-describedby="emailHelp" required autofocus>
                                <option value="0" {{ ($user->type == 'user') ? "selected" : '' }}>User</option>
                                <option value="1" {{ ($user->type == 'admin') ? "selected" : '' }}>Admin</option>
                                
                            </select>
                        </div>
    
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
</main>
@endsection