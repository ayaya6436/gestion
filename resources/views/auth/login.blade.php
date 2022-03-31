@extends('layouts.auth')

@section('container')
<div class="login-box" style="width:700px;">
    <div class="login-logo">
        <a href="../../index2.html"><b><strong style="color:#fff "> Application de Gestion</strong> </b></a>
    </div>
    
    <div class="card bg-dark">
        <div class="card-body bg-dark login-card-body">
            <form method="POST" action="{{ route('login') }}">
               @csrf

                <div class="input-group mb-3">
                    <input type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
              

                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                    </div>

                </div>
            </form>
           
        </div>

    </div>
</div>


@endsection
