<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CommandController extends Controller
{
    public function migrateFreshSeed()
    {

        Artisan::call('migrate:fresh', ['--seed' => true]);

        // Получаем вывод команды
        $output = Artisan::output();

        return response()->json([
            'message' => 'Команда migrate:fresh --seed выполнена успешно',
            'output' => $output,
        ]);

    }
}
