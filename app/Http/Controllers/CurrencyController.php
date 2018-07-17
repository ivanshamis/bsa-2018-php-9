<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use App\Http\Requests\CurrencyRequest;
use Auth;
use App\User;
use Gate;
use Illuminate\Database\Eloquent\Collection;

class CurrencyController extends Controller
{
    private function getAllCurrencies(): Collection
    {
        return Currency::all();
    }

    public function index()
    {
        return view('currencies-index', ['currencies' => $this->getAllCurrencies()]);
    }

    public function show(int $id)
    {
        $currency = Currency::find($id);
        if (Gate::denies('currency.view', $currency)) {
            return redirect()->route('main');
        }
        return view('currencies-show', [
            'currencies' => $this->getAllCurrencies(),
            'currency' => $currency
        ]);
    }

    public function create()
    {
        if (Gate::denies('currency.create', Currency::class)) {
            return redirect()->route('main');
        }
        return view('currencies-add', [ 'currencies' => $this->getAllCurrencies()]);
    }

    public function edit(int $id)
    {
        $currency = Currency::find($id);
        if (Gate::denies('currency.update', $currency)) {
            return redirect()->route('main');
        }
        return view('currencies-edit', [
            'currencies' => $this->getAllCurrencies(),
            'currency' => $currency
        ]);
    }

    public function destroy(int $id)
    {
        $currency = Currency::find($id);
        if (Gate::denies('currency.delete', $currency)) {
            return redirect()->route('main');
        }
        Currency::destroy($id);
        return redirect()->route('currencies.index');
    }

    public function store(CurrencyRequest $request)
    {   
        if (Gate::denies('currency.create', Currency::class)) {
            return redirect()->route('main');
        }
        $currency = Currency::create($request->all());
        return redirect()->route('currencies.index');
    }

    public function update(int $id, CurrencyRequest $request)
    {   
        $currency = Currency::find($id);
        if (Gate::denies('currency.update', $currency)) {
            return redirect()->route('main');
        }
        $currency->fill($request->all());
        $currency->save();
        return redirect()->route('currencies.show',['id' => $currency->id]);
    }
}