@extends('layouts.app')
@section('body-container')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="addUser">
            <div class="">
                <form action="{{ route('companies.update',$company->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <h2 style="color: #232F47">Edit Customer</h2>
                    @if(session('status'))
                    <br>
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                    <br>
                    @endif
                    <div class="mb-3">
                        <label class="form-label required">Customer Name *</label>
                        <input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Customer Name">
                        @error('name')
                        <div class="text mt-1 mb-1"><small>{{ $message }}</small></div>
                        @enderror                    
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label required">Customer Email *</label>
                        <input type="email" name="email" value="{{ $company->email }}" class="form-control" placeholder="Customer Email">
                        @error('email')
                        <div class="text mt-1 mb-1"><small>{{ $message }}</small></div>
                        @enderror                    
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label required">Customer Address *</label>
                        <input type="text" name="address" value="{{ $company->address }}"  class="form-control" placeholder="Customer Address">
                        @error('address')
                        <div class="text mt-1 mb-1"><small>{{ $message }}</small></div>
                        @enderror                    
                    </div>
    
    
                    <br>
                    <!-- Edit User Button -->
                    <button style="background-color: #232F47" type="submit" class="btn-user">Edit Customer</button>
    
                    <!-- Close Button -->
                    <a href="{{ route('companies.index') }}"><button type="button" class="close-btn">CLOSE</button></a>    
                                                                      
                </form>
            </div>   
        </div>

</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Display SweetAlert when session status is present -->
@if(session('status'))
<script>
    Swal.fire({
        icon: 'success',
        text: "{{ session('status') }}",
        showConfirmButton: false,
        timer: 2000 // Set the time duration for the alert to automatically close (in milliseconds)
    });
</script>
@endif

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

