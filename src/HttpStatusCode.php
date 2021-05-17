<?php declare(strict_types=1);

namespace Gepanel;

interface HttpStatusCode {

    public const SUCCESS = 200;
    public const BAD_REQUEST = 400;
    public const UNAUTHORIZED = 401;
    public const UNSUPPORTED_MEDIA_TYPE = 415;

}