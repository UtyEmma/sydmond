@extends('admin.layouts.app')

@section('page')

    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title">News / Events</h4>
                <div class="d-flex">
                    <a class="btn btn-primary" href="/events/new">Create New Post</a>
                    {{$events->links()}}
                </div>
            </div>

            <div>
                <table class="table table-bordered table-responsive-md w-100">
                <thead>
                    <tr>
                    <th>Title</th>
                    <th>Excerpt</th>
                    <th>Dates</th>
                    <th>Status</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($events as $event)
                        <tr>
                            <td>
                                {{$event->title}}
                            </td>
                            <td>
                                {{$event->excerpt}}
                            </td>
                            <td>
                                {{ Date::parse($event->startdate)->format('jS, M Y') }} @if ($event->enddate)
                                - {{ Date::parse($event->enddate)->format('jS, M Y') }}
                                @endif
                            </td>
                            <td>
                                <div class="badge {{$event->status ? 'badge-primary' : 'badge-warning'}}">{{$event->status ? 'Published' : 'Unpublished' }}</div>
                            </td>
                            <td>
                                <a href="/events/{{$event->id}}/status" class="btn btn-secondary btn-sm text-white p-2"> <i class="mdi mdi-eye-outline"></i></a>
                                <a href="/events/{{$event->id}}/edit" class="btn btn-primary btn-sm text-white p-2"> <i class="mdi mdi-pencil-outline"></i></a>
                                <a href="/events/{{$event->id}}/delete" class="btn btn-danger btn-square btn-sm text-white p-2"> <i class="mdi mdi-delete-outline"></i></a>
                            </td>
                        </tr>
                    @empty
                        <p>No Events Published</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
