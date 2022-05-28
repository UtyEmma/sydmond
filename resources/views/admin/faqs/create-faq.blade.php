@extends('admin.faqs.faqs')

@section('faqs')
    <div class="card">
        <div class="card-body">
            <h4>Create FAQ</h4>

            <div class="mt-4">
                <form action="/faqs/create" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="question">Title</label>
                        <input name="question" id="question" placeholder="Title" class="form-control" type="text" />
                        <x-errors name="question" />
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <x-editor name="content" />
                        <x-errors name="content" />
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">Create FAQ</button>
                </form>
            </div>
        </div>
    </div>
@endsection
