<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div>
    <label for="title">Title</label>
    <input name="title" id="title" type="text" value="{{ $book->title or "" }}" />
</div>
<br>
<div>
    <label for="description">Description</label>
    <textarea id="description" name="description" form="frm">{{ $book->description or "" }}</textarea>
</div>
<br>