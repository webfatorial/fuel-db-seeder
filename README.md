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

Add **fuel-db-seeder** to the always_load => packages, in the config.php:

```
'always_load'  => array(
    'packages'  => array(
        // 'orm',
        // 'auth',
        // 'email',
        // 'parser',
        'fuel-db-seeder',
    ),
),
```

Copy **config/db-seeder.php** to **app/config/db-seeder.php**. In this file, you should place order call classes, which will be called to populate the database.

Usage
---

In your project, you'll need to create the following structure:

```
/fuel
    /app
        /classes
            /seeds
```

On folder **/seeds**, you'll create the seed classes. An example of that class can be found in [**/examples/pageseeder.php**](https://github.com/webfatorial/fuel-db-seeder/blob/develop/examples/pageseeder.php).

With these classes created, and properly set in the **app/config/db-seeder.php**, you should run the command:

```
php oil r seed
```

After that, your database will be populated with data you set in the seeds classes.

Requirements of seeding classes
---

1. Must be in **/fuel/app/classes/seeds**
2. Must be in the namespace **Seed**
3. Must have a static method called **seed**

All such obligations can be found at [**/examples/pageseeder.php**](https://github.com/webfatorial/fuel-db-seeder/blob/develop/examples/pageseeder.php).

