@extends('admin.layouts.app')

@section('page')

    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title">Management Team</h4>
                <div class="d-flex">
                    <button class="btn btn-primary" type="button" data-target="#team-modal" data-toggle="modal">Add Team Member</button>
                    {{$benefits->links()}}
                </div>
            </div>

            <div>
                <table class="table table-bordered table-responsive-md w-100">
                <thead>
                    <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($benefits as $benefit)
                        <tr>
                            <td>
                                {{$benefit->title}}
                            </td>
                            <td>
                                {{ $benefit->description }}
                            </td>
                            <td>
                                {{ $benefit->email }}
                            </td>
                            <td>
                                <div class="badge {{$benefit->status ? 'badge-primary' : 'badge-warning'}}">{{$benefit->status ? 'Enabled' : 'Disabled' }}</div>
                            </td>
                            <td>
                                <a href="/management/{{$benefit->id}}/status" class="btn btn-secondary btn-sm text-white p-2"> <i class="mdi mdi-eye-outline"></i></a>
                                <a data-toggle="modal" data-target="#benefit-modal-{{$benefit->id}}" class="btn btn-primary btn-sm text-white p-2"> <i class="mdi mdi-pencil-outline"></i></a>
                                <a href="/management/{{$benefit->id}}/delete" class="btn btn-danger btn-square btn-sm text-white p-2"> <i class="mdi mdi-delete-outline"></i></a>
                            </td>
                        </tr>

                        <div class="modal fade" id="benefit-modal-{{$benefit->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="/management/{{$benefit->id}}/update" method="POST" enctype="multipart/form-data">
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
                                                <input name="name" id="name" value="{{$benefit->name}}" placeholder="Full Name" class="form-control" type="text" />
                                                <x-errors name="name" />
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input name="email" id="email" value="{{$benefit->email}}" placeholder="Email Address" class="form-control" type="text" />
                                                <x-errors name="email" />
                                            </div>

                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input name="phone" id="phone" value="{{$benefit->phone}}" placeholder="Phone Number" class="form-control" type="text" />
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
                        <p>No Members Benefit</p>
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
