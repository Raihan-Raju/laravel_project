<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets Creation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row">
           <div class="col-10">
               <div class="text-center">
                   <h1>Welcome to our Tickets Creation Dashboard</h1>
               </div>
               <hr>
               <a href="{{ route('customer.ticket.create') }}" class="btn btn-success text-decoration-none text-light">Create Tickets</a>
           </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket->id }}</td>
                                    <td>{{ $ticket->name }}</td>
                                    <td>{{ $ticket->email }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning text-light">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
