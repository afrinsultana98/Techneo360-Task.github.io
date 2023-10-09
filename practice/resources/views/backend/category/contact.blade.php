@extends('backend.master')
@section('title','Contact')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Employee Contact</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Address</th>
                                    <th>Email</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->address}}</td>
                                        <td>{{$category->email}}</td>
                                        {{--                                        <td>--}}
                                        {{--                                            <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-outline-primary">Edit</a>--}}
                                        {{--                                            <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-outline-danger">Delete</a>--}}
                                        {{--                                        </td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
