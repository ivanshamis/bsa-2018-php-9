<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use App\Http\Requests\CurrencyRequest;
use Auth;
use App\User;
use Gate;

class CurrencyController extends Controller
{
    private $currencies;

    public function __construct() {
        $this->currencies = Currency::all();
    }

    public function index()
    {
        return view('currencies-index', ['currencies' => $this->currencies]);
    }

    public function show(int $id)
    {
        $currency = Currency::find($id);
        if (Gate::allows('currency.view', $currency)) {
            return view('currencies-show', [
                'currencies' => $this->currencies,
                'currency' => $currency
            ]);
        }
        else {
            return redirect()->route('main');
        }
    }

    public function create()
    {
        if (Gate::allows('currency.create', Currency::class)) {
            return view('currencies-add', [ 'currencies' => $this->currencies]);
        }
        else {
            return redirect()->route('main');
        }
    }

    public function edit(int $id)
    {
        $currency = Currency::find($id);
        if (Gate::allows('currency.update', $currency)) {
            return view('currencies-edit', [
            'currencies' => $this->currencies,
            'currency' => $currency
            ]);
        }
        else {
            return redirect()->route('main');
        }
    }

    public function destroy(int $id)
    {
        $currency = Currency::find($id);
        if (Gate::allows('currency.delete', $currency)) {
            Currency::destroy($id);
            return redirect()->route('currencies.index');
        }
        else {
            return redirect()->route('main');
        }
    }

    public function store(CurrencyRequest $request)
    {   
        if (Gate::allows('currency.create', Currency::class)) {
            $currency = Currency::create($request->all());
            return redirect()->route('currencies.index');
        }
        else {
            return redirect()->route('main');
        }
    }

    public function update(int $id, CurrencyRequest $request)
    {   
        $currency = Currency::find($id);
        if (Gate::allows('currency.update', $currency)) {
            $currency->fill($request->all());
            $currency->save();
            return redirect()->route('currencies.show',['id' => $currency->id]);
        }
        else {
            return redirect()->route('main');
        }
    }
}