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

    const MAX_MONTHLY_REQUEST_LIMIT = 10000;
}