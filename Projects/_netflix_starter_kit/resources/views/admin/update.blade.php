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
    <form enctype="multipart/form-data" action="{{ URL::route('admin.update.save', $data->id) }}" method="post">
        @csrf
        <!-- 419 error | Page Expired -->

        <input value="{{ $data->title }}" type="text" name="title" required placeholder="Title"><br>
        <select name="category"> 
            <option selected>{{ $data->category }}</option>
            <option>Top 10 in the Philippines today</option>
            <option>Trending Now</option>
            <option>Western Movies</option>
            <option>Suspenseful Movies</option>
            <option>Comedies</option>
            <option>Sci-Fi Thrillers</option>
            <option>Only on Netflix</option> 
        </select><br>
        <input type="file" name="file1" placeholder="Title"><br>
        <input type="file" name="file2" placeholder="Title"><br>
        <button>Save</button>
    </form>
</body>
</html>