@extends('layout')
@section('title', 'Edit Reservation')
@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Add Category </div>
        <div class="card-body">


            @if( ! empty ( $message) )
                <p class="bg-success">{{ $message }}</p>
            @endif


            <form method="POST" action="{{ url('admin/savesubcategory') }}">
                @csrf

                <div class="form-group">
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nom</label>
                    <input type="text" class="form-control" name="title" value="" id="email" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Description</label>
                    <input type="text" class="form-control" name="description" value="" id="email" placeholder="" required>
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








