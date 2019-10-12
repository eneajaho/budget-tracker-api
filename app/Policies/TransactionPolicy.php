<?php

namespace App\Policies;

use App\Transaction;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TransactionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view || update || delete the transaction.
     */
    public function view(User $user, Transaction $transaction)
    {
        return $user->id == $transaction->user_id;
    }
    public function update(User $user, Transaction $transaction)
    {
        return $user->id == $transaction->user_id;
    }
    public function delete(User $user, Transaction $transaction)
    {
        return $user->id == $transaction->user_id;
    }
}
