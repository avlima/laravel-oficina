<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $books = \App\Book::all();

        return view('book.books', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $book = new \App\Book();

        //usando request
        $data = $request->all();

        //usando metodo create (obs: é necessario ter o metodo filabo)
        /*$data = ['title' => 'Game of Thrones', 'description' => 'Livro massa pra caramba'];*/

        $book->create($data);

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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $book = new \App\Book;
        $book = $book->find($id);

        return view('book.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $book = new \App\Book;
        $book = $book->find($id)->update($request->all());

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $book = new \App\Book;
        $book->find($id)->delete();

        return redirect('books');
    }
}
