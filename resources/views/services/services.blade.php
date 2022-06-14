@extends('layouts.master')

@section('title')
   Services
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
                                <th class="border-bottom-0">Title</th>
                                <th class="border-bottom-0">Category</th>
                                <th class="border-bottom-0">Description</th>
                                <th class="border-bottom-0">Price</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">service Provider Name</th>
                                <th class="border-bottom-0">Photo</th>
                                <th class="border-bottom-0">Operations</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=0 ?>
                            @foreach($services as $s)
                                <?php $i++ ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$s->title}}</td>
                                    <td>{{$s->category->category_name}}</td>
                                    <td>{{$s->description}}</td>
                                    <td>{{$s->price}}</td>
                                    <td>{{$s->status}}</td>
                                    <td>{{$s->serviceProvider->name}}</td>
                                    <td>
                                        @if($s->photo=="")
                                            <span>No Photo</span>
                                        @else
                                            <img style='max-width:100px' src='{{asset("storage/images/$s->photo")}}' />
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-danger btn-sm "
                                                data-id="{{ $s->id }}" data-title="{{ $s->title }}" data-photo="{{$s->photo}}"
                                                data-toggle="modal" href="#modaldemo9" title="Delete">Delete</button>
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
                    <h6 class="modal-title">Delete Service</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="services/destroy" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <div class="modal-body">
                        <p>Are you sure ?</p><br>
                        <input type="hidden" name="id" id="id" value="">
                        <input class="form-control" name="title" id="title" type="text" readonly>
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
                    var title = button.data('title')
                    var modal = $(this)
                    modal.find('.modal-body #id').val(id);
                    modal.find('.modal-body #title').val(title);
                })
            </script>
@endsection
