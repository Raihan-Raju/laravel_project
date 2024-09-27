@extends('customer.partial.Layout')
@section('title')
    <h3>{{ auth()->guard('customer')->user()->name }}</h3>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ticket List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Ticket No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Create By</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $data )
                                <tr>
                                    <td>{{ $data->date }}</td>
                                    <td>{{ $data->ticket_no }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        @if ($data->status == 'processing')
                                        <span class="badge  text-bg-primary">{{ $data->status }}</span>
                                        @elseif ($data->status == 'cancle')
                                        <span class="badge  text-bg-warning">{{ $data->status }}</span>
                                        @else
                                        <span class="badge  text-bg-success">{{ $data->status }}</span>
                                        @endif
                                        
                                    </td>
                                    <td>{{ $data->create_by }}</td>
                                    {{-- <td><a href="#" class="btn btn-primary">edit</a></td> --}}
                                </tr>
                                @endforeach                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection