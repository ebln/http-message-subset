<?php

namespace brnc\Contract\Http\Message;

/**
 * subset of Psr\Http\Message\MessageInterface
 */
interface ReadCommonHeadInterface extends ReadHeadersInterface
{
    /** @return string */
    public function getProtocolVersion();
}
