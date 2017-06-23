<?php

namespace App\Listeners;

use App\Events\Assign;
use Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail
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
     * @param  Assign $event
     * @return void
     */
    public function handle(Assign $event)
    {
        $data = $event->data;
        Mail::send('mail', ['data' => $data], function ($m) use($data) {
            $m->to($data['email'], $data['name'])
                ->subject('Task Assignment');
        });
    }
}
