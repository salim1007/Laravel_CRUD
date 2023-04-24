@extends('products.layout')
@section('content')
<table border="2px">
    <th>
    <td><b>Name</b></td>
    <td><b>Price</b></td>
    <td><b>Description</b></td>
    
    
    </th>

    
    <tr>
       <td></td>
        <td> {{ $product->name }} </td>
        <td> {{ $product->price}} </td>
        <td> {{ $product->description}} </td>
        
    </tr>

  
</table>
