<?php

namespace brnc\Contract\Http\Message;

/**
 * subset of Psr\Http\Message\RequestInterface
 */
interface MinimalRequestHeaderReadInterface extends HeaderReadInterface
{
    /** @return string */
    public function getMethod();
}
