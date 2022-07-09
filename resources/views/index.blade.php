@extends('layouts.app')

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('fail'))
        <div class="alert alert-danger">{{\Illuminate\Support\Facades\Session::get('fail')}}</div>
    @endif
    <div>
        <ul class="groups">
            <li>
                <div class="card">
                    <div class="image-session">
                        <span class="image" style="background-image: url('../images/dancing.jpg');"></span>
                    </div>
                    <div class="meta-sission">
                        <div class="body">
                            <h1 class="title">D A N C I N G</h1>
                            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur ex
                                corporis nisi dignissimos quam debitis enim repellat cum explicabo consequatur.</p>
                        </div>
                        <div class="footer">
                            <a href="/dancing" class="button">Login</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="card">
                    <div class="image-session">
                        <span class="image" style="background-image: url('../images/french.jpg');"></span>
                    </div>
                    <div class="meta-sission">
                        <div class="body">
                            <h1 class="title">F R E N C H</h1>
                            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur ex
                                corporis nisi dignissimos quam debitis enim repellat cum explicabo consequatur.</p>
                        </div>
                        <div class="footer">
                            <a href="/french" class="button">Login</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="card">
                    <div class="image-session">
                        <span class="image" style="background-image: url('../images/english.jpg');"></span>
                    </div>
                    <div class="meta-sission">
                        <div class="body">
                            <h1 class="title">E N G L I S H</h1>
                            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur ex
                                corporis nisi dignissimos quam debitis enim repellat cum explicabo consequatur.</p>
                        </div>
                        <div class="footer">
                            <a href="/english" class="button">Login</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection
