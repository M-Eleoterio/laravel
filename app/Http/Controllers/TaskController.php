<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TaskController extends Controller
{
    public function test() {
        # pega o 10º usuario
        $user = User::find(10);
        # retorna todas as tasks que o mesmo possui
        return $user->tasks;
    }
}
