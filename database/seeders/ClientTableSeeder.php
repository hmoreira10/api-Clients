<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $controller = app()->make('App\Http\Controllers\ClientController');
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 1', 'document_number' => '0001']), 'company' => Company::find(3)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 2', 'document_number' => '0002']), 'company' => Company::find(3)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 3', 'document_number' => '0003']), 'company' => Company::find(3)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 4', 'document_number' => '0004']), 'company' => Company::find(3)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 5', 'document_number' => '0005']), 'company' => Company::find(3)]);

        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 6', 'document_number' => '0006']), 'company' => Company::find(4)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 7', 'document_number' => '0007']), 'company' => Company::find(4)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 8', 'document_number' => '0008']), 'company' => Company::find(4)]);

        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 9', 'document_number' => '0009']), 'company' => Company::find(5)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 10', 'document_number' => '0010']), 'company' => Company::find(5)]);

        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 11', 'document_number' => '0011']), 'company' => Company::find(6)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 12', 'document_number' => '0012']), 'company' => Company::find(6)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 13', 'document_number' => '0013']), 'company' => Company::find(6)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 14', 'document_number' => '0014']), 'company' => Company::find(6)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 15', 'document_number' => '0015']), 'company' => Company::find(6)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 16', 'document_number' => '0016']), 'company' => Company::find(6)]);

        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 17', 'document_number' => '0017']), 'company' => Company::find(7)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 18', 'document_number' => '0018']), 'company' => Company::find(7)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 19', 'document_number' => '0019']), 'company' => Company::find(7)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 20', 'document_number' => '0020']), 'company' => Company::find(7)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 21', 'document_number' => '0021']), 'company' => Company::find(7)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 22', 'document_number' => '0022']), 'company' => Company::find(7)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 23', 'document_number' => '0023']), 'company' => Company::find(7)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 24', 'document_number' => '0024']), 'company' => Company::find(7)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 25', 'document_number' => '0025']), 'company' => Company::find(7)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 26', 'document_number' => '0026']), 'company' => Company::find(7)]);

        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 27', 'document_number' => '0027']), 'company' => Company::find(8)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 28', 'document_number' => '0028']), 'company' => Company::find(8)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 29', 'document_number' => '0029']), 'company' => Company::find(8)]);
        app()->call([$controller, 'store'], ['request' => new \Illuminate\Http\Request(['name' => 'Client 30', 'document_number' => '0030']), 'company' => Company::find(8)]);
    }
}
