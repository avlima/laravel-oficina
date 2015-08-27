<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a new book</title>
</head>
<body>

<h1>Create a new book</h1>

<form id="frm" method="POST" action="/books/store">

    @include('book._form')

    <input type="submit" value="Create book">
</form>

</body>
</html>