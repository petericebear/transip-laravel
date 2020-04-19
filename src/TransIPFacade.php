<?php

namespace IntVent\TransIPLaravel;

class TransIPFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'transip';
    }
}