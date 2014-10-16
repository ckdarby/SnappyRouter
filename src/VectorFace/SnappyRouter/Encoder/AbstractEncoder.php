<?php

namespace VectorFace\SnappyRouter\Encoder;

use VectorFace\SnappyRouter\Response\Response;

/**
 * An abstract base class for all encoders. Extend this class to implement a
 * custom encoder.
 * @copyright Copyright (c) 2014, VectorFace, Inc.
 * @author Dan Bruce <dbruce@vectorface.com>
 */
abstract class AbstractEncoder implements EncoderInterface
{
    // an array of options for the encoder
    private $options;

    /**
     * Constructor for the encoder.
     * @param array $options An array of encoder options.
     */
    public function __construct($options = array())
    {
        $this->options = (array)$options;
    }

    /**
     * @param Response $response The response to be encoded.
     * @return (string) Returns the response encoded as a string.
     */
    abstract public function encode(Response $response);
}