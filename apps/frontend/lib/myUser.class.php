<?php

class myUser extends sfBasicSecurityUser
{
    public function getKeys()
    {
        return $this->getAttribute('content.keys', array());
    }

    public function setKeysSent(array $keys)
    {
        $session_keys = $this->getKeys();
        if (!empty($session_keys))
        {
            foreach ($keys as $key)
            {
                $session_keys[] = $key;
            }
        }
        else {
            $session_keys = $keys;
        }
        $this->setAttribute('content.keys',  array_unique($session_keys));
    }
}
