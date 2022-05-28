@extends('admin.layouts.app')

@section('page')
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Frequently Asked Questions</h4>

                    {{$faqs->links()}}
                </div>

                <div>
                    <table class="table table-bordered table-responsive-md w-100">
                    <thead>
                        <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($faqs as $faq)
                            <tr>
                                <td>
                                    {{$faq->question}}
                                </td>
                                <td>
                                    {!! $faq->content !!}
                                </td>
                                <td>
                                    <div class="badge {{$faq->status ? 'badge-primary' : 'badge-warning'}}">{{$faq->status ? 'Enabled' : 'Disabled' }}</div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="/faqs/{{$faq->unique_id}}/status">{{$faq->status ? 'Disable' : 'Enable' }}</a>
                                            <a class="dropdown-item" href="/faqs/{{$faq->unique_id}}/delete">Delete</a>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary" href="/faqs/{{$faq->unique_id}}/edit" >Edit Info</a>
                                </td>
                            </tr>
                        @empty
                            <p>No FAQs</p>
                        @endforelse
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            @yield('faqs')
        </div>
    </div>
@endsection
