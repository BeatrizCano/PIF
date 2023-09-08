<?php

namespace App\Http\Controllers;

use App\Models\BookLoan;
use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;

/**
 * Class BookLoanController
 * @package App\Http\Controllers
 */
class BookLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookLoans = BookLoan::paginate();

        return view('book-loan.index', compact('bookLoans'))
            ->with('i', (request()->input('page', 1) - 1) * $bookLoans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookLoan = new BookLoan();
        
        return view('book-loan.create', compact('bookLoan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(BookLoan::$rules);

        $bookLoan = BookLoan::create($request->all());

        return redirect()->route('book-loans.index')
            ->with('success', 'BookLoan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookLoan = BookLoan::find($id);

        return view('book-loan.show', compact('bookLoan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookLoan = BookLoan::find($id);

        return view('book-loan.edit', compact('bookLoan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  BookLoan $bookLoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookLoan $bookLoan)
    {
        request()->validate(BookLoan::$rules);

        $bookLoan->update($request->all());

        return redirect()->route('book-loans.index')
            ->with('success', 'BookLoan updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bookLoan = BookLoan::find($id)->delete();

        return redirect()->route('book-loans.index')
            ->with('success', 'BookLoan deleted successfully');
    }
}
