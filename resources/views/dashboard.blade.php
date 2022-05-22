@extends('layouts.master')
@section('title')
    مشروع التخرج - الصفحة الرئيسية
@stop
@section('css')

@endsection
@section('page-header')
    <!-- breadcrumb -->

    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <br>
    <br>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">SIMPLE TABLE</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn more</a></p>
                </div
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Id</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">E-mail</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Chloe</td>
                                <td>b.Chloe@datatables.net</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bond</td>
                                <td>d.bond@datatables.net</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Carr</td>
                                <td>h.carr@datatables.net</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>

    <!-- main-content closed -->
@endsection
@section('js')
@endsection
