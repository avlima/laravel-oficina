<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Create a new Book</h1>
<form method="post" action="/books/store">
    {!! csrf_field() !!}
    Title: <input type="text" name="title">
    Description: <textarea name="description"></textarea>
    <input type="submit" value="Create book">
</form>
</body>
</html>