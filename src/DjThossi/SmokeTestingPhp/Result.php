<?php
namespace DjThossi\SmokeTestingPhp;

use DjThossi\SmokeTestingPhp\ValueObject\Url;

interface Result
{
    /**
     * @return Url
     */
    public function getUrl();

    /**
     * TODO find better name.
     *
     * @return string
     */
    public function asFailureMessage();

    /**
     * @return int
     */
    public function getTimeToFirstByteInMilliseconds();

    /**
     * @return string|null
     */
    public function getBody();
}
