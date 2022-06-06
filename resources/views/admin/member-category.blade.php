@extends('admin.layouts.app')

@section('page')

    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title">Membership Categories</h4>
                <div class="d-flex">
                    <button class="btn btn-primary" type="button" data-target="#team-modal" data-toggle="modal">Add New Category</button>
                    {{$categories->links()}}
                </div>
            </div>

            <div>
                <table class="table table-bordered table-responsive-md w-100">
                <thead>
                    <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>
                                {{$category->category}}
                            </td>
                            <td>
                                {!! $category->description !!}
                            </td>
                            <td>
                                <div class="badge {{$category->status ? 'badge-primary' : 'badge-warning'}}">{{$category->status ? 'Enabled' : 'Disabled' }}</div>
                            </td>
                            <td>
                                <a href="/memberships/{{$category->id}}/status" class="btn btn-secondary btn-sm text-white p-2"> <i class="mdi mdi-eye-outline"></i></a>
                                <a data-toggle="modal" data-target="#benefit-modal-{{$category->id}}" class="btn btn-primary btn-sm text-white p-2"> <i class="mdi mdi-pencil-outline"></i></a>
                                <a href="/memberships/{{$category->id}}/delete" class="btn btn-danger btn-square btn-sm text-white p-2"> <i class="mdi mdi-delete-outline"></i></a>
                            </td>
                        </tr>

                        <form action="/memberships/{{$category->id}}/update" method="POST" enctype="multipart/form-data">
                            <x-modal id="benefit-modal-{{$category->id}}" title="Edit Category">
                                @csrf

                                <div class="form-group">
                                    <label for="category">Category Title</label>
                                    <input name="category" id="category" value="{{$category->category}}" placeholder="Category Title" class="form-control" type="text" />
                                    <x-errors name="category" />
                                </div>

                                <div class="form-group">
                                    <label for="description">Category Description</label>
                                    <x-editor name="description" value="{!! $category->description !!}" id="description-{{$category->id}}" />
                                    <x-errors name="description" />
                                </div>
                            </x-modal>
                        </form>
                    @empty
                        <p>No Member Category</p>
                    @endforelse
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

    <form action="/memberships/create" method="POST" enctype="multipart/form-data">
        <x-modal id="team-modal" title="Add New Member Category">
                @csrf

                <div class="form-group">
                    <label for="category">Category</label>
                    <input name="category" id="category" placeholder="Category Name" class="form-control" type="text" />
                    <x-errors name="category" />
                </div>

                <div class="form-group">
                    <label for="phone">Description</label>
                    <x-editor name="description" id="description" />
                    <x-errors name="phone" />
                </div>
                {{-- <button class="btn btn-primary mt-3" type="submit">Add Team Member</button> --}}
        </x-modal>
    </form>
@endsection
