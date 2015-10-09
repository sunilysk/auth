<?php
namespace Kbwebs\MultiAuth\Foundation;
trait AdminAuthenticatesAndRegistersUsers
{
    use AdminAuthenticatesUsers, AdminRegistersUsers {
        AdminAuthenticatesUsers::redirectadminPath insteadof AdminRegistersUsers;
    }
}