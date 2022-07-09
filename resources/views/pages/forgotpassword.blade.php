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
                                <h3 class="mb-4 text-center">Forgot Your Password?</h3>
                                <p class="text-center">Enter your email address to get a link to reset your
                                    password.</p>
                            </div>
                        </div>
                        <form action="#" class="signin-form">
                            <div class="form-group mb-3">
                                <label class="label" for="email">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Send Link
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
