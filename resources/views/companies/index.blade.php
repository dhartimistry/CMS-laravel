@extends('layouts.app')
@section('body-container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="customer">
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-start">
                  <h3 style="color: #043d49">CUSTOMERS</h3>
                </div>
                <div class="d-flex align-items-end">
                    <a href="{{ route('companies.create') }}"><button  type="button" class="add-usr">Add Customer</button></a>
                </div>
            </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-4">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Address</th>
                    <th>Edit Customer</th>
                    <th>Delete Customer</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->address }}</td>
                        <td>
                            <a class="edit" href="{{ route('companies.edit', $company->id) }}">EDIT</a> 
                        </td>
                        <td>     
                            <form  class="del" action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="delete" onclick="return confirm('Are you sure you want to delete this customer?')">DELETE</a>
                            </form>                                  
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $companies->links() !!}
    </div>
</div>
</body>
</html>


<style scoped>
    .add-usr{
      background-color: #232F47;
      color: white;
      height: 35px;
      width: 200px;
      border-radius: 0;
      border: none;
    }
    .a{
      text-decoration: none;
    }
    .table-row{
    background:transparent;
  }
  .table{
    border-bottom-color: #8C9296;
  }
  .table-body{
    color: #232F47;
  }
  .customer{
    padding: 80px 40px 40px 40px;
  }
  .edit{
    color:forestgreen;
    text-decoration: none;
  }
  .edit:hover{
    color:forestgreen;
    text-decoration: none;
    cursor: pointer;
  }
  .delete{
    color:red;
    text-decoration: none;
  }
  .delete:hover{
    color:red;
    cursor: pointer;
  }
  .del{
    display: initial;
  }
  
  
  </style>
@endsection