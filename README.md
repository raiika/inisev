## Subscribing
POST - /api/subscribe
with - {
	email: 'your@email.address'
}

to subscribe

## Triggering mail queue
visit /generate?domain=somethingyouwant
this is to generate a new post and will blast anything who subscribe to the given domain

## Queue the job
php artisan queue:work
