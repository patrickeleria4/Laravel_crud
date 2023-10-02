<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add Bootstrap CSS link here -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <style>
        body {
            background-image: url(../resources/img/Bg.jpg); /* Replace'background.jpg' with the path or URL to your background image */
            background-size: cover; /* This will make the background image cover the entire screen */
            background-repeat: no-repeat; /* Prevent the background image from repeating */
            background-attachment: fixed; /* Fixed background so it doesn't scroll with content */
        }
    </style>

<div class="row justify-content-center mt-5">
    <div class="col-lg-4">
            <div class="card shadow">
            <div class="card-header" style="background-color: #33FFBD;">
              <h1 class="card-title">👨‍💻 Login</h1>
            </div>
            <div class="card-body">
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>
                    @endif
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address: </label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password " class="form-label"> Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                    </div>
                    <div class="mb-2 ">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="password" required>
                          <label class="remember" for="dropdownCheck2">
                            Remember me
                          </label>

                    <div class="mb-3 d-flex justify-content-right ">
                        <button class="btn btn-outline-primary mr-2">Login</button>
                        <a class="btn btn-outline-warning" href="{{route('register')}}">Register</a>
                        
                    </div>
                    
                    
                </form>
         
                </div>
            </form>
            </div>
        </div>
    </div>
  </div>


</div>










     <!-- Add Bootstrap JS and jQuery scripts here -->
    <script src="https://kit.fontawesome.com/4de77ba5f4.js" crossorigin="anonymous"></script>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
 </html>
 