<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request)
    {
        $payload = $request->validated();

        Notification::route('mail', config('app.admin_mail'))
            ->notify(new ContactNotification($payload));
    }
}
