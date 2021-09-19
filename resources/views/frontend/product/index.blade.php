@extends('layouts.app_frontend')
@section('content')
    <h1>Add Product</h1>
    <div>
        <form id="product_form" method="post" action="{{ route('get_frontend.product.store') }}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-8">
                    <label for="sku">SKU</label><br>
                    <input type="text" name="sku" id="sku" class="form-control" required/>
                </div>
                <br>
                <div class="col-md-8">
                    <label for="name">Product Name</label><br>
                    <input type="text" name="name" id="name" class="form-control" required/>
                </div>
                <br>
                <div class="col-md-8">
                    <label for="price">Price</label><br>
                    <input type="text" name="price" id="price" class="form-control" required/>
                </div>
                <br>
                <div class="col-md-8">
                    <label for="productType">Product Type</label><br>
                    <select class="form-control" id="productType" name="productType" required>
                        <option value='0'>DVD</option>
                        <option value='1'>Book</option>
                        <option value='2'>Furniture</option>
                    </select>
                </div>
                <br>
                <div class="col-md-8" id="dform">
                    <label for="size">Please provide Size (MB)</label><br>
                    <input type="number" name="size" id="size" class="form-control" required/>
                </div>
                <br>
            </div>
            <br>
            <div class="form-group ml-8">
                <div class="col-md-8">
                    <input type="submit" name="add product" class="btn btn-primary input-lg" value="Save"/>
                    <a href="/" class="btn btn-success">Cancel</a>
                </div>
            </div>
            {{--                Validation Message--}}
            @include('frontend/inc/message')
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('js/add.js')}}"></script>
@stop
