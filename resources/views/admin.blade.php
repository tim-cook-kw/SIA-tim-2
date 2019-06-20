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

                    Hello, Admin
                    You are logged in!
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2


                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $p)
                                <tr>
                                    <td>{{ $p->id}}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->role }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
<<<<<<< HEAD
=======
>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
