<?php

namespace JamesForsyth\UKBusiness\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array lookup(string $companyNumber)
 * @method static array sanitize(string $query)
 * @method static array officers(string $companyNumber)
 *
 * @see \JamesForsyth\UKBusiness\UKBusinessClient
 */
class UKBusiness extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'uk-business';
    }
}