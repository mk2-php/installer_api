Mk2 - Installer (API Version)
====

MVC compliant PHP framework "Mk2" dedicated installer.  
This installer is the best customized version for the API.

## # Description

This is a dedicated installer when using Mk2.  
You can prepare the framework library set and necessary source files by executing the following command on the terminal where Composer is installed.

```
composer create-project mk2/installer_api
```

## # Mk2 VS. Other PHP frameworks

-  Operates at high speed.
-  Simple structure.
-  Complies with MVC conventions.
-  Equipped with OR mapping (OR mapper requires separate "Mk2-ORM" package installation).
-  Equipped with module function.
-  There is also a reference [https://www.mk2-php.com/](http://www.mk2-php.com).
-  Made in Japan

## # Requirement

The following packages will be installed at the same time with the following command.

```
composer create-project mk2/installer_api
```

- [mk2/libraries](http://github.com/mk2-php/libraries)
- [mk2/orm](http://github.com/mk2-php/orm)
- [mk2/validator](http://github.com/mk2-php/validator)
- [mk2/backpack_log](http://github.com/mk2-php/backpack_log)
- [mk2/backpack_encrypt](http://github.com/mk2-php/backpack_encrypt)
- [mk2/backpack_encryptrsa](http://github.com/mk2-php/backpack_encryptrsa)
- [mk2/backpack_cache](http://github.com/mk2-php/backpack_cache)
- [mk2/backpack_session](http://github.com/mk2-php/backpack_session)
- [mk2/backpack_cookie](http://github.com/mk2-php/backpack_cookie)
- [mk2/backpack_token](http://github.com/mk2-php/backpack_token)
- [mk2/backpack_auth](http://github.com/mk2-php/backpack_auth)

## # Usage

The documentation is available below.  
Please refer to that.

[https://www.mk2-php.com/](http://www.mk2-php.com)

## # Install

If you need to install it separately,  
Install by executing the following command on the terminal where Composer is installed.

```
composer require mk2/installer_api
```

* Since ``config/database.php`` is not attached at the initial stage,  
Copy the ``config/database.php.default`` file and install it.

## # Contribution

Currently under consideration.

## # Licence

- [MIT](https://github.com/tcnksm/tool/blob/master/LICENCE)
- [Sakaguchiya Co. Ltd](https://www.teastalk.jp/)

## # Author

[Nakajima Satoru](https://github.com/mk2-php)
