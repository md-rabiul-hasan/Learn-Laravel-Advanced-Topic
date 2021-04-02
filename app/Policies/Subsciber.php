<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Subsciber
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

    public function subscriberOnly(User $user){
        if($user->is_subscriber == 1){
            return true;
        }else{
            return false;
        }
    }
}
