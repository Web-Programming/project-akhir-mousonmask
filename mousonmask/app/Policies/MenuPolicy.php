<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Menu;

class MenuPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->level == "admin" || $user->level == "user";
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Menu $menu): bool
    {
        return $user->level == "admin" || $user->level == "user";
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return in_array($user->email, [
            'callista@gmail.com',
            'christy@gmail.com',
            'jennifer@gmail.com',
            'admin@gmail.com'
        ]);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Menu $menu): bool
    {
        return in_array($user->email, [
            'callista@gmail.com',
            'christy@gmail.com',
            'jennifer@gmail.com',
            'admin@gmail.com'
        ]);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Menu $menu): bool
    {
        return in_array($user->email, [
            'callista@gmail.com',
            'christy@gmail.com',
            'jennifer@gmail.com',
            'admin@gmail.com'
        ]);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Menu $menu): bool
    {
        return in_array($user->email, [
            'callista@gmail.com',
            'christy@gmail.com',
            'jennifer@gmail.com',
            'admin@gmail.com'
        ]);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Menu $menu): bool
    {
        return in_array($user->email, [
            'callista@gmail.com',
            'christy@gmail.com',
            'jennifer@gmail.com',
            'admin@gmail.com'
        ]);
    }
}
