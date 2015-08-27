<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

use App\Http\Requests;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        $books = Book::all();

        return view('book.books', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        return view('book.create', ['book' => new Book()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function postStore(Request $request)
    {
        //usando request
        $data = $request->all();

        //usando metodo create (obs: é necessario ter o metodo filabo)
        /*$data = ['title' => 'Game of Thrones', 'description' => 'Livro massa pra caramba'];*/

        Book::create($data);

        //usando o save
        /*$book->title = 'Alto da barca do Céu';
        $book->description = 'Descrição de livro';
        $book->save();*/

        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getShow($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getEdit($id)
    {
        $book = Book::find($id);

        return view('book.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function postUpdate(Request $request, $id)
    {
        Book::find($id)->update($request->all());

        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function getDelete($id)
    {
        Book::destroy($id);

        return redirect('books');
    }
}
