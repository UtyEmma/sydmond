@extends('admin.layouts.app')

@section('page')
    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title">Create New Event</h4>
                </div>

                <form action="/events/create" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="title">Event Title</label>
                            <input name="title" id="title" placeholder="Title" class="form-control" type="text" />
                            <x-errors name="title" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="image">Event Image</label>
                            <input name="image" id="image" class="form-control" type="file" />
                            <x-errors name="image" />
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="excerpt">Event Excerpt</label>
                            <textarea name="excerpt" id="excerpt" placeholder="Excerpt" class="form-control" rows="5"></textarea>
                            <x-errors name="excerpt" />
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="content">Event Content</label>
                            <x-editor name="content" id="content" />
                            <x-errors name="content" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="startdate">Event Start Date</label>
                            <input name="startdate" id="startdate" placeholder="Start Date" class="form-control" type="datetime-local" />
                            <x-errors name="startdate" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="enddate">Event End Date</label>
                            <input name="enddate" id="enddate" placeholder="End Date" class="form-control" type="datetime-local" />
                            <x-errors name="enddate" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="location">Event Location</label>
                            <input name="location" id="location" placeholder="Event Location" class="form-control" type="text" />
                            <x-errors name="location" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="tags">Event Tags</label>
                            <x-tags name="tags" />
                            <x-errors name="tags" />
                        </div>

                        <div class="col-md-12 float-left">
                            <button type="submit" class="float-right btn btn-primary">Save Event</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
