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
];
```

replacing empty strings with your information

Run `php artisan migrate`
Run `php artisan db:seed`