Fuel DB Seeder
===

Package for Database seeding in [FuelPHP](http://fuelphp.com/).

This package adds the functionality to seed the database with data using seed classes, that could call the Models defined for your project.


Install
---

You need to add **webfatorial** in your list of sources defined in **fuel/core/config/package.php**, file that should be copied to the **fuel/app/config** folder, explained in more datails in [FuelPHP Oil Packages  Docs](http://fuelphp.com/docs/packages/oil/package.html).

On array item **sources**, add **github.com/webfatorial**:

```
'sources' => array(
    'github.com/fuel-packages',
    'github.com/webfatorial',
),
```
After that, you can run the oil install command:

```
php oil package install fuel-db-seeder
```

Or download it manually and place in you packages directory.


Configuration
---

Add **db-seeder** to the always_load => packages, in the config.php

Copy **config/db-seeder.php** to **app/config/db-seeder.php**.


```
/fuel
    /app
        /classes
            /seeds # seed classes
                .
                .
                .
```