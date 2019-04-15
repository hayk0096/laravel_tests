<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Contact us</h1>
        <div class="row">
            <div class="col-md-6">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Full name: </label>
                        <input type="text" class="form-control" name="name" />
                        @if ($errors->has('name'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong></strong> {{ $errors->first('name') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Email Address: </label>
                        <input type="text" class="form-control" name="email" />
                        @if ($errors->has('email'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong></strong> {{ $errors->first('email') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Message: </label>
                        <textarea name="message" id="" class="form-control"></textarea>
                        @if ($errors->has('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong></strong> {{ $errors->first('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>