## Subscribing
```
POST - /api/subscribe
Data - {
	email: 'your@email.address'
}
```  
Use insomnia or any API to subscribe

## Triggering mail queue
```
somethingyouwant.local/generate?domain=somethingyouwant.local
```  
Visit above url to generate a new post and will blast anything who subscribe to the given domain

## Queue the job
```
php artisan queue:work
```  
Remember to run the above command to make the queue work
