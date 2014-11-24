ChaoCodes.Com CMS
=================
Use 'composer install' to install required dependencies

Create .env.local.php in the root directory of project.
Fill .env.local.php with:

```
<?php

return
[
	'DB_HOST' => '',
	'DB_NAME' => '',
	'DB_USER' => '',
	'DB_PASS' => '',
	'ADMIN_USER' => '',
	'ADMIN_PASS' => '',
	'ENC_KEY' => '32-char random string',
];
```

replacing empty strings with your information. Use .env.php filename if using on production machine.

Run `php artisan migrate`
Run `php artisan db:seed`

After seeding, you may remove choose admin_user and admin_pass from env file.