<!DOCTYPE html>
<html lang="en">

<head>
    <title>Email template builder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>All Email Templates</h2>
        <h3>
            @if (Session::has('msg-success'))
                <div class="alert alert-success .alert-dismissible" role="alert">
                    {!! Session::get('msg-success') !!}
                </div>
            @elseif(Session::has('msg-error'))
                <div class="alert alert-danger .alert-dismissible" role="alert">
                    {!! Session::get('msg-error') !!}
                </div>
            @endif
        </h3>
        <p>
            <a href="{{ url('add-template') }}"><button type="button" class="btn btn-success">Add Template</button></a>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Template</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($templates as $template)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $template->name }}</td>
                        <td>
                            <a href="{{ 'build/' . $template->id }}" target="_blank"><button type="button"
                                    class="btn btn-primary">Design</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
