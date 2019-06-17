@extends('layouts.login.master')
@section('content')
<center>
    <div class="modal-dialog modal-sm">
        <div class="modal-content login-modal" style="display : inline-block; width: 40% ;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title"><i class="fa fa-sign-in"></i>LOGIN</h4>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="modal-body">
                    <div>
                        <label><i class="fa fa-user"></i>EMAIL</label>
                        <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <label><i class="fa fa-key"></i>PASSWORD</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</center>
@endsection


