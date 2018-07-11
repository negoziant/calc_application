<p align="center">
    <h1 align="center">Calc App</h1>
    <br>
</p>

Simple PHP web application made of an input field and three buttons implementing the
following behaviour:
• The input field should only accept positive integers.
• When button 1 is clicked, return the sum of the odd-indexed digits of the input field.
• When button 2 is clicked, return the sum of the even-indexed digits of the input field.
• When button 3 is clicked, sum up all integers up to this number.
• All calculations must take place in the backend

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------


Extract the archive file downloaded from github to
a directory named `basic` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => '<secret random string goes here>',
],
```

You can then access the application through the following URL:

~~~
http://localhost/basic/web/
~~~
