<?php

namespace App\Policies;

use App\Models\UserAddress;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserAddressPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    protected $policies = [
        UserAddress::class => UserAddressPolicy::class,
    ];

    /*
     *  检查权限
     */
    public function own(User $user , UserAddress $userAddress)
    {
        return $userAddress->user_id == $user->id;
    }
}
