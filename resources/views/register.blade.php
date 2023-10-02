<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Add Bootstrap CSS link here -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="row justify-content-center mt-5">
    
  <div class="col-lg-4">
    <div class="card shadow">
        <div class="card-header" style="background-color: #33FFBD;">
                <h1 class="card-title">👨🏽‍💻 Register</h1>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name " class="form-label"> Name</label>
                    <input type="text" name="name" class="form-control " id="name" placeholder="patexample" required>
                </div>
                <div class="mb-3">
                    <label for="email " class="form-label"> Email Address:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="password " class="form-label"> Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>

                <div class="col-11 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                      <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions.
                      </label>
                    </div>
                  </div>

                <div class="mb-3 d-flex justify-content-right">
                    <button class="btn btn-outline-primary mr-2">Register</button>
                    <a class="btn btn-outline-warning" href="{{route('login')}}">Log in</a>
                </div>
                
        
                    

                </div>
            </form>
            </div>
        </div>
    </div>
  </div>


</div>










     <!-- Add Bootstrap JS and jQuery scripts here -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://kit.fontawesome.com/4de77ba5f4.js" crossorigin="anonymous"></script>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
 </html>
 