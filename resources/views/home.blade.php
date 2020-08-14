@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('/admin') }}">Admin</a></div>
                <div class="card-header"><a href="{{ url('/users') }}">Users</a></div>
                <div class="card-header"><a href="{{ route ('vendors') }}">Vendors</a></div>
            </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset( Auth ::user()->avatar)  }}" alt="" style="height: 60px; width =60px; border-radius= 50%; margin-right=15px;"> {{ __('You are logged in!') }}
                </div>

        </div>
    </div>
</div>
@endsection
