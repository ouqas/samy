@extends('layout')
@section('title', 'Categories')
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
                <table class="table table-bordered js-dataTable-full" id="category_table" width="100%" cellspacing="0">
                    <thead>
                    <tr data-ctr-id="">
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
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
            var ctr_dt = $('#category_table').DataTable({


                "responsive": true,
                "autoWidth": false,
                "processing": true,
                "serverSide": true,


                "ajax": "{{url('admin/gettallcategories')}}",
                "type": "GET",
                "columns": [
                    {"data": "title"},
                    {"data": "description"  },



                ],
                "fnCreatedRow": function (nRow, aData, iDataIndex) {

                    $(nRow).attr("data-ctr-id", aData.id);
                },
                'columnDefs': [
                    {
                        'render': function (data, type, row) {
                            return '<a href="editcategory/' + row.id + '" class="editor_edit">Modifier</a> ' + ' / ' +'<a href="" class="editor_remove">Delete</a> ';
                        },
                        'targets': 2
                    }
                ],
            });

            $('#category_table').on('click', 'a.editor_remove', function (e) {
                e.preventDefault();



                row_id = $(this).parent().parent().attr('data-ctr-id');
                 console.log(row_id+$('#_token').val());
                $.confirm({
                    title: 'Attention!',
                    content: 'Vous risquez de supprimer cet categorie ??',
                    buttons: {
                        confirm: function () {
                            $.ajax({
                                method: 'post',
                                url: 'deleteccategory',
                                data: {

                                    category_id: row_id ,

                                } ,
                            })
                                .done(function( msg ) {
                                    // console.log(msg+' respo');
                                    // $('#partner_table').ajax.reload();
                                    ctr_dt.ajax.reload();
                                    $.toast({
                                        heading: 'Success',
                                        text: 'Category  supprimé',
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






