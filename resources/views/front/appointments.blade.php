@extends('front.layout.app')
@section('content')
    <main>

        <section class=" my-5 table-1">
            <div class=" container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <table class="table table-bordered table-hover table-striped">
                            <thead >
                            <tr class="tr">
                                <th scope="col"></th>
                                <th scope="col">8-10</th>
                                <th scope="col">10-12</th>
                                <th scope="col">12-2</th>
                                <th scope="col">2-4</th>
                                <th scope="col">4-6</th>
                            </tr>
                            </thead>
                            <tbody >
                            <tr>
                                <td class="td">Saturday</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>

                            </tr>
                            <tr>
                                <td class="td">Sunday</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>

                            </tr>
                            <tr>
                                <td class="td">Monday</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>

                            </tr>
                            <tr>
                                <td class="td">Tuesday</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>

                            </tr>
                            <tr>
                                <td class="td">Wednesday</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>

                            </tr>
                            <tr>
                                <td class="td">Thursday</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>

                            </tr>
                            <tr>
                                <td class="td">Friday</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                                <td>booked up</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            Add Appointments
                        </button>

                        <!-- Modal -->
                        <div class="modal fade mt-5 py-5 " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true" >
                            <div class="modal-dialog mt-5 py-5 ">
                                <div class="modal-content   " >

                                    <div class="modal-body text-white">
                                        <h4 class=" mb-3">Add Appointments </h4>
                                        <select name="" id="" class="d-block w-100">
                                            <option value="">Enter today</option>
                                        </select>
                                        <select name="" id="" class="d-block w-100 mt-3">
                                            <option value="">Enter the time</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/' . $page='front.resevations-list') }}" class=" btn btn-info">View Bookings </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
