@extends('layout')
@section('title', 'Add Product')
@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Add Product </div>
        <div class="card-body">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ url('admin/saveproduct') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <select class="form-control" name="subcategory_id">
                        @foreach($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}">{{$subcategory->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Product Name</label>
                    <input type="text" class="form-control" name="title" value=""  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Description</label>
                    <textarea type="text" class="form-control" name="description" value=""  placeholder=""> </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Dimension</label>
                    <input type="text" class="form-control" name="dimension" value=""  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Angle</label>
                    <input type="text" class="form-control" name="angle" value=""  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Puissance</label>
                    <input type="text" class="form-control" name="puissance" value=""  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Flux lumineux</label>
                    <input type="text" class="form-control" name="flumineux" value=""  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alimentation</label>
                    <input type="text" class="form-control" name="alimentation" value=""  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">T Couleur</label>
                    <input type="text" class="form-control" name="tcouleur" value=""  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Module</label>
                    <input type="text" class="form-control" name="module" value=""  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Poids</label>
                    <input type="text" class="form-control" name="poids" value=""  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Lumens</label>
                    <input type="text" class="form-control" name="lumens" value=""  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Battery</label>
                    <input type="text" class="form-control" name="battery" value=""  placeholder="">
                </div>

                <label for="exampleFormControlInput1">Images (Maximum 3 images )</label>
                <div class="input-group control-group increment" >
                    <input type="file" name="filename[]" class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                    </div>
                </div>
                <div class="clone hide" style="display:none">
                    <div class="control-group input-group addedclones" style="margin-top:10px">
                        <input type="file" name="filename[]" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                        </div>
                    </div>
                </div>



                <button type="submit" class="btn btn-primary mb-2">Save</button>
            </form>



        </div>

    </div>




@endsection

@section('script')




    <script>
        $(document).ready(function() {

            $(".btn-success").click(function(){
                //alert('ok');
                console.log($('.addedclones').length);
                if ( $('.addedclones').length < 3  ) {
                    var html = $(".clone").html();
                    $(".increment").after(html);
                }

            });

            $("body").on("click",".btn-danger",function(){
                $(this).parents(".control-group").remove();
            });

        });

    </script>
@endsection








