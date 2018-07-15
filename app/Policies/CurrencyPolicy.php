<?php

namespace App\Policies;

use App\User;
use App\Currency;
use Illuminate\Auth\Access\HandlesAuthorization;

class CurrencyPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Currency $currency)
    {
        return true;
    }

    public function create(User $user)
    {
        return $user->isAdmin();
    }

    public function update(User $user, Currency $currency)
    {
        return $user->isAdmin();
    }

    public function delete(User $user, Currency $currency)
    {
        return $user->isAdmin();
    }
}