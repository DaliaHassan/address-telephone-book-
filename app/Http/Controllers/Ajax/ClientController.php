<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ClientRepository;
use Datatables;


class ClientController extends Controller
{
    public function __construct(ClientRepository $clients)
    {
        $this->clients = $clients;
    }

    public function index(Request $request)
    {
        return Datatables::of($this->clients->getAjaxIndex())


            ->addColumn('edit', function ($row) {
                return route('dashboard.clients.edit', $row->id);
            })

            ->addColumn('delete', function ($row) {
                return route('dashboard.clients.destroy', $row->id);
            })

            ->addColumn('show', function ($row) {
                return route('dashboard.clients.show', $row->id);
            })

            ->make(true);
    }
}
