
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
    <div class="row justify-content-center mt-4">
        <div class="d-flex justify-content-center col-5 top">
            <div class="card mb-0 col l1">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <h3 class="text mt-0">SIGN IN</h3>
                    </div>
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        {{csrf_field() }}
                        <div class="mb-3">
                            <label for="email" class="form-label required" >Email address *</label><br>
                            <input class="form-control field" name="email" type="email" id="email" required="" value="" placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label required">Password *</label>
                            <input class="form-control field" name="password" type="password" id="password" required="" value="" placeholder="Enter Password">
                        </div>

                        <div class="mb-3 d-grid text-center">
                            <br>
                            <button class="btn btn-primary mb-2 login" type="submit" id="submit">    
                                Log In
                            </button>          
                        </div>
                    </form>

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<style scoped>
    .form-label{
        color:#232F47;
    }
    .form-control{
        border-radius: 0rem !important;
    }
    .l1{
        border-radius: 0 !important;
    }
    .field{
        background-color: #F5F6F8;
    }
    .login{
        border-radius: 0rem !important; 
        background-color: #232F47 !important;
        width: 100%;
    }
    .signup{
        color:#DB4C00;
        text-decoration: none;
    }
    .top{
            padding-top: 100px;
    }
</style>
