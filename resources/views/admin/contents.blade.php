@extends('admin.layouts.app')

@section('page')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5>Our Vision</h5>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vision-modal">Edit</button>
                            </div>

                            <x-errors name="vision" />
                            <div class="mt-3 p-4 border">
                                {!! $content->vision ?? 'No Content Available' !!}
                            </div>
                        </div>
                    </div>

                    <form action="/content/update" method="POST" >
                        @csrf
                        <x-modal id="vision-modal" title="Edit Vision">
                            <div class="form-group">
                                <label for="">Vision</label>
                                <x-editor :value="$content->vision ?? ''" name="vision" id="vision" />
                            </div>
                        </x-modal>
                    </form>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Our Goal</h5>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#goal-modal">Edit</button>
                            </div>
                            <x-errors name="goal" />
                            <div class="mt-3 p-4 border">
                                {!! $content->goal ?? 'No Content Available' !!}
                            </div>
                        </div>
                    </div>

                    <form action="/content/update" method="POST" >
                        @csrf
                        <x-modal id="goal-modal" title="Edit Vision">
                            <div class="form-group">
                                <label for="">Goal</label>
                                <x-editor :value="$content->goal ?? ''" name="goal" id="goal" />
                            </div>
                        </x-modal>
                    </form>
                </div>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Aims and Objectives</h5>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#objectives-modal">Edit</button>
                            </div>

                            <x-errors name="objectives" />
                            <div class="mt-3 p-4 border">
                                <ol class="row">
                                    @foreach (json_decode($content->objectives) as $objective)
                                        <li class="col-md-4">
                                            {{ $objective }}
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>

                        <form action="/content/update" method="POST">
                            @csrf
                            <x-modal id="objectives-modal" title="Edit Objectives">
                                <div class="form-group">
                                    <label for="">Our Objectives</label>
                                    <x-form-repeater name="objectives" placeholder="Write Objective Here" />
                                </div>
                            </x-modal>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
