<?php

namespace Cubeta\MtnSmsSy;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cubeta\MtnSmsSy\Skeleton\SkeletonClass
 */
class MtnSmsSyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mtn-sms-sy';
    }
}
