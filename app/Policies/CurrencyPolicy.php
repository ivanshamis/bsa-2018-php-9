<?php

namespace App\Policies;

use App\User;
use App\Currency;
use Illuminate\Auth\Access\HandlesAuthorization;

class CurrencyPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Currency $currency = NULL)
    {
        return ($currency!==NULL);
    }

    public function create(User $user)
    {
        return $user->isAdmin();
    }

    public function update(User $user, Currency $currency = NULL)
    {
        return (($user->isAdmin()) and ($currency!==NULL));
    }

    public function delete(User $user, Currency $currency = NULL)
    {
        return (($user->isAdmin()) and ($currency!==NULL));
    }
}
