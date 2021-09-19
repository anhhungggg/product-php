@extends('layouts.app_frontend')
@section('content')
    <h1>Home Page</h1>
    <form method="post" action="{{ route('get_frontend.home.destroy') }}">
        @csrf
    <a href="/addproduct" class="btn btn-success">ADD</a>
    <button type="submit" class="btn btn-danger">MASS DELETE</button>
    <div class="container-fluid mt-3 mb-3">
        @foreach($chunks = $products->chunk(4) as $chunk)
            <div class="row">
                @foreach($chunk as $item)
                    <div class="card text-white bg-dark border-red mb-1 col-md-3 col-sm-6 col-xs-12 border-right border-left ">
                        <div>
                            <input type="checkbox" class="delete-checkbox" id="delete-checkbox" name="box[]" value="{{$item->id}}">
                        </div>
                        <div class="card-body text-center">
                            <div class="block-content">
                                <h5 class="card-title">{{$item->sku}}</h5>
                                <div class="card-text">Name: {{$item->name}}</div>
                                <div class="card-text">Price: {{$item->price}} $</div>
                                @if ($item->size)
                                    <div class="card-text">{{$item->size}} MB</div>
                                @elseif($item->weight)
                                    <div class="card-text">{{$item->weight}} Kg</div>
                                @else
                                    <div class="card-text">{{$item->width}}cm X {{$item->length}}cm X {{$item->height}}cm</div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    </form>
@stop
