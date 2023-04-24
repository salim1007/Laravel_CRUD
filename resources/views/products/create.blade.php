@extends('products.layout')
@section('content')


<h1>Products Create</h1>
<hr />


@if($errors->any())
<div>
   <ul>
      @foreach ($errors->all() as $error )
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif


<form method="post" action="{{ route('products.store') }}">
   @csrf

   <label>Name</label>
   <input type="text" name="name" /><br/><br/>


   <label>Price</label>
   <input type="number" name="price" /><br/><br/>


   <label>Description</label>
   <input type="textarea" name="description" /><br/><br/>


   <input type="submit" value="Submit" class="button" />



</form>

@endsection