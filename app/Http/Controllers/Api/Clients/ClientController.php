<?php

namespace App\Http\Controllers\Api\Clients;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Passport\ClientRepository;
use Laravel\Passport\Passport;

class ClientController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $clientRepository;

    /**
     * ClientController constructor.
     */
    public function __construct()
    {
        $this->clientRepository = new ClientRepository();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function createClient(Request $request)
    {
        $user = User::find(auth()->guard('api')->user()->id);


        $client = $this->clientRepository->create(
            $user->id, $request->get('client_name'), ''
        );

        return response()->json([
            'data' => [
                'id' => $client->id,
                'secret' => $client->secret
            ]
        ]);
    }
}
