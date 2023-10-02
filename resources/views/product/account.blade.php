<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    @include('layouts.navbar')

      <div class="container">
        <div class="row mt-4 d-flex">
          <h1><i class="fa-solid fa-users-gear"> Account Page</i></h1>
          <hr/>
          
        </div>
        <div class="row justify-content-center mt-4  p-8">
          <div class="col-sm-10">
            <div class="container">
              <div class="card shadow-sm p-3 mb-5 bg-body rounded">
                <div class="card-body" style="background-color: #DAF7A6;">
                  <h1 class="card-title large fs-4"> 🤝 Hello, {{ Auth::user()->name }}! 🙋‍♂️🙋 Welcome to the Account Page.👋</h1>
                </div>
          
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>

      </div>


      <script src="https://kit.fontawesome.com/4de77ba5f4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>