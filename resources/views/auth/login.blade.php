<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow-sm border-0 bg-white" style="max-width: 850px; width: 100%; border-radius: 15px;">
            <div class="row g-4 align-items-center">
                
                <div class="col-md-6 order-2 order-md-1">
                    <h2 class="fw-bold mb-4 text-center text-md-start" style="color: #333;">Sign up</h2>
                    
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>       
                            @endforeach
                        </ul>

                    </div>
                    @endif
                    
                    <form action="{{ route('login') }}" method="POST" entype="multipart/form-data">
                        @csrf
                   
                       

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="bi bi-envelope-fill fs-5 me-3 text-secondary"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="email" name="email" id="emailInput" class="form-control" placeholder="Your Email" />
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="bi bi-lock-fill fs-5 me-3 text-secondary"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="password" name="password" id="passwordInput" class="form-control" placeholder="Password" />
                            </div>
                        </div>

                     
                       

                        <div class="d-flex justify-content-center justify-content-md-start mb-3 ms-md-5">
                            <button type="submit" class="btn btn-primary btn-lg px-4" style="background-color: #2b6cb0; border: none; border-radius: 5px;">Login</button>
                        </div>
                    </form>
                    <div>
                    <span>  Dont have account <a href="{{ route('registerPage') }}">Register here</a></span>
                    </div>
                </div>

                <div class="col-md-6 order-1 order-md-2 text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" 
                         class="img-fluid" 
                         alt="Sample image" 
                         style="max-height: 300px;">
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>