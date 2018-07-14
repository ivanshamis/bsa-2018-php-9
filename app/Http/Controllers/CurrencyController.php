<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use App\Http\Requests\CurrencyRequest;

class CurrencyController extends Controller
{
    private $currencies;

    public function __construct() {
        $this->currencies = Currency::all()->toArray();
    }

    public function index()
    {
        return view('currencies-index', ['currencies' => $this->currencies]);
    }

    public function show(int $id)
    {
        $currency = Currency::find($id);
        return view('currencies-show', [
            'currencies' => $this->currencies,
            'currency' => $currency
        ]);
    }

    public function add()
    {
        return view('currencies-add', [ 'currencies' => $this->currencies]);
    }

    public function edit(int $id)
    {
        $currency = Currency::find($id);
        return view('currencies-edit', [
            'currencies' => $this->currencies,
            'currency' => $currency
        ]);
    }

    public function delete(int $id)
    {
        Currency::destroy($id);
        return redirect()->route('currencies.index');
    }

    public function store(CurrencyRequest $request)
    {   
        $currency = Currency::create($request->all());
        return redirect()->route('currencies.index');
    }

    public function update(int $id, CurrencyRequest $request)
    {   
        $currency = Currency::find($id);
        $currency->fill($request->all());
        $currency->save();
        return redirect()->route('currencies.show',['id' => $currency->id]);
    }
}
