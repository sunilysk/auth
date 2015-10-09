<?php

namespace Kbwebs\MultiAuth\Foundation;

trait RedirectsOther
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectotherPath()
    {
        if (property_exists($this, 'redirectotherPath')) {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : 'otherdashboard';
    }
}
