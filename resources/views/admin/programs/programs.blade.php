@extends('admin.layouts.app')

@section('page')
    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title">Programs</h4>
                <div class="d-flex">
                    <a class="btn btn-primary" href="/programs/new">Create New Program</a>
                    {{$programs->links()}}
                </div>
            </div>

            <div>
                <table class="table table-bordered table-responsive-md w-100">
                <thead>
                    <tr>
                    <th>Title</th>
                    <th>Excerpt</th>
                    <th>Status</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($programs as $program)
                        <tr>
                            <td>
                                {{$program->title}}
                            </td>
                            <td>
                                {{$program->subtitle}}
                            </td>
                            <td>
                                <div class="badge {{$program->status ? 'badge-primary' : 'badge-warning'}}">{{$program->status ? 'Published' : 'Unpublished' }}</div>
                            </td>
                            <td>
                                <a href="/programs/{{$program->id}}/status" class="btn btn-secondary btn-sm text-white p-2"> <i class="mdi mdi-eye-outline"></i></a>
                                <a href="/programs/{{$program->id}}/edit" class="btn btn-primary btn-sm text-white p-2"> <i class="mdi mdi-pencil-outline"></i></a>
                                <a href="/programs/{{$program->id}}/delete" class="btn btn-danger btn-square btn-sm text-white p-2"> <i class="mdi mdi-delete-outline"></i></a>
                            </td>
                        </tr>
                    @empty
                        <p>No Programs Published</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
