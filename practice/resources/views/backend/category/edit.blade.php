@extends('backend.master')
@section('title','Edit')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Edit  Employee</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-success">{{Session::has('success')?Session::get('success'):''}}</span>
                            <form action="{{route('category.update',['id'=>$category->id])}}" method="post">
                                @csrf
                                <div class="row mt-3">
                                    <label class="col-md-4">First Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{$category->name}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Full Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="fullname"value="{{$category->fullname}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Address</label>
                                    <div class="col-md-8">
                                        <input type="text" name="address" value="{{$category->address}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" name="email" value="{{$category->email}}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label><input type="radio" name="status" {{$category->status ==1 ? 'checked' : ''}} value="1">Available</label>
                                        <label><input type="radio" name="status" {{$category->status ==0 ? 'checked' : ''}}  value="0">Unavailable</label>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update"/>
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
