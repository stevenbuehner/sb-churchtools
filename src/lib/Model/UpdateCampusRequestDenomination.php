<?php
/**
 * UpdateCampusRequestDenomination
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChurchTools REST API
 *
 * The ChurchTools REST API is the best entry point for developers to access ChurchTools. <br><br> **Authentication:** You need to be authorized to use some endpoints. Those endpoints are marked by a gray lock symbol. If you view the documentation, while you are logged into ChurchTools, all requests are already authorized. If you want to authorized a request, you need to provide a `Login Token` as `Authorization` header in the format `Authorization: Login<token>` or send a valid cookie. You can use the green \"Authorize\" dialog to enter those details and see how a request would look like in detail. <br><br> **Missing Endpoints:** Not all features are yet available by our new REST API. This documentation will grow in the future. We are working hard to add new endpoints with every ChurchTools version. The documentation will always show only those endpoints you can use with your ChurchTools installation.
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace StevenBuehner\ChurchTools\Model;
use \StevenBuehner\ChurchTools\ObjectSerializer;

/**
 * UpdateCampusRequestDenomination Class Doc Comment
 *
 * @category Class
 * @description Either exact string or denomination object with name property
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateCampusRequestDenomination
{
    /**
     * Possible values of this enum
     */
    public const NUMBER_NONE = 'denomination.none';

    public const NUMBER_PROTESTANT = 'denomination.protestant';

    public const NUMBER_FREE_EVANGELICAL = 'denomination.free.evangelical';

    public const NUMBER_CATHOLIC = 'denomination.catholic';

    public const NUMBER_ECUMENICAL = 'denomination.ecumenical';

    public const NUMBER_ORTHODOX = 'denomination.orthodox';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_NONE,
            self::NUMBER_PROTESTANT,
            self::NUMBER_FREE_EVANGELICAL,
            self::NUMBER_CATHOLIC,
            self::NUMBER_ECUMENICAL,
            self::NUMBER_ORTHODOX
        ];
    }
}


