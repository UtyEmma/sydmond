@extends('admin.layouts.app')

@section('page')

    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title">Members Benefit</h4>
                <div class="d-flex">
                    <button class="btn btn-primary" type="button" data-target="#team-modal" data-toggle="modal">Add New Benefit</button>
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
                                {!! $benefit->description !!}
                            </td>
                            <td >
                                <img src="{{ asset($benefit->image) }}" alt="">
                            </td>
                            <td>
                                <div class="badge {{$benefit->status ? 'badge-primary' : 'badge-warning'}}">{{$benefit->status ? 'Enabled' : 'Disabled' }}</div>
                            </td>
                            <td>
                                <a href="/benefits/{{$benefit->id}}/status" class="btn btn-secondary btn-sm text-white p-2"> <i class="mdi mdi-eye-outline"></i></a>
                                <a data-toggle="modal" data-target="#benefit-modal-{{$benefit->id}}" class="btn btn-primary btn-sm text-white p-2"> <i class="mdi mdi-pencil-outline"></i></a>
                                <a href="/benefits/{{$benefit->id}}/delete" class="btn btn-danger btn-square btn-sm text-white p-2"> <i class="mdi mdi-delete-outline"></i></a>
                            </td>
                        </tr>

                        <form action="/benefits/{{$benefit->id}}/update" method="POST" enctype="multipart/form-data">
                            <x-modal id="benefit-modal-{{$benefit->id}}" title="Edit Benefit">
                                @csrf

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" id="title" value="{{$benefit->title}}" placeholder="Benefit Title" class="form-control" type="text" />
                                    <x-errors name="title" />
                                </div>

                                <div class="form-group">
                                    <label for="phone">Description</label>
                                    <x-editor name="description" value="{!! $benefit->description !!}" id="description-{{$benefit->id}}" />
                                    <x-errors name="phone" />
                                </div>

                                <div class="form-group">
                                    <label for="image">Profile Photo</label>
                                    <input name="image" id="image" class="form-control" type="file" />
                                    <x-errors name="image" />
                                </div>
                            </x-modal>
                        </form>
                    @empty
                        <p>No Members Benefit</p>
                    @endforelse
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

    <form action="/benefits/create" method="POST" enctype="multipart/form-data">
        <x-modal id="team-modal" title="Add New Benefit">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" id="title" placeholder="Benefit Title" class="form-control" type="text" />
                    <x-errors name="title" />
                </div>

                <div class="form-group">
                    <label for="phone">Description</label>
                    <x-editor name="description" id="description" />
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
