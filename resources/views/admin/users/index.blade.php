@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                    @foreach($user as $user)
                    {{ $user->name }} - {{ $user->email }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
