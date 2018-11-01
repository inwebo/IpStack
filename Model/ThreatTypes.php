<?php

namespace Inwebo\Component\IpStack\Model;

/**
 * Class ThreatTypes
 */
class ThreatTypes
{
    /** @var int  */
    const TOR                = 0;
    /** @var int  */
    const FAKE_CRAWLER       = 1;
    /** @var int  */
    const WEB_SCRAPER        = 2;
    /** @var int  */
    const ATTACK_SOURCE      = 3;
    /** @var int  */
    const ATTACK_SOURCE_HTTP = 4;
    /** @var int  */
    const ATTACK_SOURCE_MAIL = 5;
    /** @var int  */
    const ATTACK_SOURCE_SSH  = 6;

    /**
     * @param int $threat From Inwebo\Component\IpStack\Model\ThreatTypes const
     * @return string
     */
    public static function get(int $threat) {

        switch ($threat) {
            case 0:
                $threatType = 'Tor System';
                break;

            case 1:
                $threatType = 'Fake Crawler';
                break;

            case 2:
                $threatType = 'Web Scraper';
                break;

            case 3:
                $threatType = 'Attack Source identified: HTTP';
                break;

            case 4:
                $threatType = 'Attack Source identified: HTTP';
                break;

            case 5:
                $threatType = 'Attack Source identified: Mail';
                break;

            case 6:
                $threatType = 'Attack Source identified: SSH';
                break;

            default:
                $threatType = 'Unknown threat type';
                break;
        }

        return $threatType;
    }
}