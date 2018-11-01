<?php
namespace Inwebo\Component\IpStack\Model;

/**
 * Class IpStack
 */
class IpStack
{
    const END_POINT_V1 = 'https://api.ipstack.com/';
    const END_POINT    = self::END_POINT_V1;

    const SUPPORTED_LANGUAGE = [
        'en' => 'en',
        'de' => 'de',
        'es' => 'es',
        'fr' => 'fr',
        'ja' => 'ja',
        'pt' => 'pt',
        'br' => 'br',
        'ru' => 'ru',
        'zh' => 'zh',
    ];

    const SUPPORTED_OUTPUT = [
        'json' => 'json',
        'xml'  => 'xml',
    ];

    /**
     * @see https://ipstack.com/product
     */
    const MAX_MONTHLY_REQUEST_LIMIT_FREE       = 10000;
    const MAX_MONTHLY_REQUEST_LIMIT_BASIC      = 50000;
    const MAX_MONTHLY_REQUEST_LIMIT_PRO        = 500000;
    const MAX_MONTHLY_REQUEST_LIMIT_PRO_PLUS   = 2000000;

    /**
     * To Override
     */
    const MAX_MONTHLY_REQUEST_LIMIT_CUSTOM     = null;
}