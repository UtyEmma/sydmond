@extends('admin.layouts.app')

@section('page')

    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title">News / Events</h4>
                <div class="d-flex">
                    <a class="btn btn-primary" href="/posts/new">Create New Post</a>
                    {{$posts->links()}}
                </div>
            </div>

            <div>
                <table class="table table-bordered table-responsive-md w-100">
                <thead>
                    <tr>
                    <th>Title</th>
                    <th>Excerpt</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td>
                                {{$post->title}}
                            </td>
                            <td>
                                {{$post->excerpt}}
                            </td>
                            <td>
                                <h5>{{ $post->author }}</h5>
                            </td>
                            <td>
                                {{ Date::parse($post->date)->format('jS, M Y') }}
                            </td>
                            <td>
                                <div class="badge {{$post->status ? 'badge-primary' : 'badge-warning'}}">{{$post->status ? 'Published' : 'Unpublished' }}</div>
                            </td>
                            <td>
                                <a href="/posts/{{$post->id}}/status" class="btn btn-secondary btn-sm text-white p-2"> <i class="mdi mdi-eye-outline"></i></a>
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm text-white p-2"> <i class="mdi mdi-pencil-outline"></i></a>
                                <a href="/posts/{{$post->id}}/delete" class="btn btn-danger btn-square btn-sm text-white p-2"> <i class="mdi mdi-delete-outline"></i></a>
                            </td>
                        </tr>
                    @empty
                        <p>No Posts Published</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
