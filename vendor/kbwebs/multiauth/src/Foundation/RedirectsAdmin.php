<?php

namespace Kbwebs\MultiAuth\Foundation;

trait RedirectsAdmin
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectadminPath()
    {
        if (property_exists($this, 'redirectadminPath')) {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : 'admins';
    }
}
