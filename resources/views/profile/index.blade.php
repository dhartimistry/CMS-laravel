@extends('layouts.app')
@section('body-container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Cutomer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="addUser">
            <div class="">
                <form>
                    <h2 style="color: #232F47">Profile - {{ auth()->user()->name }}</h2>
                    <br>    
                    <div class="mb-3">
                        <label class="form-label required">Address 1 *</label>
                        <input type="text" name="address_1" value={{ $profile->address_1 }} class="form-control" placeholder="">             
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">Address 2 *</label>
                        <input type="text" name="address_2" value={{ $profile->address_2 }} class="form-control" placeholder="">              
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">State *</label>
                        <input type="text" name="state" value={{ $profile->state }} class="form-control" placeholder="">                   
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">Pincode *</label>
                        <input type="text" name="pin_code" value={{ $profile->pin_code }} class="form-control" placeholder="">                 
                    </div>
                </form>
            </div>   
        </div>
    </div>
</body>

</html>


<style scoped>
    .text{
        color: red;
    }
    .addUser{
        padding: 80px 40px 40px 40px;
    }
    .form-control{
        width: 500px;
        border-radius: 0rem !important;
    }
    .btn-user{
        background-color: #232F47;
        color: white;
        height: 35px;
        width: 360px;
        border: 0rem;
    }
    .close-btn{
        margin-left: 10px;
        background: white;
        color: #232F47;
        width: 120px ;
        border: 1px solid black;
        height: 35px;
        border-radius: 0;
    }
</style>

@endsection