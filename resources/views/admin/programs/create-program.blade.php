@extends('admin.layouts.app')

@section('page')
    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title">Create New Program</h4>
                </div>

                <form action="/programs/create" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="title">Program Title</label>
                            <input name="title" id="title" placeholder="Title" class="form-control" type="text" />
                            <x-errors name="title" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="image">Program Image</label>
                            <input name="image" id="image" class="form-control" type="file" />
                            <x-errors name="image" />
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="subtitle">Program Subtitle</label>
                            <input name="subtitle" id="subtitle" placeholder="Subtitle" class="form-control"  />
                            <x-errors name="subtitle" />
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="content">Program Content</label>
                            <x-editor name="content" id="content" />
                            <x-errors name="content" />
                        </div>

                        <div class="col-md-12 float-left">
                            <button type="submit" class="float-right btn btn-primary">Save Program</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
