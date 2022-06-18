@extends('admin.layouts.app')

@section('page')
    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title">Create New Post</h4>
                </div>

                <form action="/posts/create" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="title">Post Title</label>
                            <input name="title" id="title" placeholder="Title" class="form-control" type="text" />
                            <x-errors name="title" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="image">Post Image</label>
                            <input name="image" id="image" class="form-control" type="file" />
                            <x-errors name="image" />
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="excerpt">Post Excerpt</label>
                            <textarea name="excerpt" id="excerpt" placeholder="Excerpt" class="form-control" rows="5"></textarea>
                            <x-errors name="excerpt" />
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="content">Post Content</label>
                            <x-editor name="content" id="content" />
                            <x-errors name="content" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="author">Post Author</label>
                            <input name="author" id="author" value="{{env('APP_NAME')}}" placeholder="Author Name" class="form-control" type="text" />
                            <x-errors name="author" />
                        </div>


                        <div class="col-md-6 form-group">
                            <label for="tags">Post Tags</label>
                            <x-tags name="tags" />
                            <x-errors name="tags" />
                        </div>

                        <div class="col-md-12 float-left">
                            <button type="submit" class="float-right btn btn-primary">Save Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
