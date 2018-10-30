@extends('admin.layout')
@section('title', 'Page Title')
@section('content')

 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Booking table </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered js-dataTable-full" id="reservation_table" width="100%" cellspacing="0">
              <thead>
                    <tr data-ctr-id="">
                     <th>Nom</th>
                     <th>Depart</th>
                     <th>Destination</th>
                     <th>Passengers Number</th>  
                     <th>Telephone</th>   
                     <th>Date Depart</th>     
                     <th>Details</th>      
                  </tr>
              </thead>

              <tbody>
                  <tr>
                    <td></td>
                    <td></td>   
                    <td></td>
                    <td></td> 
                    <td></td>
                    <td></td> 
                    <td></td>       
                  </tr>
                </tbody>

            </table>
          </div>
        </div>
      
      </div>
      


    
 


@endsection

@section('script')
<script>  

$(document).ready( function () {
    var ctr_dt = $('#reservation_table').DataTable({
   
    
    "responsive": true,
    "autoWidth": false,
    "processing": true,
    "serverSide": true,
    
    
    "ajax": "{{url('getallr')}}",
    "type": "GET",
    "columns": [
        {"data": "nom"},
        {"data": "depart"  },
        {"data": "destination"},
        {"data": "pass_num"  },
        {"data": "telephone"},
        {"data": "datede"  },
        
    ],
    "fnCreatedRow": function (nRow, aData, iDataIndex) {
       
        $(nRow).attr("data-ctr-id", aData.id);
    },

            'columnDefs': [
                {
                    'render': function (data, type, row) {
                        return '<a href="/reservations/edit/' + row.id + '" class="editor_edit">Modifier</a> ';
                    },
                    'targets': 6
                }
            ],
});
} );
</script>
@endsection
   

    

