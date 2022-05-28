@extends('admin.faqs.faqs')


@section('faqs')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Edit FAQ</h4>

                <a href="/faqs" class="btn btn-primary">Create FAQ</a>
            </div>

            <div class="mt-4">
                <form action="/faqs/{{$faq->unique_id}}/update" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="question">Title</label>
                        <input name="question" id="question" value="{{$faq->question}}" placeholder="Title" class="form-control" type="text" />
                        <x-errors name="question" />
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <x-editor name="content" value="{!! $faq->content !!}"/>
                        <x-errors name="content" />
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">Update FAQ</button>
                </form>
            </div>
        </div>
    </div>
@endsection
