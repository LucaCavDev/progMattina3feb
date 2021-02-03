<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;

class DrinkController extends Controller
{
    public function index() {
        $drinks = Drink::all();
        return view('pages.drink-index', compact('drinks'));
    }
    public function show($id) {
        $drink = Drink::findOrFail($id);
        return view('pages.drink-show', compact('drink'));
    }

    public function create() {
        return view('pages.drink-create');
    }
    public function store(Request $request) {
        $request = $this -> getRequestFact($request);
        $drink = Drink::create($request -> all());
        return redirect() -> route('drink-show', $drink -> id);
        // return redirect() -> route('drinks-index');
    }

    public function edit($id) {
        $drink = Drink::findOrFail($id);
        return view('pages.drink-edit', compact('drink'));
    }
    public function update(Request $request, $id) {
        $request = $this -> getRequestFact($request);
        $drink = Drink::findOrFail($id);
        $drink -> update($request -> all());
        return redirect() -> route('drink-show', $drink -> id);
        // return redirect() -> route('drinks-index');
    }

    public function delete($id) {
        $drink = Drink::findOrFail($id);
        $drink -> delete();
        return redirect() -> route('drinks-index');
    }

    private function getRequestFact($request) {

        $ap = $request -> get('alchool_perc') * 10;
        $price = $request -> get('price') * 100;

        $request -> merge([
            'alchool_perc' => $ap,
            'price' => $price
        ]);
        
        return $request;
    }
}
