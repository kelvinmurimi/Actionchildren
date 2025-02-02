<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\AdminPage;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPagePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, AdminPage $adminPage)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, AdminPage $adminPage)
    {
        //
    }

    public function delete(User $user, AdminPage $adminPage)
    {
        //
    }

    public function restore(User $user, AdminPage $adminPage)
    {
        //
    }

    public function forceDelete(User $user, AdminPage $adminPage)
    {
        //
    }
}