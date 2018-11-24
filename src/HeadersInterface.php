<?php

namespace brnc\Contract\Http\Message;

/**
 * subset of Psr\Http\Message\MessageInterface
 */
interface HeadersInterface extends ReadHeadersInterface
{
    /**
     * @param string          $name
     * @param string|string[] $value
     *
     * @return static
     */
    public function withHeader($name, $value);

    /**
     * @param string          $name
     * @param string|string[] $value
     *
     * @return static
     */
    public function withAddedHeader($name, $value);

    /**
     * @param string $name
     *
     * @return static
     */
    public function withoutHeader($name);
}
