<?php

namespace App\Helpers;

class RoleHelper {

    public static function redirect() {
        switch (auth()->user()->role){
            case 'admin':
                return 'admins.index';
            case 'donor':
                return 'donors.index';
            case 'user':
                return 'users.index';
            case 'association':
                return 'association.index';
        }
    }
}
