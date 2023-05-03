@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <a href="{{ route("sso.login")}}" class="btn btn-block btn-sm btn-primary">Login with SSO</a>
                    <a href="{{ route("sso.logout")}}" class="btn btn-block btn-sm btn-secondary">Return to SSO</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
