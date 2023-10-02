@extends('layouts.app')

@section('body')

    <h1 class="mb-0"><i class="fa-solid fa-cart-arrow-down"> Add Order</i></h1>
    
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <div class="row mb-3 mt-3">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <hr />
            <div class="form-group mt-4">
          
                <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Category: </label>
                        <select name="category" id="category" class="form-control"  required>
                            <option selected>Choose...</option>
                            <option value="Beverage">Beverage</option>
                            <option value="Food">Food</option>
                            <option value="Tea">Tea</option>
                            <option value="Dessert">Dessert</option>
                        </select>
                    </div>   
            <div class="form-group">
                <label for="item-name">Item Name:</label>
                <input class="form-control" id="item-name" name="item_name">
                    <!-- Populate item names based on the selected category using JavaScript -->
          
            </div>
            <div class="form-group">
                <label for="item_price">Item Price:</label>
                <input type="number" name="item_price" id="item_price" class="form-control" step="0.01">
            </div>
            <div class="form-group">
                <label for="item_quantity">Item Quantity:</label>
                <input type="number" name="item_quantity" id="item_quantity" class="form-control" min="1">
            </div>            
            <div class="container">
            <button type="submit" class="btn btn-outline-success btn-xs mt-3 ">Submit</button>
            
                <a  class="btn btn-outline-warning btn-xs mt-3"  href="{{route('product.index')}}">Home</a>
          </div>
        </form>
    </div>
        </div>
    </form>
@endsection