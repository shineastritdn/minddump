<?php

namespace App\Policies;

use App\Models\Journal;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JournalPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Journal $journal)
    {
        return $user->id === $journal->user_id;
    }

    public function update(User $user, Journal $journal)
    {
        return $user->id === $journal->user_id;
    }

    public function delete(User $user, Journal $journal)
    {
        return $user->id === $journal->user_id;
    }
} 