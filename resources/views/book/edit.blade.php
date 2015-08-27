<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit book</title>
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