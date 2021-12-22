@extends('master')

@section('content')

<style>
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  .heading h2{
    text-align: center;
  }
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #e4e3e3;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
  </style>
  <br>
  <div class="heading">
    <h2>Product List</h2>
  </div>
  
  <br>
  <a class="btn btn-primary" href="{{route('admin.product.list')}}" role="button">Add Product</a> 
  <table id="customers">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Details</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr> 
    </thead>
 
  <tbody>
    @foreach($products as $key=>$product)
    <tr>
      <td>{{$key+1}}</td>
      <td>
        <img width="100px" src="{{url('/uploads/'.$product->product_image)}}" alt="">
      </td>
      <td>{{$product->product_name}}</td>
      <td>{{$product->product_price}}</td>
      <td>{{$product->product_details}}</td>
      <td>{{$product->product_category}}</td>
      <td>
        <a class="btn btn-danger" href="">delete</a>
        <a class="btn btn-info" href="">edit</a>
      </td>
    </tr>    
  
    @endforeach  
  </tbody>
</table>
@endsection 