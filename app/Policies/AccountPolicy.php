<?php

namespace App\Policies;

use App\Account;
use App\Transaction;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view || update || delete the account.
     */

    public function view(User $user, Account $account)
    {
        return $user->id == $account->user_id;
    }
    public function update(User $user, Account $account)
    {
        return $user->id == $account->user_id;
    }
    public function delete(User $user, Account $account)
    {
        return $user->id == $account->user_id;
    }
}
