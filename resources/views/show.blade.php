<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>create page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="col">
                    <form action="{{url('store')}}" method="POST">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name='name' class="form-control" value="{{$employee->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name='email' class="form-control" value="{{$employee->email}}">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="phone" name='phone' class="form-control" value="{{$employee->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="">Dob</label>
                            <input type="date" name='dob' class="form-control" value="{{$employee->dob}}">
                        </div>
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input type="file" name='photo' class="form-control" value="{{$employee->photo}}">
                        </div>
                        <div class="form-group">
                            <label for="">State</label>
                            <input type="text" name='state' class="form-control" value="{{$employee->city}}">
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" name='city' class="form-control" value="{{$employee->city}}">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Designation</label>
                            <input type="text" name='designation' class="form-control" value="{{$employee->designation}}">
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
