@extends('layout')
@section('title', 'Sous Category')
@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Booking table </div>
        <div class="card-body">
            @if( ! empty ( $message) )
                <p class="bg-success">{{ $message }}</p>
            @endif
            <meta name="csrf-token" id="_token" content="{{ csrf_token() }}">
            <div class="table-responsive">
                <table class="table table-bordered js-dataTable-full" id="subcategory_table" width="100%" cellspacing="0">
                    <thead>
                    <tr data-ctr-id="">
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready( function () {
            var ctr_dt = $('#subcategory_table').DataTable({


                "responsive": true,
                "autoWidth": false,
                "processing": true,
                "serverSide": true,


                "ajax": "{{url('admin/gettallsubcategories')}}",
                "type": "GET",
                "columns": [
                    {"data": "title"},
                    {"data": "description"  },
                    {"data": "category.title"  },



                ],
                "fnCreatedRow": function (nRow, aData, iDataIndex) {

                    $(nRow).attr("data-ctr-id", aData.id);
                },
                'columnDefs': [
                    {
                        'render': function (data, type, row) {
                            return '<a href="editsubcategory/' + row.id + '" class="editor_edit">Modifier</a> ' + ' / ' +'<a href="" class="editor_remove">Delete</a> ';
                        },
                        'targets': 3
                    }
                ],
            });

            $('#subcategory_table').on('click', 'a.editor_remove', function (e) {
                e.preventDefault();



                row_id = $(this).parent().parent().attr('data-ctr-id');
                console.log(row_id+$('#_token').val());
                $.confirm({
                    title: 'Attention!',
                    content: 'Vous risquez de supprimer cet categorie , et Tous les produits reliés ??',
                    buttons: {
                        confirm: function () {
                            $.ajax({
                                method: 'post',
                                url: 'deletesubcategory',
                                data: {

                                    subcategory_id: row_id ,

                                } ,
                            })
                                .done(function( msg ) {
                                    // console.log(msg+' respo');
                                    // $('#partner_table').ajax.reload();
                                    ctr_dt.ajax.reload();
                                    $.toast({
                                        heading: 'Success',
                                        text: 'SubCategory  supprimé',
                                        showHideTransition: 'slide',
                                        icon: 'success',
                                        hideAfter: 5000 ,
                                    });
                                });
                        },
                        cancel: function () {

                        }
                    }
                });

            } );


        } );
    </script>

@endsection






