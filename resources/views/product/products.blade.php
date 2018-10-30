@extends('layout')
@section('title', 'Page Title')
@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Tous les Produits </div>
        <div class="card-body">
            @if( ! empty ( $message) )
                <p class="bg-success">{{ $message }}</p>
            @endif
            <meta name="csrf-token" id="_token" content="{{ csrf_token() }}">
            <div class="table-responsive">
                <table class="table table-bordered js-dataTable-full" id="product_table" width="100%" cellspacing="0">
                    <thead>
                    <tr data-ctr-id="">
                        <th>Name</th>
                        <th>Description</th>
                        <th>Sous Category</th>
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
            var ctr_dt = $('#product_table').DataTable({


                "responsive": true,
                "autoWidth": false,
                "processing": true,
                "serverSide": true,


                "ajax": "{{url('admin/gettallproducts')}}",
                "type": "GET",
                "columns": [
                    {"data": "name"},
                    {"data": "description"  },
                    {"data": "sub_category.title"  },



                ],
                "fnCreatedRow": function (nRow, aData, iDataIndex) {

                    $(nRow).attr("data-ctr-id", aData.id);
                },
                'columnDefs': [
                    {
                        'render': function (data, type, row) {
                            return '<a href="editproduct/' + row.id + '" class="editor_edit">Modifier</a> ' + ' / ' +'<a href="" class="editor_remove">Delete</a> ';
                        },
                        'targets': 3
                    }
                ],
            });

            $('#product_table').on('click', 'a.editor_remove', function (e) {
                e.preventDefault();



                row_id = $(this).parent().parent().attr('data-ctr-id');
                console.log(row_id+$('#_token').val());
                $.confirm({
                    title: 'Attention!',
                    content: 'Vous risquez de supprimer ce Produit ??',
                    buttons: {
                        confirm: function () {
                            $.ajax({
                                method: 'post',
                                url: 'deleteproduct',
                                data: {

                                    product_id: row_id ,

                                } ,
                            })
                                .done(function( msg ) {
                                    // console.log(msg+' respo');
                                    // $('#partner_table').ajax.reload();
                                    ctr_dt.ajax.reload();
                                    $.toast({
                                        heading: 'Success',
                                        text: 'Product  supprimé',
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






