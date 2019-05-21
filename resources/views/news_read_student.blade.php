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
                    News
                </div>
                <div class="card-body">
                    <a href="/student" class="btn btn-danger">Back</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>News</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $p)
                            <tr>
                                <td>{{ $p->created_at }}</td>
                                <td>{{ $p->news }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>