<?php

namespace App\Policies;

use App\User;
use App\Repair;
use Illuminate\Auth\Access\HandlesAuthorization;

class RepairPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can create repairs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->admin ;
    }

    /**
     * Determine whether the user can update the repair.
     *
     * @param  \App\User  $user
     * @param  \App\Repair  $repair
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->admin ;
    }

    /**
     * Determine whether the user can delete the repair.
     *
     * @param  \App\User  $user
     * @param  \App\Repair  $repair
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->admin ;
    }
}
