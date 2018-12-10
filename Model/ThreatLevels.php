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
}