<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>employee index</title>
</head>
<body>
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <div class="index">
                    <a href="{{url('/create')}}" class="btn btn-primary">Add new</a>
                </div>
                <div class="create">
                    <table class="table table-bordered table-striped">
                         <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>phone</th>
                                <th>Address</th>
                                <th>Dob</th>
                                <th>photo</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Gender</th>
                                <th>Designation</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                          @foreach ($employee as $employee)
                          <tr>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>{{$employee->address}}</td>
                            <td>{{$employee->dob}}</td>
                            <td>{{$employee->photo}}</td>
                            <td>{{$employee->state}}</td>
                            <td>{{$employee->city}}</td>
                            <td>{{$employee->gender}}</td>
                            <td>{{$employee->designation}}</td>
                            <td>
                                <a href="show/{{$employee->id}}" class="btn btn-primary">Show</a>
                                <a href="edit/{{$employee->id}}" class="btn btn-success">Edit</a>
                                <a href="delete/{{$employee->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                          @endforeach

                         </tbody>
                    </table>
                </div>
            </div>
        </div>
     </div>
</body>
</html>
