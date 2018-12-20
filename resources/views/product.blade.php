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
                                        <img src="{{asset('main/images/termuda-1.jpg')}}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{asset('main/images/termuda-2.jpg')}}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{asset('main/images/termuda-3.jpg')}}" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <img src="{{asset('main/images/termuda-4.jpg')}}" alt="" >
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
                                            <tr>
                                                <th>Puissance: </th>
                                                <th> 30W / 40W / 60W</th>
                                            </tr>
                                            <tr>
                                                <td> flux lumineux: </td>
                                                <td> 2950LM / 3900LM / 5800LM</td>
                                            </tr>
                                            <tr>
                                                <td> Module: </td>
                                                <td> 16LED</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="widget sidebar-widget custom_categories_widget">
                            <h3 class="title">Téléchargements</h3>
                            <ul>
                                <li>&nbsp;<a href="acces.html">Fiche technique</a></li>
                                <li>&nbsp;<a href="acces.html">IES</a></li>
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
