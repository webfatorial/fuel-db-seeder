<?php
/**
 * Fuel DB Seeder
 *
 * @package    db-seeder
 * @author     webfatorial
 * @link       https://github.com/webfatorial/fuel-db-seeder
 */

namespace Fuel\Tasks;

class Seed
{
    /**
     * Executes the Seeder classes that populates the database
     * 
     * Reads the calling order of seed classes, and call the 
     * static method ::seed, of each class
     *
     * Usage (from command line):
     * php oil r seed
     *
     * @return string
     */
    public function run($args = null)
    {
        echo "\n===========================================";
        echo "\nSeeding Database";
        echo "\n-------------------------------------------";

        \Config::load('db-seeder', true);
        $classes = \Config::get('db-seeder.order', false);

        foreach ($classes as $class) {
            call_user_func('\\Seeds\\' . $class . '::seed');
        }

        echo "\n\nSeeding finished!\n";
    }
}
