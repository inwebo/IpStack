<?php

namespace Inwebo\Component\IpStack\Model\Decorators;

use Inwebo\Component\IpStack\Model\Connection;
use Inwebo\Component\IpStack\Model\Currency;
use Inwebo\Component\IpStack\Model\Language;
use Inwebo\Component\IpStack\Model\Languages;
use Inwebo\Component\IpStack\Model\Location;
use Inwebo\Component\IpStack\Model\Response;
use Inwebo\Component\IpStack\Model\ResponseInterface;
use Inwebo\Component\IpStack\Model\Security;
use Inwebo\Component\IpStack\Model\TimeZone;

class IpStackToResponse implements IpStackDecoratorInterface
{
    /**
     * @param string $json
     * @return Response|ResponseInterface
     * @throws \Exception
     */
    public function convert(string $json)
    {
        try {
            $responseInterface = new Response();
            $jsonDecode = json_decode($json);

            $responseInterface->setIp($jsonDecode->ip);
            $responseInterface->setType($jsonDecode->type);
            $responseInterface->setContinentCode($jsonDecode->continent_code);
            $responseInterface->setContinentName($jsonDecode->continent_name);
            $responseInterface->setRegionCode($jsonDecode->region_code);
            $responseInterface->setRegionName($jsonDecode->region_name);
            $responseInterface->setCity($jsonDecode->city);
            $responseInterface->setZip($jsonDecode->zip);
            $responseInterface->setLatitude($jsonDecode->latitude);
            $responseInterface->setLongitude($jsonDecode->longitude);

            $location = new Location();
            $location->setGeonameId($jsonDecode->location->geoname_id);
            $location->setCapital($jsonDecode->location->capital);
            $location->setCountryFlag($jsonDecode->location->country_flag);
            $location->setCountryFlagEmoji($jsonDecode->location->country_flag_emoji);
            $location->setCountryFlagEmojiUnicode($jsonDecode->location->country_flag_emoji_unicode);
            $location->setCallingCode($jsonDecode->location->calling_code);
            $location->setIsEu($jsonDecode->location->is_eu);

            $jsonLanguages = $jsonDecode->languages;

            $languages = new Languages();

            foreach ($jsonLanguages as $jsonLanguage)
            {
                $language = new Language();
                $language->setCode($jsonLanguage->code);
                $language->setName($jsonLanguage->name);
                $language->setNative($jsonLanguage->native);

                $languages->addLanguage($language);
            }

            $responseInterface->setLocation($location);

            if (!is_null($jsonDecode->time_zone)) {
                $timeZone = new TimeZone();

                $timeZone->setId($jsonDecode->time_zone->id);
                $timeZone->setCurrentTime($jsonDecode->time_zone->current_time);
                $timeZone->setGmtOffset($jsonDecode->time_zone->gmt_offset);
                $timeZone->setCode($jsonDecode->time_zone->code);
                $timeZone->setIsDayLightSaving($jsonDecode->time_zone->is_daylight_saving);

                $responseInterface->setTimeZone($timeZone);
            }

            if (!is_null($jsonDecode->currency)) {
                $currency = new Currency();
                $currency->setCode($jsonDecode->currency->code);
                $currency->setName($jsonDecode->currency->name);
                $currency->setPlural($jsonDecode->currency->plural);
                $currency->setSymbol($jsonDecode->currency->symbol);
                $currency->setSymbolNative($jsonDecode->currency->symbol_native);

                $responseInterface->setCurrency($currency);
            }

            if (!is_null($jsonDecode->connection)) {
                $connection = new Connection();
                $connection->setAsn($jsonDecode->connection->asn);
                $connection->setIsp($jsonDecode->connection->isp);

                $responseInterface->setConnection($connection);
            }

            if (!is_null($jsonDecode->connection)) {
                $connection = new Connection();
                $connection->setAsn($jsonDecode->connection->asn);
                $connection->setIsp($jsonDecode->connection->isp);

                $responseInterface->setConnection($connection);
            }

            if (!is_null($jsonDecode->security)) {
                $security = new Security();
                $security->setIsProxy($jsonDecode->security->is_proxy);
                $security->setProxyType($jsonDecode->security->is_proxy);
                $security->setIsCrawler($jsonDecode->security->is_crawler);
                $security->setCrawlerType($jsonDecode->security->crawler_type);
                $security->setIsTor($jsonDecode->security->is_tor);
                $security->setThreatLevel($jsonDecode->security->threat_level);
                $security->setThreatTypes($jsonDecode->security->threat_types);

                $responseInterface->setSecurity($security);
            }


            return $responseInterface;

        } catch (\Exception $e) {
            throw $e;
        }
    }
}