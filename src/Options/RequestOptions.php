<?php
namespace DjThossi\SmokeTestingPhp\Options;

use DjThossi\SmokeTestingPhp\ValueObject\BasicAuth;
use DjThossi\SmokeTestingPhp\ValueObject\FollowRedirect;
use DjThossi\SmokeTestingPhp\ValueObject\RequestTimeout;
use DjThossi\SmokeTestingPhp\ValueObject\Url;

class RequestOptions
{
    /**
     * @var Url
     */
    private $url;

    /**
     * @var RequestTimeout
     */
    private $requestTimeout;

    /**
     * @var FollowRedirect
     */
    private $followRedirect;

    /**
     * @var BasicAuth|null
     */
    private $basicAuth;

    /**
     * @param $url
     * @param RequestTimeout $requestTimeout
     * @param FollowRedirect $followRedirect
     * @param BasicAuth|null $basicAuth
     */
    public function __construct(
        Url $url,
        RequestTimeout $requestTimeout,
        FollowRedirect $followRedirect,
        BasicAuth $basicAuth = null
    ) {
        $this->url = $url;
        $this->requestTimeout = $requestTimeout;
        $this->followRedirect = $followRedirect;
        $this->basicAuth = $basicAuth;
    }

    /**
     * @return Url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return RequestTimeout
     */
    public function getRequestTimeout()
    {
        return $this->requestTimeout;
    }

    /**
     * @return FollowRedirect
     */
    public function getFollowRedirect()
    {
        return $this->followRedirect;
    }

    /**
     * @return BasicAuth|null
     */
    public function getBasicAuth()
    {
        return $this->basicAuth;
    }

    /**
     * @return bool
     */
    public function needsBasicAuth()
    {
        return $this->basicAuth !== null;
    }
}
