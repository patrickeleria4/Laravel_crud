<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    @include('layouts.navbar')

    <style>
        .custom-shadow {
          box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3); /* Customize the shadow properties */
        }

        
      </style>


    <div class="row justify-content-center mt-5 p-6">
        <div class="col-sm-8">
          <div class="container">
            <div class="card custom-shadow">
              <div class="card-body" style="background-color: #DAF7A6;">
                <h1 class="card-title text-small fs-4"> <i class="fa-regular fa-handshake fa-sm">  Hello, {{ Auth::user()->name }}! 🙋‍♂️🙋 Welcome to the Dashboard.👋</h1></i>
              </div>
        
            </div>
          </div>
          <hr/>
        </div>
      </div>


     






    <div class="container mb-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card col-lg-4 mx-auto custom-shadow" style="background-color: #DAF7A6;">
                <div class="card-body text-black">
                    <h5><b>USER</b></h5>
                   


                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card col-lg-4 mx-auto custom-shadow" style="background-color: #DAF7A6;">
                <div class="card-body text-black">
                    <h5><b>ORDERS</b></h5>
                  


                </div>
            </div>
        </div>
    </div>
</div>

    
<script src="https://kit.fontawesome.com/4de77ba5f4.js" crossorigin="anonymous"></script>
    
    <script src="https://kit.fontawesome.com/4de77ba5f4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>