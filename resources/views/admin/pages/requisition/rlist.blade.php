@extends('master')

@section('content')

<style>
  body {
  display: grid;
 
  height:100vh;
  background: #7f7fd5;
  background: linear-gradient(to right, #91eae4, #86a8e7, #7f7fd5);
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
    <h2>Requisition Table</h2>
  </div>
  <br>
  {{-- <a class="btn btn-outline-success" href="{{route('admin.requisition.details')}}" role="button">Requisition Details</a> --}}
  <table id="customers">
    <tr>
      <th>Requisition ID</th>
      <th>Requisition By</th>
      <th> Total Amount</th>
    </tr>
    @foreach ($requisitionlists as $key=> $requisitionlist)
    <tr>
      <td>{{$requisitionlist->user_id}}</td>
      <td>{{$requisitionlist->user_id}}</td>
      <td>{{$requisitionlist->item_name}}</td>
    </tr>
    @endforeach
</table>
@endsection 