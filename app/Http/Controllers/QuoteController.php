<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quote;
use App\Http\Controllers\Controller;

class QuoteController extends Controller
{
    /**
     * Constructor
     *
     * @param App\Models\Quote $quote
     * @return void
     */    
    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
    }

    /**
     * Home page
     *
     * @return view
     */
    public function index()
    {
        return view('quotes.index');
    }

    /**
     * Search page
     * 
     * @param Illuminate\Http\Request $request
     * @return view
     */
    public function search(Request $request)
    {
        $query = $request->input('q');
        $results = $this->quote->search($query)->get();
        
        return view('quotes.search', ['results' => $results, 'query' => $query]);
    }
}