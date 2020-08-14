@extends('layouts.app')

@section('title')
    Edit Table Rows
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Edit Registered Users') }}</div>
                <div class="card-body">

                    <form  method="POST" action="/update-row/{{ $users->id }}">
                        {{ csrf_field('') }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" value="{{ $users->name }}" class="form-control" id="name">
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" value="{{ $users->phone }}" class="form-control" id="phone">
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" value="{{ $users->email }}" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <input type="text" value="{{ $users->city }}" class="form-control" id="city">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Update') }}
                                </button>
                                <a href="/usersTables" class="btn btn-danger">
                                    {{ __('Cancel') }}
                                </a>
                            </div>
                            
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection