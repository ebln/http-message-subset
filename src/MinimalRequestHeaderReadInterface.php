<?php

namespace brnc\Contract\Http\Message;

/**
 * @deprecated use ReadMinimalRequestHeadInterface  TODO remove
 *
 * subset of Psr\Http\Message\RequestInterface
 */
interface MinimalRequestHeaderReadInterface extends HeaderReadInterface
{
    /** @return string */
    public function getMethod();
}
