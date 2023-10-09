@extends('backend.master')
@section('title','Report')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Attendance</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Attendance</th>
                                    <th>InTime</th>
                                    <th>OutTime</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->attend ==1 ? 'Attend' : 'Absent'}}</td>
                                        <td>{{$category->intime}}</td>
                                        <td>{{$category->outtime}}</td>
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
