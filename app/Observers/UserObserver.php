<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserObserver
{
    public function saving(User $post)
    {
        Log::info("Saving");
    }

    public function creating(User $user)
    {
        Log::info("creating");
    }
}
