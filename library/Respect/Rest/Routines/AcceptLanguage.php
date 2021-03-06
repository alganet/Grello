<?php

namespace Respect\Rest\Routines;

/** Handles Language content negotiation */
    class AcceptLanguage extends AbstractAccept
{
    const ACCEPT_HEADER = 'HTTP_ACCEPT_LANGUAGE';

    protected function compareItens($requested, $provided)
    {
        $requested = preg_replace('/^x\-/', '', $requested);
        $provided = preg_replace('/^x\-/', '', $provided);

        if ($requested == $provided)
            return true;

        if (stripos($requested, '-') || !stripos($provided, '-'))
            return false;

        list($providedA, ) = explode('-', $provided);

        if ($requested === $providedA)
            return true;

        return false;
    }

}
