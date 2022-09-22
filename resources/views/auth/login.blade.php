<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body{background: #000}.card{border: none;height: 320px}.forms-inputs{position: relative}.forms-inputs span{position: absolute;top:-18px;left: 10px;background-color: #fff;padding: 5px 10px;font-size: 15px}.forms-inputs input{height: 50px;border: 2px solid #eee}.forms-inputs input:focus{box-shadow: none;outline: none;border: 2px solid #000}.btn{height: 50px}.success-data{display: flex;flex-direction: column}.bxs-badge-check{font-size: 90px}
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" id="form1">
                    <div class="form-data" v-if="!submitted">
                        <form action="{{route('do.login')}}" method="POST">
                            @csrf
                        <div class="forms-inputs mb-4"> <span>Email or username</span> 
                            <input autocomplete="off" type="email" name="email" required>
                            <div class="invalid-feedback">A valid email is required!</div>
                        </div>
                        <div class="forms-inputs mb-4"> <span>Password</span> 
                            <input autocomplete="off" type="password" name="password" required>
                        </div>
                        <div class="mb-3"> <button type="submit"  btn-dark w-100">Login</button> </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>