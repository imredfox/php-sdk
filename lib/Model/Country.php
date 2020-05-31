<?php
/**
 * Country
 *
 * PHP version 5
 *
 * @category Class
 * @package  Boostapp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Boost App Store API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@boostapp.store
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Boostapp\Model;
use \Boostapp\ObjectSerializer;

/**
 * Country Class Doc Comment
 *
 * @category Class
 * @description Country list.
 * 1: US
 * 2: TR
 * 3: RU
 * 4: IN
 * 5: GB
 * 6: FR
 * 7: AU
 * 8: JP
 * 9: KR
 * 10: BR
 * 11: DE
 * 12: CA
 * 13: ES
 * 14: PT
 * 15: IT
 * 16: NG
 * @package  Boostapp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Country
{
    /**
     * Possible values of this enum
     */
    const US = 1;
    const TR = 2;
    const RU = 3;
    const IN = 4;
    const GB = 5;
    const FR = 6;
    const AU = 7;
    const JP = 8;
    const KR = 9;
    const BR = 10;
    const DE = 11;
    const CA = 12;
    const ES = 13;
    const PT = 14;
    const IT = 15;
    const NG = 16;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::US,
            self::TR,
            self::RU,
            self::IN,
            self::GB,
            self::FR,
            self::AU,
            self::JP,
            self::KR,
            self::BR,
            self::DE,
            self::CA,
            self::ES,
            self::PT,
            self::IT,
            self::NG,
        ];
    }
}


