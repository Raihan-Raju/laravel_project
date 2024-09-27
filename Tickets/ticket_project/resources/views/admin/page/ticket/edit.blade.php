@extends('admin.partial.Layout')
@section('title')
    <h3>{{ auth()->user()->name }}</h3>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tickec create form </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 my-3">
                            <table class="table table-borderless">
                                <style>
                                    th,
                                    td {
                                        padding: 0.4rem !important;
                                    }
          
                                </style>
                                <tbody>
                                    <tr>
                                        <th class="text-nowrap" scope="row" style="width: 20%">Ticket No</th>
                                        <td colspan="" style="width: 3%">:</td>
                                        <td colspan="3" style="width: 77%">{{ $ticket->ticket_no }}</td>
                                    </tr>
            
                                    <tr>
                                        <th class="text-nowrap" scope="row" style="width: 20%"> Date </th>
                                        <td colspan="" style="width: 3%">:</td>
                                        <td colspan="3" style="width: 77%">{{ $ticket->date->format('d-M-Y') }}</td>
                                    </tr>
            
                                    <tr>
                                        <th class="text-nowrap" scope="row" style="width: 20%">Ticket Creator Name </th>
                                        <td colspan="" style="width: 3%">:</td>
                                        <td colspan="3" style="width: 77%">{{ $ticket->name }}</td>
                                    </tr>
            
                                    <tr>
                                        <th class="text-nowrap" scope="row" style="width: 20%">Email </th>
                                        <td colspan="" style="width: 3%">:</td>
                                        <td colspan="3" style="width: 77%">{{ $ticket->email }}</td>
                                    </tr>
            
                                    <tr>
                                        <th class="text-nowrap" scope="row" style="width: 20%">Status</th>
                                        <td colspan="" style="width: 3%">:</td>
                                        <td colspan="3" style="width: 77%">
                                            @if ($ticket->status === 'processing')
                                            <span class="text-primary">{{  $ticket->status }}</span>
                                            @elseif ($ticket->status === 'cancle')
                                            <span class="text-warning">{{  $ticket->status }}</span>
                                            @elseif ($ticket->status === 'approved')
                                            <span class="text-success">{{  $ticket->status }}</span>
                                            @endif
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                    </div>

                    <div class="mt-2">
                        <form action="{{ route('admin.ticket.edit', $ticket->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <select name="status" id="status" class="form-select">
                                            <option value="processing" {{ $ticket->status === 'processing' ? 'selected' : '' }}>processing</option>
                                            <option value="cancle" {{ $ticket->status === 'cancle' ? 'selected' : '' }}>Cancle</option>
                                            <option value="approved" {{ $ticket->status === 'approved' ? 'selected' : '' }}>Approved</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" id="" name="" value="Update">
                                    </div>
                                </div>
                            </div>                        
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@endsection