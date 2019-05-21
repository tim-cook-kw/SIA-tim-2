@extends('layouts.login.master')
@section('content')
<center>
            <div class="modal-dialog modal-sm">
    <div class="modal-content login-modal" style="display : inline-block; width: 40% ;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4 class="modal-title"><i class="fa fa-sign-in"></i>LOGIN</h4>
        </div>
        <div class="modal-body">
            <div>
                <label><i class="fa fa-user"></i>USERNAME/EMAIL</label>
                <input class="form-control" type="text" placeholder="Username/Email">
            </div>
            <div>
                <label><i class="fa fa-key"></i>PASSWORD</label>
                <input class="form-control" type="password" placeholder="Password">
            </div>
            <a href="#" class="forgot-link">FORGOT PASSWORD?</a>
            <a href="#" class="login-link"><i class="fa fa-sign-in"></i>LOGIN</a>
        </div>
    </div>
</div>
</center>
@endsection


