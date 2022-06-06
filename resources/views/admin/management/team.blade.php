@extends('admin.layouts.app')

@section('page')

    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title">Management Team</h4>
                <div class="d-flex">
                    <button class="btn btn-primary" type="button" data-target="#team-modal" data-toggle="modal">Add Team Member</button>
                    {{$teams->links()}}
                </div>
            </div>

            <div>
                <table class="table table-bordered table-responsive-md w-100">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Position</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teams as $team)
                        <tr>
                            <td>
                                {{$team->name}}
                            </td>
                            <td>
                                <div class="badge badge-primary">{{$team->type}}</div>
                            </td>
                            <td>
                                <h5>{{ $team->role }}</h5>
                            </td>
                            <td>
                                {{ $team->email }}
                            </td>
                            <td>
                                <div class="badge {{$team->status ? 'badge-primary' : 'badge-warning'}}">{{$team->status ? 'Enabled' : 'Disabled' }}</div>
                            </td>
                            <td>
                                <a href="/management/{{$team->id}}/status" class="btn btn-secondary btn-sm text-white p-2"> <i class="mdi mdi-eye-outline"></i></a>
                                <a data-toggle="modal" data-target="#team-modal-{{$team->id}}" class="btn btn-primary btn-sm text-white p-2"> <i class="mdi mdi-pencil-outline"></i></a>
                                <a href="/management/{{$team->id}}/delete" class="btn btn-danger btn-square btn-sm text-white p-2"> <i class="mdi mdi-delete-outline"></i></a>
                            </td>
                        </tr>

                        <div class="modal fade" id="team-modal-{{$team->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="/management/{{$team->id}}/update" method="POST" enctype="multipart/form-data">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Team Member Info</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                            @csrf
                                            @csrf

                                            <div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input name="name" id="name" value="{{$team->name}}" placeholder="Full Name" class="form-control" type="text" />
                                                <x-errors name="name" />
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="role">Role</label>
                                                        <input name="role" value="{{$team->role}}" id="role" placeholder="Role" class="form-control" type="text" />
                                                        <x-errors name="role" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="type">Member Category</label>
                                                        <select name="type" class="form-control" id="type">
                                                            <option @selected($team->type === 'trustee') value="trustee">Trustee</option>
                                                            <option @selected($team->type === 'management') value="management">Management</option>
                                                            <option @selected($team->type === 'volunteer') value="volunteer">Volunteer</option>
                                                        </select>
                                                        <x-errors name="type" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input name="email" id="email" value="{{$team->email}}" placeholder="Email Address" class="form-control" type="text" />
                                                <x-errors name="email" />
                                            </div>

                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input name="phone" id="phone" value="{{$team->phone}}" placeholder="Phone Number" class="form-control" type="text" />
                                                <x-errors name="phone" />
                                            </div>

                                            <div class="form-group">
                                                <label for="image">Profile Photo</label>
                                                <input name="image" id="image" class="form-control" type="file" />
                                                <x-errors name="image" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No Team Members</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<form action="/management/create" method="POST" enctype="multipart/form-data">
    <x-modal id="team-modal" title="Add Team Member">
        @csrf

        <div class="form-group">
            <label for="name">Full Name</label>
            <input name="name" id="name" placeholder="Full Name" class="form-control" type="text" />
            <x-errors name="name" />
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="role">Role</label>
                            <input name="role" id="role" placeholder="Role" class="form-control" type="text" />
                            <x-errors name="role" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="type">Member Category</label>
                            <select name="type" class="form-control" id="type">
                                <option value="trustee">Trustee</option>
                                <option value="management">Management</option>
                                <option value="volunteer">Volunteer</option>
                            </select>
                            <x-errors name="type" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input name="email" id="email" placeholder="Email Address" class="form-control" type="text" />
                    <x-errors name="email" />
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input name="phone" id="phone" placeholder="Phone Number" class="form-control" type="text" />
                    <x-errors name="phone" />
                </div>

                <div class="form-group">
                    <label for="image">Profile Photo</label>
                    <input name="image" id="image" class="form-control" type="file" />
                    <x-errors name="image" />
                </div>

                {{-- <button class="btn btn-primary mt-3" type="submit">Add Team Member</button> --}}
        </x-modal>
    </form>
@endsection
