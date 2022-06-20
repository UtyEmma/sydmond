@extends('admin.layouts.app')

@section('page')

    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title">Donations</h4>
                <div class="d-flex">
                    {{$donations->links()}}
                </div>
            </div>

            <div>
                <table class="table table-bordered table-responsive-md w-100">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($donations as $donation)
                        <tr>
                            <td>
                                {{$donation->name ?? "Anonymous"}}
                            </td>
                            <td>
                                <a href="mailto:{{$donation->email}}">{{ $donation->email ?? "None" }}</a>
                            </td>
                            <td>
                                {{ $donation->amount }}
                            </td>
                            <td>
                                {{ Date::parse($donation->date)->format("jS, M Y") }}
                            </td>
                            <td>
                                @if ($donation->email)
                                    <a href="/donate/invoice/{{$donation->id}}?email={{$donation->email}}" class="btn btn-secondary btn-sm text-white p-2">Download Invoice</a>
                                @endif
                                {{-- <a data-toggle="modal" data-target="#team-modal-{{$donation->id}}" class="btn btn-primary btn-sm text-white p-2">Download Invoice</a> --}}
                                {{-- <a href="/management/{{$donation->id}}/delete" class="btn btn-danger btn-square btn-sm text-white p-2"> <i class="mdi mdi-delete-outline"></i></a> --}}
                            </td>
                        </tr>
                    @empty
                        <p>No Donations</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
