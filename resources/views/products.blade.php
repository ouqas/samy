@extends('themain')
@section('title', 'Add Product')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 hidden-xs">
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">ACCUEIL</a></li>
                        <li class="active">Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="double-border"></div>
    <div class="main" role="main" style="margin-top:70px">
        <div id="content" class="content full">
            <div class="container">
                <ul class="grid-holder col-3 events-grid">
                    @foreach( $products as $product )
                    <li class="grid-item format-standard">
                        <div class="grid-item-inner"> <a href="{{url('product')}}/{{$product->id}}" class="media-box"><img src="{{ asset("uploads/$product->image1")  }}" alt=""></a>
                            <ul class="info-cols clearfix">
                                <li>{{$product->name}}</li>
                            </ul>

                        </div>
                    </li>
                    @endforeach


                </ul>
            </div>
        </div>
    <div>
        <p> </p>
        <p> </p>
        <p> </p>
    </div>
@endsection
