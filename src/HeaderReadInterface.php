<?php

namespace brnc\Contract\Http\Message;

/**
 * @deprecated use ReadHeadersInterface  TODO remove
 *
 * subset of Psr\Http\Message\MessageInterface
 */
interface HeaderReadInterface
{
    /**
     * @return array|\string[][]
     */
    public function getHeaders();

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasHeader($name);

    /**
     * @param string $name
     *
     * @return array|string[]
     */
    public function getHeader($name);

    /**
     * @param string $name
     *
     * @return string
     */
    public function getHeaderLine($name);
}
