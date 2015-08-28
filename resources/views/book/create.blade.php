<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a new book</title>

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

<h1>Create a new book</h1>

<form id="frm" method="POST" action="/books/store">

    @include('book._form')

    <input type="submit" value="Create book">
</form>

</body>
</html>