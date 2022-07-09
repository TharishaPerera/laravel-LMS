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
                                <h3 class="mb-4">Sign UP</h3>
                            </div>
                        </div>
                        <form action="#" class="signin-form">
                            @include('includes.signupForm')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
