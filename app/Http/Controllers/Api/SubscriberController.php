<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SubscriberRequest;
use App\Http\Resources\SuccessResource;
use App\Models\Subscriber;
use App\Services\Domain;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(SubscriberRequest $request, Domain $domain)
    {
        $subscriber = new Subscriber($request->input());
        $subscriber->domain = $domain->get();
        $subscriber->save();

        return new SuccessResource();
    }
}
