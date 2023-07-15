@extends('layouts.app')
@section('body-container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Subscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="addUser">
            <div class="">
                <form action="{{ route('subcription.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2 style="color: #232F47">Add Subscription</h2>
                    @if(session('status'))
                    <br>
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                    <br>
                    @endif
                    <div class="mb-3">
                        <label class="form-label required">Service Name *</label>
                        <select name="subscriptions_id" class="form-control">
                            <option value="">Select a Service</option>
                            @foreach ($subscriptions as $subscription)
                                <option value="{{ $subscription->id }}">{{ $subscription->service_name }}</option>
                            @endforeach
                        </select>
                        @error('subscriptions_id')
                        <div class="text mt-1 mb-1"><small>{{ $message }}</small></div>
                        @enderror                   
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label required">Select Customer *</label>
                        <select name="customer_id" class="form-control">
                            <option value="">Select a Customer</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>
                        @error('customer_id')
                        <div class="text mt-1 mb-1"><small>{{ $message }}</small></div>
                        @enderror                  
                    </div>
    
                    <br>
                    <!-- Add User Button -->
                    <a href="{{ route('subcription.index') }}"><button style="background-color: #232F47" type="submit" class="btn-user">Add Subscription</button></a>
    
                    <!-- Close Button -->
                    <a href="{{ route('subcription.index') }}"><button type="button" class="close-btn">CLOSE</button></a>    
                                                                      
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