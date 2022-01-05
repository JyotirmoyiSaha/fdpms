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
     background-color: #04AA6D;
     color: white;
   }
</style>
<br>
<div class="heading">
  <h2> Dealer Stock List</h2>
</div>

<br>
<a class="btn btn-primary" href="{{route('admin.dealerstock.create')}}" role="button">Add</a>
<body>
<table id="customers">
  <thead>
    <tr>
      <th>#ID</th>
      <th>Stock Item</th>
      <th>Quantity</th>
      <th>Action</th>
  
    </tr>  
  </thead>
  <tbody>
    @foreach ($dealerstocks as $key=>$dealerstock)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$dealerstock->dealerstock_item}}</td>
      <td>{{$dealerstock->dealerstock_quantity}}</td>
      <td>
        <a class="btn btn-info" href="">Veiw</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>

    </tr>    
    @endforeach
    
  </tbody>
  
</table>
</body>
@endsection