<?php

namespace App\Http\Controllers;

use App\Models\Webhook;
use Illuminate\Http\Request;

class WebookController extends Controller
{
    function getLastWebhookRecorde()
    {
        $webhook = Webhook::orderBy('id', 'desc')->first();
        $webhook = stripslashes($webhook->payload);
        if ($webhook) {
            return response(json_decode($webhook, true));
        } else {
            return response()->json(['error' => 'Error happen in the server'], 500);
        }
    }
}
