<?php

namespace App;

use App\Systemp;

class User
{

    /**
     * use systems
     */
    use System;

    /**
     * @return type
     */
    public function saveUser(array $user)
    {
        if (isset($user['username'])) {
            $user['created'] = $this->createObject('\DateTime')->getTimestamp();
        }
        if (!$this->save($user)) {
            $this->log("Couldn't save user: " . json_encode($user), 'error');
            return false;
        }
        return (object) $user;
    }

}
