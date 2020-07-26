Web rental laptop dengan halaman customer dan admin.

1. Halaman Katalog
![katalog](https://user-images.githubusercontent.com/57498198/88464106-4859d900-cee2-11ea-9bed-ac1672afe766.jpg)

2. Halaman Detail
![detsi](https://user-images.githubusercontent.com/57498198/88464107-50197d80-cee2-11ea-8877-9ebaca6c6b9c.jpg)

3. Halaman Keranjang
![cart](https://user-images.githubusercontent.com/57498198/88464109-560f5e80-cee2-11ea-96f7-bbb0ce76a48b.jpg)

4. Halaman Keranjang responsive

![cart responsive](https://user-images.githubusercontent.com/57498198/88464111-60315d00-cee2-11ea-8221-6ec2819932c2.jpg)

5. Halaman untuk admin
![admin](https://user-images.githubusercontent.com/57498198/88464114-658ea780-cee2-11ea-9eb0-d2dd9f0220af.jpg)



# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible, and secure. 
More information can be found at the [official site](http://codeigniter.com).

This repository holds the distributable version of the framework,
including the user guide. It has been built from the 
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/). 


## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!
The user guide updating and deployment is a bit awkward at the moment, but we are working on it!

## Repository Management

We use Github issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script. 
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing.md) section in the development repository.

## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
=======
