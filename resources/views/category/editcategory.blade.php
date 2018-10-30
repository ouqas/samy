@extends('layout')
@section('title', 'Edit Reservation')
@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Add Category </div>
        <div class="card-body">





            <form method="POST" action="{{ url('admin/savecategory') }}">
                @csrf

                <input type="text" class="form-control" name="category_id" value="{{$category->id}}" hidden>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nom</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->title }}" id="email" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Description</label>
                    <input type="text" class="form-control" name="description" value="{{ $category->description }}" id="email" placeholder="" required>
                </div>


                <button type="submit" class="btn btn-primary mb-2">Save</button>
            </form>



        </div>

    </div>




@endsection

@section('script')




    <script>


    </script>
@endsection








