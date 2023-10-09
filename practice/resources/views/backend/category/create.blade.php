@extends('backend.master')
@section('title','ADD')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add Employee</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-success">{{Session::has('success')?Session::get('success'):''}}</span>
                            <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label class="col-md-4">First Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Full Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="fullname" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Address</label>
                                    <div class="col-md-8">
                                        <input type="text" name="address" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" name="email" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label><input type="radio" name="status" checked value="1">Available</label>
                                        <label><input type="radio" name="status" value="0">Unavailable</label>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="create Employee"/>
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
