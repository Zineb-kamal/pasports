<?php

namespace App\Policies;

use App\Pasport;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PasportPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any pasports.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the pasport.
     *
     * @param  \App\User  $user
     * @param  \App\Pasport  $pasport
     * @return mixed
     */
    public function view(User $user, Pasport $pasport)
    {
        //
    }

    /**
     * Determine whether the user can create pasports.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the pasport.
     *
     * @param  \App\User  $user
     * @param  \App\Pasport  $pasport
     * @return mixed
     */
    public function update(User $user, Pasport $pasport)
    {
        return $user
    }

    /**
     * Determine whether the user can delete the pasport.
     *
     * @param  \App\User  $user
     * @param  \App\Pasport  $pasport
     * @return mixed
     */
    public function delete(User $user, Pasport $pasport)
    {
        //
    }

    /**
     * Determine whether the user can restore the pasport.
     *
     * @param  \App\User  $user
     * @param  \App\Pasport  $pasport
     * @return mixed
     */
    public function restore(User $user, Pasport $pasport)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the pasport.
     *
     * @param  \App\User  $user
     * @param  \App\Pasport  $pasport
     * @return mixed
     */
    public function forceDelete(User $user, Pasport $pasport)
    {
        //
    }
}
