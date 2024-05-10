<?php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Mail\PostCreatedMail;
use App\Models\Subscriber;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailNotification
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
    public function handle(PostCreated $event): void
    {
        Subscriber::whereDomain($event->post->domain)->get()->each(function ($subscriber) use ($event) {
            Mail::to($subscriber->email)
                ->queue(new PostCreatedMail($event->post));
        });
    }
}
