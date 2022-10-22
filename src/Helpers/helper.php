<?php

use Anam\DatatableFlavour\Datatable;

if (!function_exists('datatable')) {
    function datatable(): Datatable
    {
        return new Datatable();
    }
}
