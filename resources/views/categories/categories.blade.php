@extends('layouts.master')

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

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
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

    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
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
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo1">Add category</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'style="text-align: center">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">Category name</th>
                                <th class="border-bottom-0">Category photo</th>
                                <th class="border-bottom-0">Operations</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=0 ?>
                            @foreach($categories as $c)
                                <?php $i++ ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$c->category_name}}</td>

                                    <td>
                                        @if($c->photo=="")
                                            <span>No Photo</span>
                                        @else
                                            <img style='max-width:100px' src='{{asset("storage/images/$c->photo")}}' />
{{--                                            <img style='max-width:100px' src='{{asset("images").'/'. $c->photo}}' />--}}

                                        @endif
                                    </td>
                                    <td>

                                        <button class="btn btn-outline-success btn-sm"
                                                data-id="{{ $c->id }}" data-category_name="{{ $c->category_name }}" data-photo="{{$c->photo}}" data-toggle="modal"
                                                href="#exampleModal2" title="Edit">Edit</button>

                                        <button class="btn btn-outline-danger btn-sm "
                                                data-id="{{ $c->id }}" data-category_name="{{ $c->category_name }}" data-photo="{{$c->photo}}"
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

        <div class="modal" id="modaldemo1">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Add category</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                      type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                           @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Category name</label>
                                <input type="text" class="form-control" id="category_name" name="category_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category photo</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">ADD</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form  action="categories/update" method="post" autocomplete="off">
                            {{ method_field('PUT') }}
                           @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" value="">
                                <label for="recipient-name" class="col-form-label">Category name:</label>
                                <input class="form-control" name="category_name" id="category_name" type="text">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

            <!-- delete -->
            <div class="modal" id="modaldemo9">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Delete Category</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                          type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="categories/destroy" method="post">
                            {{ method_field('delete') }}
                         @csrf
                            <div class="modal-body">
                                <p>Are you sure ?</p><br>
                                <input type="hidden" name="id" id="id" value="">
                                <input class="form-control" name="category_name" id="category_name" type="text" readonly>
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
            $('#exampleModal2').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var category_name = button.data('category_name')
                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #category_name').val(category_name);
            })
        </script>
                    <script>
                        $('#modaldemo9').on('show.bs.modal', function(event) {
                            var button = $(event.relatedTarget)
                            var id = button.data('id')
                            var category_name = button.data('category_name')
                            var modal = $(this)
                            modal.find('.modal-body #id').val(id);
                            modal.find('.modal-body #category_name').val(category_name);
                        })
                    </script>
@endsection
