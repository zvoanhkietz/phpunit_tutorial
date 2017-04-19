<?php

namespace App;

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
            $this->log("Couldn't save user: " . $this->jsonEncode($user), 'error');
            return false;
        }
        return true;
    }

}
