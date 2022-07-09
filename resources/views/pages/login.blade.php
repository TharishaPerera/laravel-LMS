@extends('layouts.logins')

@section('content')

<div class="ftco-section">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
                <div class="img" style="background-image: url('{{$image}}');">
                </div>
                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Sign In</h3>
                        </div>
                    </div>
                    <form action="{{$action}}" method="{{$method}}" class="signin-form">
                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('success')}}</div>
                        @endif
                        @if(\Illuminate\Support\Facades\Session::has('fail'))
                            <div class="alert alert-danger">{{\Illuminate\Support\Facades\Session::get('fail')}}</div>
                        @endif

                        @csrf
                        @include('includes.loginForm')
                    </form>
                    @if(!empty($member))
                        <p class="text-center">{{$member}}<a data-toggle="tab" href="/signup">{{$signup}}</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
