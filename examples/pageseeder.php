<?php
namespace Seeds;

class PageSeeder
{
    public static function seed()
    {
        echo "\n\n";
        echo "\nSeeding Pages:";
        echo "\n------------------------";

        self::addHome();
        self::addInstitutional();
    }

    public static function addHome()
    {
        try {
            $page = \Model_Page::forge(array(
                'title' => 'Home',
                'content' => 'home',
            ));
            $page->save();

            echo "\nhome";
        } catch (\Exception $e) {
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
