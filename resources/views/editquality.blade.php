@extends('admin.layout')
@section('title', 'Page Title')
@section('content')

 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Edit quality </div>
        <div class="card-body">



                <form method="POST" action="{{ url('/savequality') }}">
                    @csrf

                    <input type="text" class="form-control" name="id" value="{{$quality->id}}" hidden>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Titre</label>
                    <input type="text" class="form-control" name="titre" value="{{$quality->titre}}" id="email" placeholder="Title">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Text Court</label>
                    <textarea class="form-control" name="shorttext" id="exampleFormControlTextarea1" rows="2"> {{$quality->shorttext}} </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Details</label>
                    <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3">{{$quality->details}}</textarea>
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
      
 


   

    

