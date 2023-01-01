@extends('backend.master')
@section('content')
<h1>Customer Details</h1>


<form action="{{route('Customer_submit_Create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Category Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter category" name="category_name">
            @error('category_name')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Customer Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your order amount" name="customer_name">
            @error('order_id')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Customer Image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your order amount" name="customer_image">
            @error('order_id')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Customer Mobile</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your order date" name="customer_mobile">
            @error('order_id')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Customer Address</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your order details" name="customer_address">
            @error('customer_address')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
