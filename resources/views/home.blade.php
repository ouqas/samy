@extends('layout')
@section('title', 'Home')
@section('content')



    <!-- Icon Cards-->
    <div class="row">
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="d-flex border">
                    <div class="bg-info text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-eye"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0"> Category</p>
                        <h3 class="font-weight-bold mb-0"> {{ $categories }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex border">
                    <div class="bg-success text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-comments"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0">  Sub category</p>
                        <h3 class="font-weight-bold mb-0">{{ $subcategories }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="d-flex border">
                    <div class="bg-info text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-car"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0"> Products </p>
                        <h3 class="font-weight-bold mb-0"> {{ $productscount }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex border">
                    <div class="bg-danger text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa fa-laptop"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0"> Erreur</p>
                        <h3 class="font-weight-bold mb-0">0</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Area Chart Example-->





@endsection

@section('script')
    scripttat

@endsection






