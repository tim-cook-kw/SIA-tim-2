@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello, Student
                    You are logged in!
                    <a href="/news_read_student" class="btn btn-primary">See News</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
