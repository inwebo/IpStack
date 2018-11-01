<?php

namespace Inwebo\Component\IpStack\Model\Decorators;

use Inwebo\Bundle\IpStackBundle\Model\Decorators\IpStackDecoratorInterface;
use Inwebo\Component\IpStack\Model\Language;
use Inwebo\Component\IpStack\Model\Languages;
use Inwebo\Component\IpStack\Model\Location;
use Inwebo\Component\IpStack\Model\Response;
use Inwebo\Component\IpStack\Model\ResponseInterface;

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

            return $responseInterface;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}