@extends('layouts.app')


@section('body')

    <h1 class="mb-0"><i class="fa-solid fa-receipt"> Detail Order</i></h1>
    <hr />

    <div class="row mt-3">
        <div class="col mb-3">
            <label for="form-label">Item name: </label>
            <input class="form-control" id="item_name" name="item_name" value="{{$product->item_name}}">
        </div>   
        <div class="col mb-3">
            <label for="category">Category:</label>
            <input class="form-control" id="category" name="category" value="{{$product->category}}">
        </div>   
        <div class="col mb-3">
            <label for="item_price">Item Price:</label>
            <input type="form-control" name="item_price" id="item_price" class="form-control" step="0.01" value="{{$product->item_price}}">
        </div>
        <div class="col mb-3">
            <label for="item_quantity">Item Quantity:</label>
            <input type="form-control" name="item_quantity" id="item_quantity" class="form-control" min="1" value="{{$product->item_quantity}}">
        </div>
        <div class="mb-3 d-flex justify-content-right mr-4">
        <a  class="btn btn-outline-warning btn-xs m-0 mt-3"  href="{{route('product.index')}}">Home</a>
        <div>
    </div>




@endsection 