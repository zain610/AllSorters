<?php

namespace App\Shell;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Console\Shell;
use Cake\ORM\TableRegistry;

class UserShell extends Shell
{
    public function createAdmin()
    {
        $username = $this ->in('Enter a new username:');
        $email = $this ->in('Enter your Email');
        $password = $this ->in('Enter password');
        $Comfirmpassword = $this ->in('Comfirm password');

        if($password == $Comfirmpassword){
            $adminTable = TableRegistry::get('admin');
            $admin = $adminTable->newEntity();

            $admin->username = $username;
            $admin->password = $password;
            $admin->email = $email;

            $adminTable->save($admin);

            $this -> out('Admin created successfully');
        }
        else{
            $this -> out('Wrong Data Entered. Try again.');

        }

    }

}
