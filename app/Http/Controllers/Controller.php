<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function clean($string)
    {

        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

        return str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
    }

    function slug($string)
    {
        $string = strtolower(str_replace(' ', '_', $string)); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '-', $string); // Removes special chars.
    }
}
