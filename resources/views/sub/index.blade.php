@extends('layouts.app')
@section('body-container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4 add">
        <div class="d-flex justify-content-start flex-column">
            <div class="d-flex align-items-start">
              <h3 style="color: #043d49">SUBCRIPTIONS OVERVIEW</h3>
            </div>
            <div class="d-flex align-items-end">
                <a href="{{ route('subcription.create') }}"><button  type="button" class="add-usr">Add Subcrption</button></a>
            </div>
        </div> 
        @foreach($subscriptions as $s)
        <div class="padding">
            <div class="card color gap-2 col-4">
                <div class="card-body text">
                    <h2>{{ $s->service_name }}</h2>
                    <p>Total Customers: {{ $s->companies_count }}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>  
</html>


<style scoped>
    .add{
        padding: 80px 40px 40px 40px;
    }
     .add-usr{
      background-color: #232F47;
      color: white;
      height: 35px;
      width: 200px;
      border-radius: 0;
      border: none;
    }
    .padding{
        padding-top: 50px;
    }
    .color{
        background: #7CB9E8;
        border-radius: 0rem;
    }
    .text{

        color:white;
    }
   
</style>

@endsection