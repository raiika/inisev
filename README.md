## Subscribing
```
POST - /api/subscribe
Data - {
	email: 'your@email.address'
	domain: 'somethingyouwant.local' (optional, default current domain)
}
```  
Use insomnia or any API to subscribe

## Triggering mail queue
```
GET - /generate
Query - {
	domain: 'somethingyouwant.local' (optional, default current domain)
}

```  
Visit above url to generate a new post and will blast anything who subscribe to the given domain

## Queue the job
```
php artisan queue:work
```  
Remember to run the above command to make the queue work

## Checking mail
Use mailtrap.io to check for mockup smtp
```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=<your-username>
MAIL_PASSWORD=<you-password>
MAIL_ENCRYPTION=tls
```
or use MAILER log
```
MAIL_MAILER=log
```
and check the email in
```
/storage/logs/laravel.log
```