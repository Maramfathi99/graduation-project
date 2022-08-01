@extends('layouts.master')

@section('title')
    Customers
@stop
@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div></div>
    <br>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'style="text-align: center">
                            <thead>
                            <tr>

                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">Date</th>
                                <th class="border-bottom-0">Time</th>
                                <th class="border-bottom-0">Address</th>
                                <th class="border-bottom-0">Description</th>
                                <th class="border-bottom-0">Service Providers Name</th>
                                <th class="border-bottom-0">Customer Name</th>
                                <th class="border-bottom-0">Service Name</th>
                                <th class="border-bottom-0">Operations</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=0 ?>
                            @foreach($booking as $b)
                                <?php $i++ ?>

                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$b->date}}</td>
                                    <td>{{$b->time}}</td>
                                    <td>{{$b->address}}</td>
                                    <td>{{$b->desciption}}</td>
                                    <td>{{$b->serviceProvider->name}}</td>
                                    <td>{{$b->customer->name}}</td>
                                    <td>{{$b->service->title}}</td>
                                    <td>
                                        <button class="btn btn-outline-danger btn-sm "
                                                data-id="{{ $b->id }}" data-toggle="modal" href="#modaldemo9" title="Delete">Delete</button>
                                    </td>
                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Delete Customer</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="bookings/destroy" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <div class="modal-body">
                        <p>Are you sure ?</p><br>
                        <input type="hidden" name="id" id="id" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>

        @endsection

        @section('js')

            <script>
                $('#modaldemo9').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')
                    var title = button.data('description')
                    var modal = $(this)
                    modal.find('.modal-body #id').val(id);
                    modal.find('.modal-body #description').val(name);
                })
            </script>
@endsection
