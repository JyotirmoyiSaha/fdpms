@extends('master')

@section('content')

<style>
 body{
  
    background: linear-gradient(to left, #ccccff 45%, #ccffff 95%);

 }
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
  
  #customers tr:nth-child(even){background-color: #ccccff;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: rgb(9, 24, 68);
    color: white;
  }
   /* button design */
   .btn {
  background-color: rgb(131, 157, 235);
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: rgb(5, 31, 109);
}
  </style>

{{-- searching --}}
<form action="{{route('admin.product.create')}}" method="GET">
  <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-6">
          <input value="{{$key}}" type="text" placeholder="Search" name="search" class="form-control">
      </div>
      <div class="col-md-2">
          <button type="submit" class="btn btn-success">Search</button>
      </div>
  </div>
  </form>
  @if($key)
  <h6>
      Searching for: {{$key}}.found:{{$products->count()}}
  </h6>
@endif
{{-- end searching --}}

  <div class="heading">
    <h2>Product List</h2>
  </div>
  <a class="btn btn-primary" href="{{route('admin.product.list')}}" role="button">Add Product</a> 
  <table id="customers">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Dealer Price</th>
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
      <td>{{$product->dealer_price}}</td>
      <td>{{$product->product_details}}</td>
      <td>{{$product->product_category->category_name}}</td>
      <td>
        <a class="btn" href="{{route('admin.product.details',$product->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20" width="22" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/></svg> </a>
        <a class="btn" href=""><i class="fa fa-edit"></i> </a>
        <a class="btn" herf="{{route('admin.product.delete',$product->id)}}"><i class="fa fa-trash"></i></a>  
      </td>
    </tr>    
  
    @endforeach  
  </tbody>
</table>
@endsection 