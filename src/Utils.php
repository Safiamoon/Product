<?php

/**
 * Undocumented class
 */
class Utils
{

    /**
     * Performs a redirection to the specified location
     *
     * @param string $location The URL destination
     * @return void
     */
    function redirect(string $location): void
    {
        header('Location: ' . $location);
        die;
    }
}
