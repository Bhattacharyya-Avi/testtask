<!DOCTYPE html>
<html lang="en">

<head>

    
</head>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" >
                    <div class="form-data" >
                        @if ($resultCount != 0)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Mark</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key=>$user)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->department->name}}</td>
                                            <td>{{$user->total_mark}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No user has given exam</p>
                            <a href="{{route('login')}}"> login</a>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
