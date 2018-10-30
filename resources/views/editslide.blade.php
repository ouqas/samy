@extends('admin.layout')
@section('title', 'Slider')
@section('content')

 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Edit Slide Text </div>
        <div class="card-body">



                <form method="POST" action="{{ url('/saveslide') }}">
                    @csrf

                    <input type="text" class="form-control" name="id" value="{{$slide->id}}" hidden>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Titre</label>
                    <input type="text" class="form-control" name="p_header" value="{{$slide->p_header}}" id="email" placeholder="Title">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Text Court</label>
                    <textarea class="form-control" name="s_header" id="exampleFormControlTextarea1" rows="2"> {{$slide->s_header}} </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Details</label>
                    <textarea class="form-control" name="sub_header" id="exampleFormControlTextarea1" rows="3">{{$slide->sub_header}}</textarea>
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



   

    

