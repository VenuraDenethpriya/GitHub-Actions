<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function getAllUsers()
   {
   return response()-> json([
    'users' => [
        [
        'id' => 1,
                'name' => 'John Doe',
                'email' => 'tess@gmai.com',
                'role' => 'admin'
        ],
        [
                'id' => 2,
                        'name' => 'John Shelby',
                        'email' => 'tess@gmai.com',
                        'role' => 'admin'
                ],
                [
                        'id' => 3,
                                'name' => 'John Sale',
                                'email' => 'tess@gmai.com',
                                'role' => 'admin'
                        ],
                        [
                                'id' => 4,
                                        'name' => 'John Doe',
                                        'email' => 'tess@gmai.com',
                                        'role' => 'admin'
                                ],
    ]
   ])
   }
}
