@extends('website.master')

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
    background-color:#009999;
    color: white;
  }
  </style>
  <br>

  <div class="heading">
    <h2>Requisition Detalis</h2>
  </div>
  
  <br>

  
  <table id="customers">
    <tr>
      <th>ID</th>
      {{-- <th>Requisition ID</th> --}}
      <th>Product Name</th>
      <th>Product Quantity</th>
      <th>Product Price</th>
      <th>Product Subtotal</th>
      <th>Status</th>
  
    </tr>
    <tr>

      @foreach ($requisitiondetails as $key=>$requisitiondetailview)
    <tr>
      <td>{{$key+1}}</td>
      {{-- <td>{{$requisitiondetailview->requisition_id}}</td> --}}
      <td>{{$requisitiondetailview->product->product_name}}</td>
      <td>{{$requisitiondetailview->product_quantity}} KG</td>
      <td>{{$requisitiondetailview->product_price}} .BDT</td>
      <td>{{$requisitiondetailview->product_quantity * $requisitiondetailview->product_price}} .BDT</td>
       <td>
        {{$requisitiondetailview->status}}
      
     </td> 
    </tr>    
    @endforeach
</table>
@endsection 