<?php

/**
 * Class Error2
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Error2 extends Controller
{
    /**
     * PAGE: index
     * This method handles the error page that will be shown when a page is not found
     */
    public function index()
    {
        // load views
        require_once APP . 'views/_templates/header.php';
        require_once APP . 'views/error/index.php';
        require_once APP . 'views/_templates/footer.php';
    }
}
