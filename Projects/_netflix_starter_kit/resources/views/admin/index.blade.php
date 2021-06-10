<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table tr td,
        table tr th{
            border: 1px solid black;
        }
    </style>
    <a href="{{ URL::route('admin.create') }}">Create new</a>
    <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Banner</th> 
            <th></th>
        </tr>
        @foreach($data as $x)
            <tr>
                <td>{{ $x->title }}</td>
                <td>{{ $x->category }}</td> 
                <td>
                    <img src="{{ URL::asset('storage/'.$x->banner) }}" height="100px">
                </td> 
                <td>
                    <a href="{{ URL::route('admin.update', $x->id) }}">update</a>
                    <a href="">delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>