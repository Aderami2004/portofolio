<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
</head>
<body>
    <form action="/auth" method="post">
        @csrf
        <div class="container py-5 w-25">
            <div class="card mt-5 flex-fill" style="max-widht: 20rem">
            <h2 class="text-center fw-bold mt-2">LOGIN</h2>
            <div class="form-outline mb-3 mt-2 form-control">
                <input type="email" id="form2Example1" name="email" class="form-control" placeholder="Email" />
            </div>
            <div class="form-outline mb-3 mt-2 form-control">
                <input type="password" name="password" id="form2Example2" class="form-control" placeholder="Password" />
            </div>
            <center><button class="btn btn-primary mb-2"><input style="border: none" class="bg-transparent text-white" type="submit" value="Login"></button></center>
            <div class="text-center">
                <p>Not a member? <a href="/daftar" class="text-decoration-none">Register</a></p>
            </div>
        </div>
        </div>
    </form>
</body>
</html>