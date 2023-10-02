@extends('layouts.app')

@section('body')

<h1 class="mb-0"><i class="fa-regular fa-pen-to-square"> Edit Order</i></h1>

<hr/>
    <form action=" {{route('product.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-3">
            <div class="col mb-3">
                <label for="form-label">Item name:</label>
                <input class="form-control" id="item_name" name="item_name" value="{{$product->item_name}}">
            </div>
        </div>
        <div class="row">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Category:</label>
                <select name="category" id="category" class="form-control"  required>
                    <option selected>Choose...</option>
                    <option value="Beverage">Beverage</option>
                            <option value="Food">Food</option>
                            <option value="Tea">Tea</option>
                            <option value="Dessert">Dessert</option>
                </select>
            </div>   
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="item_price">Item Price:</label>
            <input type="number" name="item_price" id="item_price" class="form-control" value="{{$product->item_price}}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="item_quantity">Item Quantity:</label>
            <input type="number" name="item_quantity" id="item_quantity" class="form-control" min="1" value="{{$product->item_quantity}}">
            </div>
        </div>
        <div class="row">
            <div class="d-gird">
                <button class="btn btn-outline-success">Update</button>
                <a  class="btn btn-outline-warning btn-xs m-0 "  href="{{route('product.index')}}">Cancel</a>
            </div>
        </div>

    </form>
    @endsection