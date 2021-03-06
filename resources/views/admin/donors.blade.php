@extends('admin.layouts.app')

@section('page')

    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title">Donors</h4>
                <div class="d-flex">
                    <button class="btn btn-primary" type="button" data-target="#team-modal" data-toggle="modal">Add Donors</button>
                    {{$donors->links()}}
                </div>
            </div>

            <div>
                <table class="table table-bordered table-responsive-md w-100">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($donors as $donor)
                        <tr>
                            <td>
                                {{$donor->name}}
                            </td>
                            <td>
                                <h5>{{ ucfirst($donor->type) }}</h5>
                            </td>
                            <td>
                                <div class="badge {{$donor->status ? 'badge-primary' : 'badge-warning'}}">{{$donor->status ? 'Enabled' : 'Disabled' }}</div>
                            </td>
                            <td>
                                <a href="/donors/{{$donor->id}}/status" class="btn btn-secondary btn-sm text-white p-2"> <i class="mdi mdi-eye-outline"></i></a>
                                <a data-toggle="modal" data-target="#team-modal-{{$donor->id}}" class="btn btn-primary btn-sm text-white p-2"> <i class="mdi mdi-pencil-outline"></i></a>
                                <a href="/donors/{{$donor->id}}/delete" class="btn btn-danger btn-square btn-sm text-white p-2"> <i class="mdi mdi-delete-outline"></i></a>
                            </td>
                        </tr>

                        <div class="modal fade" id="team-modal-{{$donor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="/donors/{{$donor->id}}/update" method="POST" enctype="multipart/form-data">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Team Member Info</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                            @csrf

                                            <div class="form-group">
                                                <label for="name">Name (Individual or Organization)</label>
                                                <input name="name" id="name" placeholder="Full Name" class="form-control" type="text" />
                                                <x-errors name="name" />
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Logo/Image</label>
                                                <input name="image" id="image" class="form-control" type="file" />
                                                <x-errors name="image" />
                                            </div>
                                            <div class="form-group">
                                                <label for="type">Donor Type</label>
                                                <select name="type" id="" class="form-control">
                                                    <option value="organization">Organization</option>
                                                    <option value="individual">Individual</option>
                                                </select>
                                                <x-errors name="type" />
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
                        <p>No Donors</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<form action="/donors/create" method="POST" enctype="multipart/form-data">
    <x-modal id="team-modal" title="Add Team Member">
        @csrf

        <div class="form-group">
            <label for="name">Name (Individual or Organization)</label>
            <input name="name" id="name" placeholder="Full Name" class="form-control" type="text" />
            <x-errors name="name" />
        </div>
        <div class="form-group">
            <label for="image">Logo/Image</label>
            <input name="image" id="image" class="form-control" type="file" />
            <x-errors name="image" />
        </div>
        <div class="form-group">
            <label for="type">Donor Type</label>
            <select name="type" id="" class="form-control">
                <option value="organization">Organization</option>
                <option value="individual">Individual</option>
            </select>
            <x-errors name="type" />
        </div>
    </x-modal>
</form>
@endsection
