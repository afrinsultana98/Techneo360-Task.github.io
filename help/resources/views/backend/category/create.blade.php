@extends('backend.master')
@section('title','Attendance')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Employee panel</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-success">{{Session::has('success')?Session::get('success'):''}}</span>
                            <form action="{{route('category.store')}}" method="post">
                                @csrf

                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <label><input type="checkbox" name="attend"  value="1">Attend</label>
                                        <label><input type="checkbox" name="attend" checked value="0">Absent</label>
                                    </div>
                                </div>


                                {{--                                <div class="row mt-3">--}}
                                {{--                                    <label class="col-md-4">Attend</label>--}}
                                {{--                                    <div class="col-md-8">--}}
                                {{--                                        <input type="checkbox" class="btn btn-success" />--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="row mt-3">
                                    <label class="col-md-4">In Time</label>
                                    <div class="col-md-8">
                                        <input type="datetime-local" name="intime" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Out Time</label>
                                    <div class="col-md-8">
                                        <input type="datetime-local" name="outtime" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
