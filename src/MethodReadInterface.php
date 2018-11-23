<?php

namespace brnc\Contract\Http\Message;

/**
 * subset of Psr\Http\Message\RequestInterface
 */
interface MethodReadInterface
{
    /** @return string */
    public function getMethod();
}
