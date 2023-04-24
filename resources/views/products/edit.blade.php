@extends('products.layout')
@section('content')


<h1>Edit Product</h1>
<hr />


<form method="post" action="{{ route('products.update', $product->id) }}" >
    @csrf
    @method('put')
 <div>
 <label>Name</label>
    <input type="text" name="name" value="{{ $product->name }}" /><br/><br/>
    @error('name')
    {{ $message }}
    @enderror

    <label>Price</label>
    <input type="text" name="price" value="{{ $product->price}}" /><br/><br/>
    @error('price')
    {{ $message }}
    @enderror

    <label>Description</label>
    <input type="text" name="description" value="{{ $product->description}}"/><br/><br/>
    @error('description')
    {{ $message }}
    @enderror

    <input type="submit" value="Edit" class="button"  />
 </div>
    

</form>


@endsection