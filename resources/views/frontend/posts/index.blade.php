@extends('frontend.layout.main')
@section('main-container')
<div class="container py-5" style="max-width: 1050px; margin-left:270px;">
    <h4 class="text-center mb-3 mt-5">Blog Listing Table</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-hover">
        <thead class="text-center">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
               
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="text-center align-middle">
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ Str::limit($post->title, 30) }}</td>
                    <td>{{ Str::limit($post->description, 40) }}</td>
                    <td>{{ $post->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">View</a>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <form action="#" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection