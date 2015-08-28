<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>books</title>
    <style>
        .testTable {
            display: table;
            margin: 20px;
            padding: 0px;
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 14px;
        }

        .testRow {
            display: table-row;
        }

        .testRow > span {
            list-style: none;
            display: table-cell;
            border: 1px solid #9d9d9d;
            padding: 2px 6px;
            font-size: 13px;
        }

        .testHeader {
            font-weight: bold;
            color: #09C;
            display: table-header-group;
            /*position: absolute;*/
        }

        .testHeader span {
            background-color: #ddd;
        }

        .testBody {
            display: table-row-group;
        }
    </style>
</head>
<body>
<h1>Books</h1>

<a href="/books/create">Create new book</a>

<ul class="testTable">
    <div class="testHeader">
        <li class="testRow">
            <span>Title</span>
            <span></span>
            <span></span>
        </li>
    </div>
    <div class="testBody">
        @foreach($books as $book)
            <li class="testRow">
                <span>{{$book->title}}</span>
                <span><a href="/books/delete/{{$book->id}}">Delete</a></span>
                <span><a href="/books/edit/{{$book->id}}">Edit</a></span>
            </li>
        @endforeach
    </div>
</ul>
</body>
</html>