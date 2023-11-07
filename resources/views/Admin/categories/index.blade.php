@extends('Admin.layout.app')
@section('title', 'Admin Panel')
@section('content')
    <main class="page-content">
        <div class="container">

            <div class="row mb-2 pt-2">
                <div class="col-sm-12">
                    <h2 class="text-center">Manage Category Information</h2>
                </div>
            </div>
            <!-- Create Button -->
            <div class="row pt-5">
                <div class="col-12">
                    <a href="{{ route('categories.create') }}" type="button" class="btn btn-primary float-end">Add New Category</a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table display" id="sortable-table">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <div class="toggle-container {{ $category->status === 1 ? 'active' : '' }}"
                                                id="toggleButton" data-id="{{ $category->id }}"
                                                data-status="{{ $category->status }}">
                                                <div class="toggle-slider"></div>
                                                <div class="toggle-text">{{ $category->status === 1 ? 'Active' : 'Inactive' }}</div>
                                            </div>

                                         
                                        </td>
                                        <td>
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="post"
                                                style="display: inline-block;">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        

        const toggleButtons = document.querySelectorAll('.toggle-container');

        toggleButtons.forEach(button => {
            button.addEventListener('click', () => {
                const categoryId = button.getAttribute('data-id'); 
                const categoryStatus = button.getAttribute(
                'data-status'); 
               
                console.log(`Category ID: ${categoryId}, Status: ${categoryStatus}`);

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: 'categories/toggle',
                    data: {
                        'status': categoryStatus,
                        'category_id': categoryId
                    },
                    success: function(data) {
                        window.location.reload();
                    }

                });
            });
        });


    </script>
@endsection
