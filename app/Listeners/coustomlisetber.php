<?php

namespace App\Listeners;

use App\Events\customerevent;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class coustomlisetber
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(customerevent $event): void
    {
        //
        $customer = $event->customer;
        $user=  User::create([
            "name"=>$customer->name,
            "email"=>$customer->email,
            "password"=>bcrypt("passw121314"),
            "user_type"=>"customer",
        ]);
        $customer->user_id = $user->id;
        $customer->save();
    }
}
