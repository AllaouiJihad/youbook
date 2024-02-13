<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use App\Models\User;
use App\Models\UserBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books_disponible = Book::where('status', true)->get();
        return view('index',['books_disponible' => $books_disponible]);
    }

    public function book_reserved(){
        $user = session('user');
        
        $books_emprunter = User::with('book')->where('id', $user->id)->get();
        return view('emprunte',['books_emprunter' => $books_emprunter]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $book = Book::create($request->only(['title','description','author',`updated_at`, `created_at` ]));
        session()->flash('success', 'book creer avec succes');
        return redirect()->route("show");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        return view("Books.show" , ["book" => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view("edit", ["book" => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $book = Book::find($id);
        $book->title = $request->input("title");
        $book->description = $request->input("description");
        $book->author = $request->input("author");
        $book->save();
        session()->flash('status', 'book modifier avec succes');
        return redirect()->route('show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::find($id)->delete();
        return redirect()->route('show');
    }

    public function reserveBook( $id)
    {
        // Find the reservation by its ID
        $reservation = Book::findOrFail($id);

        $reservation->update([
            'status' => false,
        ]);
        $book = new UserBook();
        $user = session('user');
        
        $book->book_id = $id;
        
        $book->user_id = $user->id;
        $book->date_reservation = date('Y-m-d');
        $book->save();

        return redirect()->route('show')->with('success', 'Book reserved successfully.');
    }
    public function recuperer( $id)
    {
       
        $book = Book::where('id',$id);
        
        $book->update([
            'status' => true,
            
        ]);

        UserBook::where('book_id',$id)->delete();
        return redirect()->route('show')->with('success', 'book recuperer avec succes');
    }
}

