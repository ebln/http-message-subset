<?php

namespace brnc\Contract\Http\Message;

/**
 * subset of Psr\Http\Message\RequestInterface
 *
 * the MinimalRequestHead covers method, HTTP-version, headers but not the request-target
 */
interface ReadMinimalRequestHeadInterface extends ReadCommonHeadInterface
{
    /** @return string */
    public function getMethod();
}
