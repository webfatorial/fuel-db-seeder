<?php
// Required namespace
namespace Seeds;

class PageSeeder
{
    // Required static method
    public static function seed()
    {
        // Prints this message on terminal
        echo "\n\n";
        echo "\nSeeding Pages:";
        echo "\n------------------------";

        // Call separated methods for organization
        self::addHome();
        self::addInstitutional();
    }

    public static function addHome()
    {
        // Adds the page, using ORM Model defined for the project:
        try {
            
            $page = \Model_Page::forge(array(
                'title' => 'Home',
                'content' => 'home',
            ));
            $page->save();

            // Prints this message on terminal
            echo "\nhome";

        } catch (\Exception $e) {
            
            // In case of error, prints the message on terminal,
            // You can implement any error handling you need
            echo "\nError saving the home page:";
            echo "\n" . $e->getMessage(). "\n";

        }
    }

    public static function addInstitutional()
    {
        try {

            $page = \Model_Page::forge(array(
                'title' => 'Institutional',
                'content' => 'institutional',
            ));
            $page->save();

            echo "\ninstitutional";

        } catch (\Exception $e) {

            echo "\nError saving the home page:";
            echo "\n" . $e->getMessage(). "\n";
            
        }
    }
}
