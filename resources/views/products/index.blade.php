@extends('products.layout')
@section('content')


@if($message = Session::get('success'))
<div>
    <p>{{ $message }}</p>
</div>
@endif


<table border="1px">
    <th>

    <td><b>Name</b></td>
    <td><b>Price</b></td>
    <td><b>Description</b></td>
    <td><b>Action</b></td>


    </th>

    @foreach ($products as $product)
    <tr>
        <td></td>
        <td> {{ $product->name }} </td>
        <td> {{ $product->price }} </td>
        <td> {{ $product->description }} </td>
        <td>
            <a href="{{ route('products.show', $product->id)  }}"><button class="button">View</button></a>
            <a href="{{ route('products.edit', $product->id)  }}"><button class="button">Edit</button></a>
           <form method="post" action="{{ route('products.destroy', $product->id ) }}" >
            @csrf
            @method('delete')
           <button class="button" type="submit">Delete</button>
           </form>

        </td>
    </tr>




    @endforeach
</table><br />
<a href="{{ route('products.create')}}"><button>Create product</button></a>




@endsection