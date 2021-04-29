<?php

namespace App\Listeners;

use App\Models\UsuarioLogin;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Carbon\Carbon;

class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        UsuarioLogin::create([
            'usuario_id' => $event->user->id,
            'IP' => request()->getClientIP(),
            'data_hora_login' => Carbon::now(),
        ]);
    }
}
