<?php
namespace Kbwebs\MultiAuth\Foundation;
trait OtherAuthenticatesAndRegistersUsers
{
    use OtherAuthenticatesUsers, OtherRegistersUsers {
        OtherAuthenticatesUsers::redirectotherPath insteadof OtherRegistersUsers;
    }
}