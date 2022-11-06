@extends('layouts.main')

@section('title')
    Edit State
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">State</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit State
                </div>
                <div class="card-body">
                    <form action="{{ route('states.update', $state->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country_id">Select Country</label>
                                    <select name="country_id" id="" class="form-control">
                                        <option value="">Select Country</option>
                                        @foreach($countries as $country)
                                        <option value="{{ $country->id }}" {{ $state->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    @error('country_id')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="" class="form-control" value="{{ old('name', $state->name) }}">
                                </div>
                                <div>
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection