<?php

namespace brnc\Contract\Http\Message;

/**
 * subset of Psr\Http\Message\MessageInterface
 */
interface CommonHeadInterface extends HeadersInterface
{
    /**
     * @param string $version
     *
     * @return static
     */
    public function withProtocolVersion($version);
}
