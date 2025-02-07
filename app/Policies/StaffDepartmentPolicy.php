<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\StaffDepartment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StaffDepartmentPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, StaffDepartment $staffDepartment)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, StaffDepartment $staffDepartment)
    {
        //
    }

    public function delete(User $user, StaffDepartment $staffDepartment)
    {
        //
    }

    public function restore(User $user, StaffDepartment $staffDepartment)
    {
        //
    }

    public function forceDelete(User $user, StaffDepartment $staffDepartment)
    {
        //
    }
}