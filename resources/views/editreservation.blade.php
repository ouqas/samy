@extends('admin.layout')
@section('title', 'Edit Reservation')
@section('content')

 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Edit reservation </div>
        <div class="card-body">



                <form method="POST" action="{{ url('/savereservation') }}">
                    @csrf

                    <input type="text" class="form-control" name="id" value="{{$reservation->id}}" hidden>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nom</label>
                    <input type="text" class="form-control" name="nom" value="{{$reservation->nom}}" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Depart</label>
                    <input type="text" class="form-control" name="depart" value="{{$reservation->depart}}" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Destination</label>
                    <input type="text" class="form-control" name="destination" value="{{$reservation->destination}}" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">email</label>
                    <input type="text" class="form-control" name="email" value="{{$reservation->email}}" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">telephone</label>
                    <input type="text" class="form-control" name="telephone" value="{{$reservation->telephone}}" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Date Depart de Vol</label>
                    <input type="text" class="form-control" name="datede" value="{{$reservation->datede}}" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pays d'origine</label>
                    <input type="text" class="form-control" name="origin_country" value="{{$reservation->origin_country}}" id="email" placeholder="">
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                        <input type="checkbox" name='origin_country' {{ $reservation->origin_country ? 'checked' : '' }}> Accompagnement
                        </label>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Vol numero</label>
                    <input type="text" class="form-control" name="vol_num" value="{{$reservation->vol_num}}" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Passport Num</label>
                    <input type="text" class="form-control" name="pass_num" value="{{$reservation->pass_num}}" id="email" placeholder="">
                </div>
               
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Commentaire</label>
                    <textarea class="form-control" name="commentaire" id="exampleFormControlTextarea1" rows="3">{{$reservation->commentaire}}</textarea>
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
      
 


   

    

