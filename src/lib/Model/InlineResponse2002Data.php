<?php
/**
 * InlineResponse2002Data
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace StevenBuehner\ChurchTools\Model;

use \ArrayAccess;
use \StevenBuehner\ChurchTools\ObjectSerializer;

/**
 * InlineResponse2002Data Class Doc Comment
 *
 * @category Class
 * @description Profiles are representing campuses and the church itself.
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2002Data implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_2_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'guid' => 'string',
        'profile_type' => 'string',
        'name' => 'string',
        'name_translated' => 'string',
        'short_name' => 'string',
        'shorty' => 'string',
        'slug' => 'string',
        'finder_url' => 'string',
        'sort_key' => 'float',
        'is_published' => 'bool',
        'description' => 'string',
        'association' => 'object',
        'website' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'denomination' => '\StevenBuehner\ChurchTools\Model\InlineResponse2002Denomination',
        'address' => '\StevenBuehner\ChurchTools\Model\InlineResponse2002Address',
        'groups' => '\StevenBuehner\ChurchTools\Model\InlineResponse2002Groups[]',
        'logo' => '\StevenBuehner\ChurchTools\Model\InlineResponse2002Logo',
        'banner' => '\StevenBuehner\ChurchTools\Model\InlineResponse2002Logo',
        'social_media' => '\StevenBuehner\ChurchTools\Model\InlineResponse2002SocialMedia',
        'tags' => 'string[]',
        'services' => '\StevenBuehner\ChurchTools\Model\InlineResponse2002Services[]',
        'visitors' => 'float',
        'service_banner' => 'string',
        'sign_up_group' => '\StevenBuehner\ChurchTools\Model\GroupDomainObject1',
        'gallery' => '\StevenBuehner\ChurchTools\Model\InlineResponse2002Logo[]',
        'team_title' => 'string',
        'team' => '\StevenBuehner\ChurchTools\Model\InlineResponse2002Team[]',
        'meta' => '\StevenBuehner\ChurchTools\Model\Meta'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'guid' => null,
        'profile_type' => null,
        'name' => null,
        'name_translated' => null,
        'short_name' => null,
        'shorty' => null,
        'slug' => null,
        'finder_url' => null,
        'sort_key' => null,
        'is_published' => null,
        'description' => null,
        'association' => null,
        'website' => null,
        'email' => null,
        'phone' => null,
        'denomination' => null,
        'address' => null,
        'groups' => null,
        'logo' => null,
        'banner' => null,
        'social_media' => null,
        'tags' => null,
        'services' => null,
        'visitors' => null,
        'service_banner' => null,
        'sign_up_group' => null,
        'gallery' => null,
        'team_title' => null,
        'team' => null,
        'meta' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'guid' => 'guid',
        'profile_type' => 'profileType',
        'name' => 'name',
        'name_translated' => 'nameTranslated',
        'short_name' => 'shortName',
        'shorty' => 'shorty',
        'slug' => 'slug',
        'finder_url' => 'finderUrl',
        'sort_key' => 'sortKey',
        'is_published' => 'isPublished',
        'description' => 'description',
        'association' => 'association',
        'website' => 'website',
        'email' => 'email',
        'phone' => 'phone',
        'denomination' => 'denomination',
        'address' => 'address',
        'groups' => 'groups',
        'logo' => 'logo',
        'banner' => 'banner',
        'social_media' => 'socialMedia',
        'tags' => 'tags',
        'services' => 'services',
        'visitors' => 'visitors',
        'service_banner' => 'serviceBanner',
        'sign_up_group' => 'signUpGroup',
        'gallery' => 'gallery',
        'team_title' => 'teamTitle',
        'team' => 'team',
        'meta' => 'meta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'guid' => 'setGuid',
        'profile_type' => 'setProfileType',
        'name' => 'setName',
        'name_translated' => 'setNameTranslated',
        'short_name' => 'setShortName',
        'shorty' => 'setShorty',
        'slug' => 'setSlug',
        'finder_url' => 'setFinderUrl',
        'sort_key' => 'setSortKey',
        'is_published' => 'setIsPublished',
        'description' => 'setDescription',
        'association' => 'setAssociation',
        'website' => 'setWebsite',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'denomination' => 'setDenomination',
        'address' => 'setAddress',
        'groups' => 'setGroups',
        'logo' => 'setLogo',
        'banner' => 'setBanner',
        'social_media' => 'setSocialMedia',
        'tags' => 'setTags',
        'services' => 'setServices',
        'visitors' => 'setVisitors',
        'service_banner' => 'setServiceBanner',
        'sign_up_group' => 'setSignUpGroup',
        'gallery' => 'setGallery',
        'team_title' => 'setTeamTitle',
        'team' => 'setTeam',
        'meta' => 'setMeta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'guid' => 'getGuid',
        'profile_type' => 'getProfileType',
        'name' => 'getName',
        'name_translated' => 'getNameTranslated',
        'short_name' => 'getShortName',
        'shorty' => 'getShorty',
        'slug' => 'getSlug',
        'finder_url' => 'getFinderUrl',
        'sort_key' => 'getSortKey',
        'is_published' => 'getIsPublished',
        'description' => 'getDescription',
        'association' => 'getAssociation',
        'website' => 'getWebsite',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'denomination' => 'getDenomination',
        'address' => 'getAddress',
        'groups' => 'getGroups',
        'logo' => 'getLogo',
        'banner' => 'getBanner',
        'social_media' => 'getSocialMedia',
        'tags' => 'getTags',
        'services' => 'getServices',
        'visitors' => 'getVisitors',
        'service_banner' => 'getServiceBanner',
        'sign_up_group' => 'getSignUpGroup',
        'gallery' => 'getGallery',
        'team_title' => 'getTeamTitle',
        'team' => 'getTeam',
        'meta' => 'getMeta'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const PROFILE_TYPE_CHURCH = 'church';
    const PROFILE_TYPE_CAMPUS = 'campus';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProfileTypeAllowableValues()
    {
        return [
            self::PROFILE_TYPE_CHURCH,
            self::PROFILE_TYPE_CAMPUS,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['guid'] = $data['guid'] ?? null;
        $this->container['profile_type'] = $data['profile_type'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['name_translated'] = $data['name_translated'] ?? null;
        $this->container['short_name'] = $data['short_name'] ?? null;
        $this->container['shorty'] = $data['shorty'] ?? null;
        $this->container['slug'] = $data['slug'] ?? null;
        $this->container['finder_url'] = $data['finder_url'] ?? null;
        $this->container['sort_key'] = $data['sort_key'] ?? null;
        $this->container['is_published'] = $data['is_published'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['association'] = $data['association'] ?? null;
        $this->container['website'] = $data['website'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['denomination'] = $data['denomination'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['groups'] = $data['groups'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['banner'] = $data['banner'] ?? null;
        $this->container['social_media'] = $data['social_media'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['services'] = $data['services'] ?? null;
        $this->container['visitors'] = $data['visitors'] ?? null;
        $this->container['service_banner'] = $data['service_banner'] ?? null;
        $this->container['sign_up_group'] = $data['sign_up_group'] ?? null;
        $this->container['gallery'] = $data['gallery'] ?? null;
        $this->container['team_title'] = $data['team_title'] ?? null;
        $this->container['team'] = $data['team'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['guid'] === null) {
            $invalidProperties[] = "'guid' can't be null";
        }
        if ((mb_strlen($this->container['guid']) < 1)) {
            $invalidProperties[] = "invalid value for 'guid', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['profile_type'] === null) {
            $invalidProperties[] = "'profile_type' can't be null";
        }
        $allowedValues = $this->getProfileTypeAllowableValues();
        if (!is_null($this->container['profile_type']) && !in_array($this->container['profile_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'profile_type', must be one of '%s'",
                $this->container['profile_type'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['profile_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'profile_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name_translated'] === null) {
            $invalidProperties[] = "'name_translated' can't be null";
        }
        if ((mb_strlen($this->container['name_translated']) < 1)) {
            $invalidProperties[] = "invalid value for 'name_translated', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['short_name'] === null) {
            $invalidProperties[] = "'short_name' can't be null";
        }
        if ($this->container['shorty'] === null) {
            $invalidProperties[] = "'shorty' can't be null";
        }
        if ((mb_strlen($this->container['shorty']) < 1)) {
            $invalidProperties[] = "invalid value for 'shorty', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
        }
        if ((mb_strlen($this->container['slug']) < 1)) {
            $invalidProperties[] = "invalid value for 'slug', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['finder_url'] === null) {
            $invalidProperties[] = "'finder_url' can't be null";
        }
        if ((mb_strlen($this->container['finder_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'finder_url', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['sort_key'] === null) {
            $invalidProperties[] = "'sort_key' can't be null";
        }
        if ($this->container['is_published'] === null) {
            $invalidProperties[] = "'is_published' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['website'] === null) {
            $invalidProperties[] = "'website' can't be null";
        }
        if ((mb_strlen($this->container['website']) < 1)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) < 1)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ((mb_strlen($this->container['phone']) < 1)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['denomination'] === null) {
            $invalidProperties[] = "'denomination' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['groups'] === null) {
            $invalidProperties[] = "'groups' can't be null";
        }
        if ($this->container['logo'] === null) {
            $invalidProperties[] = "'logo' can't be null";
        }
        if ($this->container['banner'] === null) {
            $invalidProperties[] = "'banner' can't be null";
        }
        if ($this->container['social_media'] === null) {
            $invalidProperties[] = "'social_media' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['services'] === null) {
            $invalidProperties[] = "'services' can't be null";
        }
        if ($this->container['visitors'] === null) {
            $invalidProperties[] = "'visitors' can't be null";
        }
        if ($this->container['service_banner'] === null) {
            $invalidProperties[] = "'service_banner' can't be null";
        }
        if ((mb_strlen($this->container['service_banner']) < 1)) {
            $invalidProperties[] = "invalid value for 'service_banner', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['gallery'] === null) {
            $invalidProperties[] = "'gallery' can't be null";
        }
        if ((count($this->container['gallery']) < 1)) {
            $invalidProperties[] = "invalid value for 'gallery', number of items must be greater than or equal to 1.";
        }

        if ($this->container['team_title'] === null) {
            $invalidProperties[] = "'team_title' can't be null";
        }
        if ((mb_strlen($this->container['team_title']) < 1)) {
            $invalidProperties[] = "invalid value for 'team_title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['team'] === null) {
            $invalidProperties[] = "'team' can't be null";
        }
        if ((count($this->container['team']) < 1)) {
            $invalidProperties[] = "invalid value for 'team', number of items must be greater than or equal to 1.";
        }

        if ($this->container['meta'] === null) {
            $invalidProperties[] = "'meta' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
     * Sets guid
     *
     * @param string $guid guid
     *
     * @return self
     */
    public function setGuid($guid)
    {

        if ((mb_strlen($guid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $guid when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['guid'] = $guid;

        return $this;
    }

    /**
     * Gets profile_type
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->container['profile_type'];
    }

    /**
     * Sets profile_type
     *
     * @param string $profile_type church: Church profile for this installation; campus: one specific campus profile
     *
     * @return self
     */
    public function setProfileType($profile_type)
    {
        $allowedValues = $this->getProfileTypeAllowableValues();
        if (!in_array($profile_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'profile_type', must be one of '%s'",
                    $profile_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if ((mb_strlen($profile_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $profile_type when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['profile_type'] = $profile_type;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_translated
     *
     * @return string
     */
    public function getNameTranslated()
    {
        return $this->container['name_translated'];
    }

    /**
     * Sets name_translated
     *
     * @param string $name_translated name_translated
     *
     * @return self
     */
    public function setNameTranslated($name_translated)
    {

        if ((mb_strlen($name_translated) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name_translated when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['name_translated'] = $name_translated;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string $short_name short_name
     *
     * @return self
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets shorty
     *
     * @return string
     */
    public function getShorty()
    {
        return $this->container['shorty'];
    }

    /**
     * Sets shorty
     *
     * @param string $shorty shorty
     *
     * @return self
     */
    public function setShorty($shorty)
    {

        if ((mb_strlen($shorty) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shorty when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['shorty'] = $shorty;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {

        if ((mb_strlen($slug) < 1)) {
            throw new \InvalidArgumentException('invalid length for $slug when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets finder_url
     *
     * @return string
     */
    public function getFinderUrl()
    {
        return $this->container['finder_url'];
    }

    /**
     * Sets finder_url
     *
     * @param string $finder_url finder_url
     *
     * @return self
     */
    public function setFinderUrl($finder_url)
    {

        if ((mb_strlen($finder_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $finder_url when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['finder_url'] = $finder_url;

        return $this;
    }

    /**
     * Gets sort_key
     *
     * @return float
     */
    public function getSortKey()
    {
        return $this->container['sort_key'];
    }

    /**
     * Sets sort_key
     *
     * @param float $sort_key sort_key
     *
     * @return self
     */
    public function setSortKey($sort_key)
    {
        $this->container['sort_key'] = $sort_key;

        return $this;
    }

    /**
     * Gets is_published
     *
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->container['is_published'];
    }

    /**
     * Sets is_published
     *
     * @param bool $is_published is_published
     *
     * @return self
     */
    public function setIsPublished($is_published)
    {
        $this->container['is_published'] = $is_published;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets association
     *
     * @return object|null
     */
    public function getAssociation()
    {
        return $this->container['association'];
    }

    /**
     * Sets association
     *
     * @param object|null $association Will be the same for all profiles.
     *
     * @return self
     */
    public function setAssociation($association)
    {
        $this->container['association'] = $association;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website website
     *
     * @return self
     */
    public function setWebsite($website)
    {

        if ((mb_strlen($website) < 1)) {
            throw new \InvalidArgumentException('invalid length for $website when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {

        if ((mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {

        if ((mb_strlen($phone) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets denomination
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse2002Denomination
     */
    public function getDenomination()
    {
        return $this->container['denomination'];
    }

    /**
     * Sets denomination
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse2002Denomination $denomination denomination
     *
     * @return self
     */
    public function setDenomination($denomination)
    {
        $this->container['denomination'] = $denomination;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse2002Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse2002Address $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse2002Groups[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse2002Groups[] $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {


        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse2002Logo
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse2002Logo $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets banner
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse2002Logo
     */
    public function getBanner()
    {
        return $this->container['banner'];
    }

    /**
     * Sets banner
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse2002Logo $banner banner
     *
     * @return self
     */
    public function setBanner($banner)
    {
        $this->container['banner'] = $banner;

        return $this;
    }

    /**
     * Gets social_media
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse2002SocialMedia
     */
    public function getSocialMedia()
    {
        return $this->container['social_media'];
    }

    /**
     * Sets social_media
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse2002SocialMedia $social_media social_media
     *
     * @return self
     */
    public function setSocialMedia($social_media)
    {
        $this->container['social_media'] = $social_media;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse2002Services[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse2002Services[] $services services
     *
     * @return self
     */
    public function setServices($services)
    {


        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets visitors
     *
     * @return float
     */
    public function getVisitors()
    {
        return $this->container['visitors'];
    }

    /**
     * Sets visitors
     *
     * @param float $visitors visitors
     *
     * @return self
     */
    public function setVisitors($visitors)
    {
        $this->container['visitors'] = $visitors;

        return $this;
    }

    /**
     * Gets service_banner
     *
     * @return string
     */
    public function getServiceBanner()
    {
        return $this->container['service_banner'];
    }

    /**
     * Sets service_banner
     *
     * @param string $service_banner service_banner
     *
     * @return self
     */
    public function setServiceBanner($service_banner)
    {

        if ((mb_strlen($service_banner) < 1)) {
            throw new \InvalidArgumentException('invalid length for $service_banner when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['service_banner'] = $service_banner;

        return $this;
    }

    /**
     * Gets sign_up_group
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupDomainObject1|null
     */
    public function getSignUpGroup()
    {
        return $this->container['sign_up_group'];
    }

    /**
     * Sets sign_up_group
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupDomainObject1|null $sign_up_group sign_up_group
     *
     * @return self
     */
    public function setSignUpGroup($sign_up_group)
    {
        $this->container['sign_up_group'] = $sign_up_group;

        return $this;
    }

    /**
     * Gets gallery
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse2002Logo[]
     */
    public function getGallery()
    {
        return $this->container['gallery'];
    }

    /**
     * Sets gallery
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse2002Logo[] $gallery gallery
     *
     * @return self
     */
    public function setGallery($gallery)
    {


        if ((count($gallery) < 1)) {
            throw new \InvalidArgumentException('invalid length for $gallery when calling InlineResponse2002Data., number of items must be greater than or equal to 1.');
        }
        $this->container['gallery'] = $gallery;

        return $this;
    }

    /**
     * Gets team_title
     *
     * @return string
     */
    public function getTeamTitle()
    {
        return $this->container['team_title'];
    }

    /**
     * Sets team_title
     *
     * @param string $team_title team_title
     *
     * @return self
     */
    public function setTeamTitle($team_title)
    {

        if ((mb_strlen($team_title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $team_title when calling InlineResponse2002Data., must be bigger than or equal to 1.');
        }

        $this->container['team_title'] = $team_title;

        return $this;
    }

    /**
     * Gets team
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse2002Team[]
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse2002Team[] $team team
     *
     * @return self
     */
    public function setTeam($team)
    {


        if ((count($team) < 1)) {
            throw new \InvalidArgumentException('invalid length for $team when calling InlineResponse2002Data., number of items must be greater than or equal to 1.');
        }
        $this->container['team'] = $team;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \StevenBuehner\ChurchTools\Model\Meta
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\Meta $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


