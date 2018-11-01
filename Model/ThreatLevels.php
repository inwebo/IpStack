<?php

namespace Inwebo\Component\IpStack\Model;

/**
 * Class ThreatLevels
 */
class ThreatLevels
{
    /** @var int Low Risk */
    const LOW       = 0;
    /** @var int Medium Risk */
    const MEDIUM    = 1;
    /** @var int High Risk */
    const HIGH      = 2;
    /** @var int Unknown Risk, custom */
    const UNKNOWN   = 3;

    /**
     * @param int $levels From Inwebo\Component\IpStack\Model::
     *
     * @return string
     */
    public static function get(int $levels) {
        switch ($levels) {
            case 0:
                $threatLevel = 'Low Risk';
                break;

            case 1:
                $threatLevel = 'Medium Risk';
                break;

            case 2:
                $threatLevel = 'High Risk';
                break;

            default:
                $threatLevel = 'Unknown threat level';
                break;
        }

        return $threatLevel;
    }
}