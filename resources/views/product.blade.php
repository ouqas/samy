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

    <div class="main" role="main" style="margin-top:30px">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="entry">
                            <div class="flexslider" data-pagination="yes" data-style="slide">
                                <ul class="slides">

                                    <li>
                                        <img src="{{ asset("uploads/$product->image1")  }}" alt="">
                                    </li>
                                    @if ($product->image2 != "")
                                    <li>
                                        <img src="{{ asset("uploads/$product->image2")  }}" alt="">
                                    </li>
                                    @endif
                                    @if ($product->image3 != "")
                                    <li>
                                        <img src="{{ asset("uploads/$product->image3")  }}" alt="">
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <div>
                           <!--     <img src="{{asset('main/images/termuda-4.jpg')}}" alt="" > -->
                            </div>
                        </div>
                    </div>

                    <!-- Start Sidebar -->
                    <div class="col-md-3 sidebar right-sidebar">
                        <div class="widget sidebar-widget upcoming_events_widget">
                            <h3 class="title">Paramètres</h3>
                            <ul>
                                <li>
                                    <div class="event-excerpt">
                                        <table class="table table-striped">
                                            <tbody>
                                            @if ($product->dimension != "")
                                            <tr>
                                                <th>Dimension: </th>
                                                <th> {{ $product->dimension }} </th>
                                            </tr>
                                            @endif
                                            @if ($product->angle != "")
                                                <tr>
                                                    <td>Angle: </td>
                                                    <td> {{ $product->angle }} </td>
                                                </tr>
                                            @endif
                                            @if ($product->puissance != "")
                                                <tr>
                                                    <td>Puissance: </td>
                                                    <td> {{ $product->puissance }} </td>
                                                </tr>
                                            @endif
                                            @if ($product->flux_lumineux != "")
                                                <tr>
                                                    <td>Flux lumineux: </td>
                                                    <td> {{ $product->flux_lumineux }} </td>
                                                </tr>
                                            @endif
                                            @if ($product->alimentation != "")
                                                <tr>
                                                    <td>Alimentation: </td>
                                                    <td> {{ $product->alimentation }} </td>
                                                </tr>
                                            @endif
                                            @if ($product->tcoulor != "")
                                                <tr>
                                                    <td>T° de couleur: </td>
                                                    <td> {{ $product->tcoulor }} </td>
                                                </tr>
                                            @endif
                                            @if ($product->module != "")
                                                <tr>
                                                    <td>Module: </td>
                                                    <td> {{ $product->module }} </td>
                                                </tr>
                                            @endif
                                            @if ($product->poids != "")
                                                <tr>
                                                    <td>Poids: </td>
                                                    <td> {{ $product->poids }} </td>
                                                </tr>
                                            @endif
                                            @if ($product->lumens != "")
                                                <tr>
                                                    <td>Lumens: </td>
                                                    <td> {{ $product->lumens }} </td>
                                                </tr>
                                            @endif
                                            @if ($product->battery != "")
                                                <tr>
                                                    <td>Battery: </td>
                                                    <td> {{ $product->battery }} </td>
                                                </tr>
                                            @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="widget sidebar-widget custom_categories_widget">
                            <h3 class="title">Téléchargements</h3>
                            <ul>
                                <li>&nbsp;<a href="{{ asset("uploads/$product->technical_details")  }}" target="_blank" >Fiche technique</a></li>
                               <!-- <li>&nbsp;<a href="acces.html">IES</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div>
            <p> </p>
            <p> </p>
            <p> </p>
        </div>
@endsection
