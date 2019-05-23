<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit News</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Edit News Admin
                </div>
                <div class="card-body">
                    <a href="/news" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/news/update/{{ $news->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>News</label>
                            <textarea rows="8" name="news" class="form-control" placeholder="Add News .." value=" {{ $news->news }}"></textarea>
 
                            @if($errors->has('news'))
                                <div class="text-danger">
                                    {{ $errors->first('news')}}
                                </div>
                            @endif
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>