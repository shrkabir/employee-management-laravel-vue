@extends('layouts.main')

@section('title')
    States
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">States</h1>
    </div>

    @if(Session::has('message'))
        <div>
            <span class="alert alert-primary">{{Session::get('message')}}</span>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('states.index') }}" method="GET">
                                <div class="form-row align-items-center">
                                    <div class="col">
                                        <input type="search" name="search" class="form-control mb-2" placeholder="Search state">
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <a href="{{ route('states.create') }}" class="float-right btn btn-sm btn-primary">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>state</th>
                                <th>Code</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($states as $key=>$state)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$state->country->country_code}}</td>
                                    <td>{{$state->name}}</td>
                                    <td>
                                        <div class="row">
                                            <a href="{{route('states.edit', $state->id)}}" class="btn btn-sm btn-primary mr-2">Edit</a>
                                            <form action="{{route('states.destroy', $state->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection