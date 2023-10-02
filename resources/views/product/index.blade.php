@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0"><i class="fa-solid fa-basket-shopping"> Order Page</h1></i>
        <a href="{{route('product.create')}}" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"> Add Product</a></i>
    </div>
<hr />

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif 

<table class="table table-hover">
    <thead class="table-success">
        <tr>
            <th class="align-middle fs-sm text-uppercase">#</th>
            <th class="align-middle fs-sm text-uppercase">Item Name</th>
            <th class="align-middle fs-sm text-uppercase">Category</th>    
            <th class="align-middle fs-sm text-uppercase">Item Price</th>
            <th class="align-middle fs-sm text-uppercase">Item Quantity</th>
            <th class="align-middle fs-sm text-uppercase">Total</th>
            <th class="align-middle fs-sm text-uppercase">Action</th>
        </tr>
    </thead>
    <tbody>
        @if($product->count()>0)
        @foreach($product as $rs)
         <tr>
            <td class="align-middle fs-sm text-uppercase">{{$loop->iteration}}</td>
            <td class="align-middle fs-sm text-uppercase">{{$rs->item_name}}</td>
            <td class="align-middle fs-sm text-uppercase">{{$rs->category}}</td>
            <td class="align-middle fs-sm text-uppercase">₱ {{number_format($rs->item_price, 2, '.',',') }}</td>
            <td class="align-middle fs-sm text-uppercase">{{$rs->item_quantity}}</td>
            <td class="align-middle fs-sm text-uppercase">₱ {{ number_format($rs->total_price, 2, '.', ',') }}</td>


            <td class="align-middle">
                <div class="btn-group" role="group " aria-label="Basic example">
                    <a href="{{route('product.show', $rs->id)}}" type="button" class="btn btn-secondary">Detail</a>
                    <a href="{{route('product.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{route('product.destroy', $rs->id)}}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('are you sure you want to Delete?')">
                        @csrf
                        @method('DELETE')
                         <button class="btn btn-danger m-0" >Delete</button>
                    </form>
                </div>
            </td>
         </tr>
         @endforeach
         @else
            <tr>
                <td class="text-center" colspan="5">Product not found</td>
            </tr>
            @endif
    </tbody>
</table>
@endsection