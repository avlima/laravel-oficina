<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit book</title>

    <style>
        form    {
            margin:auto;
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 14px;
            font-weight: bold;
            color: #09C;
            padding:10px;
        }

        input    {
            width:375px;
            display:block;
            border: 1px solid #999;
            height: 25px;
        }

        textarea    {
            width:375px;
            display:block;
            border: 1px solid #999;
            height: 125px;
        }
    </style>

</head>
<body>

<h1>Edit: {{ $book->title }}</h1>

<form method="post" action="/books/update/{{ $book->id }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @include('book._form')

    <input type="submit" value="Update book">

</form>

</body>
</html>