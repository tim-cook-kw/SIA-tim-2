<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>News</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    News Admin
                </div>
                <div class="card-body">
                    <a href="/admin" class="btn btn-danger">Back</a> 
                    <a href="/news/add" class="btn btn-primary">Input New News</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>News</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->created_at }}</td>
                                <td>{{ $p->news }}</td>
                                <td>
                                    <a href="/news/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/news/delete/{{ $p->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>