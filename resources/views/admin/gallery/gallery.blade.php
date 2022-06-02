@extends('admin.layouts.app')

@push('styles')
    <style>
        .img-overlay{
            position: absolute;
            background: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            display: none;
            transition: all;
            transition-duration: 2s;
        }

        .img-overlay:hover{
        }

        .img-container:hover .img-overlay{
            display: block;
        }
    </style>
@endpush

@section('page')
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Gallery Images</h4>

                    {{$images->links()}}
                </div>

                <div>
                    <div class="row">
                        @forelse ($images as $image)
                            <div class="col-6 col-md-4 p-2">
                                <div class="w-100 h-100 position-relative img-container" >
                                    <div class="img-overlay p-2">
                                        <button data-toggle="modal" data-target="#gal-{{$image->id}}" href="" class="btn btn-secondary btn-sm text-white p-2"> <i class="mdi mdi-eye-outline"></i></button>
                                        <button data-toggle="modal" data-target="#img-{{$image->id}}" class="btn btn-primary btn-sm text-white p-2"> <i class="mdi mdi-pencil-outline"></i></button>
                                        <a href="/gallery/{{$image->unique_id}}/delete" class="btn btn-danger btn-square btn-sm text-white p-2"> <i class="mdi mdi-delete-outline"></i></a>
                                    </div>
                                    <img src="{{asset($image->image)}}" class="img-fluid h-100" style="object-fit: cover;" alt="">
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="img-{{$image->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="/gallery/{{$image->unique_id}}/update" method="POST" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Image Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                                @csrf
                                                <input type="text" name="id" value="{{$image->unique_id}}" hidden>
                                                <div class="form-group">
                                                    <label for="customFile">Select Image</label>
                                                    <input type="file" class="form-control" name="image" id="customFile">
                                                    <x-errors name="image" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="title">Image Title</label>
                                                    <input name="title" id="title" value="{{$image->title}}" placeholder="Image Title" class="form-control" type="text" />
                                                    <x-errors name="title" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="description">Image Description</label>
                                                    <textarea name="description" class="form-control" cols="30" rows="5">{{$image->description}}</textarea>
                                                    <x-errors name="description" />
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

                            <!-- Modal -->
                            <div class="modal fade" id="gal-{{$image->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl position-relative">
                                <div class="modal-content vh-75 p-2">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                    <div class="">
                                        <img style="object-fit: cover;" class="img-fluid" src="{{asset($image->image)}}" alt="">
                                    </div>
                                </div>
                                </div>
                            </div>
                        @empty
                        <div class="col-12">
                            <div class="w-100 p-5 border">
                                <p class="text-center">No Images Uploaded</p>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Add Gallery Image</h4>

                    <form action="/gallery/create" method="POST" enctype="multipart/form-data">
                    <div class="mt-4">
                            @csrf

                            <div class="form-group">
                                <label for="customFile">Select Image</label>
                                <input type="file" class="form-control" name="image" id="customFile">
                                <x-errors name="image" />
                            </div>

                            <div class="form-group">
                                <label for="title">Image Title</label>
                                <input name="title" id="title" placeholder="Image Title" class="form-control" type="text" />
                                <x-errors name="title" />
                            </div>

                            <div class="form-group">
                                <label for="description">Image Description</label>
                                <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                                <x-errors name="description" />
                            </div>

                            <button class="btn btn-primary mt-3" type="submit">Add Image</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
