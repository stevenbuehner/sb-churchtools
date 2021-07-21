<?php
/**
 * InlineObject6
 *
 * PHP version 7.2
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
 * OpenAPI Generator version: 5.2.0
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
 * InlineObject6 Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject6 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_6';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'nickname' => 'string',
        'job' => 'string',
        'street' => 'string',
        'address_addition' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'country' => 'string',
        'phone_private' => 'string',
        'phone_work' => 'string',
        'mobile' => 'string',
        'fax' => 'string',
        'birth_name' => 'string',
        'birthday' => '\DateTime',
        'birthplace' => 'string',
        'sex_id' => 'int',
        'email' => 'string',
        'emails' => '\StevenBuehner\ChurchTools\Model\PersonEmail1[]',
        'cms_user_id' => 'string',
        'optigem_id' => 'int',
        'privacy_policy_agreement' => '\StevenBuehner\ChurchTools\Model\PersonsPrivacyPolicyAgreement',
        'nationality_id' => 'int',
        'family_status_id' => 'int',
        'wedding_date' => '\DateTime',
        'campus_id' => 'int',
        'status_id' => 'int',
        'department_ids' => 'int[]',
        'first_contact' => '\DateTime',
        'date_of_belonging' => '\DateTime',
        'date_of_entry' => '\DateTime',
        'date_of_resign' => '\DateTime',
        'date_of_baptism' => '\DateTime',
        'place_of_baptism' => 'string',
        'baptised_by' => 'string',
        'referred_by' => 'string',
        'referred_to' => 'string',
        'grow_path_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'first_name' => null,
        'last_name' => null,
        'nickname' => null,
        'job' => null,
        'street' => null,
        'address_addition' => null,
        'zip' => null,
        'city' => null,
        'country' => null,
        'phone_private' => null,
        'phone_work' => null,
        'mobile' => null,
        'fax' => null,
        'birth_name' => null,
        'birthday' => 'date',
        'birthplace' => null,
        'sex_id' => null,
        'email' => null,
        'emails' => null,
        'cms_user_id' => null,
        'optigem_id' => null,
        'privacy_policy_agreement' => null,
        'nationality_id' => null,
        'family_status_id' => null,
        'wedding_date' => 'date',
        'campus_id' => null,
        'status_id' => null,
        'department_ids' => null,
        'first_contact' => 'date-time',
        'date_of_belonging' => 'date',
        'date_of_entry' => 'date-time',
        'date_of_resign' => 'date-time',
        'date_of_baptism' => 'date',
        'place_of_baptism' => null,
        'baptised_by' => null,
        'referred_by' => null,
        'referred_to' => null,
        'grow_path_id' => null
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
        'title' => 'title',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'nickname' => 'nickname',
        'job' => 'job',
        'street' => 'street',
        'address_addition' => 'addressAddition',
        'zip' => 'zip',
        'city' => 'city',
        'country' => 'country',
        'phone_private' => 'phonePrivate',
        'phone_work' => 'phoneWork',
        'mobile' => 'mobile',
        'fax' => 'fax',
        'birth_name' => 'birthName',
        'birthday' => 'birthday',
        'birthplace' => 'birthplace',
        'sex_id' => 'sexId',
        'email' => 'email',
        'emails' => 'emails',
        'cms_user_id' => 'cmsUserId',
        'optigem_id' => 'optigemId',
        'privacy_policy_agreement' => 'privacyPolicyAgreement',
        'nationality_id' => 'nationalityId',
        'family_status_id' => 'familyStatusId',
        'wedding_date' => 'weddingDate',
        'campus_id' => 'campusId',
        'status_id' => 'statusId',
        'department_ids' => 'departmentIds',
        'first_contact' => 'firstContact',
        'date_of_belonging' => 'dateOfBelonging',
        'date_of_entry' => 'dateOfEntry',
        'date_of_resign' => 'dateOfResign',
        'date_of_baptism' => 'dateOfBaptism',
        'place_of_baptism' => 'placeOfBaptism',
        'baptised_by' => 'baptisedBy',
        'referred_by' => 'referredBy',
        'referred_to' => 'referredTo',
        'grow_path_id' => 'growPathId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'nickname' => 'setNickname',
        'job' => 'setJob',
        'street' => 'setStreet',
        'address_addition' => 'setAddressAddition',
        'zip' => 'setZip',
        'city' => 'setCity',
        'country' => 'setCountry',
        'phone_private' => 'setPhonePrivate',
        'phone_work' => 'setPhoneWork',
        'mobile' => 'setMobile',
        'fax' => 'setFax',
        'birth_name' => 'setBirthName',
        'birthday' => 'setBirthday',
        'birthplace' => 'setBirthplace',
        'sex_id' => 'setSexId',
        'email' => 'setEmail',
        'emails' => 'setEmails',
        'cms_user_id' => 'setCmsUserId',
        'optigem_id' => 'setOptigemId',
        'privacy_policy_agreement' => 'setPrivacyPolicyAgreement',
        'nationality_id' => 'setNationalityId',
        'family_status_id' => 'setFamilyStatusId',
        'wedding_date' => 'setWeddingDate',
        'campus_id' => 'setCampusId',
        'status_id' => 'setStatusId',
        'department_ids' => 'setDepartmentIds',
        'first_contact' => 'setFirstContact',
        'date_of_belonging' => 'setDateOfBelonging',
        'date_of_entry' => 'setDateOfEntry',
        'date_of_resign' => 'setDateOfResign',
        'date_of_baptism' => 'setDateOfBaptism',
        'place_of_baptism' => 'setPlaceOfBaptism',
        'baptised_by' => 'setBaptisedBy',
        'referred_by' => 'setReferredBy',
        'referred_to' => 'setReferredTo',
        'grow_path_id' => 'setGrowPathId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'nickname' => 'getNickname',
        'job' => 'getJob',
        'street' => 'getStreet',
        'address_addition' => 'getAddressAddition',
        'zip' => 'getZip',
        'city' => 'getCity',
        'country' => 'getCountry',
        'phone_private' => 'getPhonePrivate',
        'phone_work' => 'getPhoneWork',
        'mobile' => 'getMobile',
        'fax' => 'getFax',
        'birth_name' => 'getBirthName',
        'birthday' => 'getBirthday',
        'birthplace' => 'getBirthplace',
        'sex_id' => 'getSexId',
        'email' => 'getEmail',
        'emails' => 'getEmails',
        'cms_user_id' => 'getCmsUserId',
        'optigem_id' => 'getOptigemId',
        'privacy_policy_agreement' => 'getPrivacyPolicyAgreement',
        'nationality_id' => 'getNationalityId',
        'family_status_id' => 'getFamilyStatusId',
        'wedding_date' => 'getWeddingDate',
        'campus_id' => 'getCampusId',
        'status_id' => 'getStatusId',
        'department_ids' => 'getDepartmentIds',
        'first_contact' => 'getFirstContact',
        'date_of_belonging' => 'getDateOfBelonging',
        'date_of_entry' => 'getDateOfEntry',
        'date_of_resign' => 'getDateOfResign',
        'date_of_baptism' => 'getDateOfBaptism',
        'place_of_baptism' => 'getPlaceOfBaptism',
        'baptised_by' => 'getBaptisedBy',
        'referred_by' => 'getReferredBy',
        'referred_to' => 'getReferredTo',
        'grow_path_id' => 'getGrowPathId'
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
        $this->container['title'] = $data['title'] ?? 'null';
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['nickname'] = $data['nickname'] ?? null;
        $this->container['job'] = $data['job'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['address_addition'] = $data['address_addition'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['phone_private'] = $data['phone_private'] ?? null;
        $this->container['phone_work'] = $data['phone_work'] ?? null;
        $this->container['mobile'] = $data['mobile'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
        $this->container['birth_name'] = $data['birth_name'] ?? null;
        $this->container['birthday'] = $data['birthday'] ?? null;
        $this->container['birthplace'] = $data['birthplace'] ?? null;
        $this->container['sex_id'] = $data['sex_id'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['emails'] = $data['emails'] ?? null;
        $this->container['cms_user_id'] = $data['cms_user_id'] ?? null;
        $this->container['optigem_id'] = $data['optigem_id'] ?? null;
        $this->container['privacy_policy_agreement'] = $data['privacy_policy_agreement'] ?? null;
        $this->container['nationality_id'] = $data['nationality_id'] ?? null;
        $this->container['family_status_id'] = $data['family_status_id'] ?? null;
        $this->container['wedding_date'] = $data['wedding_date'] ?? null;
        $this->container['campus_id'] = $data['campus_id'] ?? null;
        $this->container['status_id'] = $data['status_id'] ?? null;
        $this->container['department_ids'] = $data['department_ids'] ?? null;
        $this->container['first_contact'] = $data['first_contact'] ?? null;
        $this->container['date_of_belonging'] = $data['date_of_belonging'] ?? null;
        $this->container['date_of_entry'] = $data['date_of_entry'] ?? null;
        $this->container['date_of_resign'] = $data['date_of_resign'] ?? null;
        $this->container['date_of_baptism'] = $data['date_of_baptism'] ?? null;
        $this->container['place_of_baptism'] = $data['place_of_baptism'] ?? null;
        $this->container['baptised_by'] = $data['baptised_by'] ?? null;
        $this->container['referred_by'] = $data['referred_by'] ?? null;
        $this->container['referred_to'] = $data['referred_to'] ?? null;
        $this->container['grow_path_id'] = $data['grow_path_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string|null $nickname nickname
     *
     * @return self
     */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets job
     *
     * @return string|null
     */
    public function getJob()
    {
        return $this->container['job'];
    }

    /**
     * Sets job
     *
     * @param string|null $job job
     *
     * @return self
     */
    public function setJob($job)
    {
        $this->container['job'] = $job;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street street
     *
     * @return self
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets address_addition
     *
     * @return string|null
     */
    public function getAddressAddition()
    {
        return $this->container['address_addition'];
    }

    /**
     * Sets address_addition
     *
     * @param string|null $address_addition address_addition
     *
     * @return self
     */
    public function setAddressAddition($address_addition)
    {
        $this->container['address_addition'] = $address_addition;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip zip
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone_private
     *
     * @return string|null
     */
    public function getPhonePrivate()
    {
        return $this->container['phone_private'];
    }

    /**
     * Sets phone_private
     *
     * @param string|null $phone_private phone_private
     *
     * @return self
     */
    public function setPhonePrivate($phone_private)
    {
        $this->container['phone_private'] = $phone_private;

        return $this;
    }

    /**
     * Gets phone_work
     *
     * @return string|null
     */
    public function getPhoneWork()
    {
        return $this->container['phone_work'];
    }

    /**
     * Sets phone_work
     *
     * @param string|null $phone_work phone_work
     *
     * @return self
     */
    public function setPhoneWork($phone_work)
    {
        $this->container['phone_work'] = $phone_work;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string|null $mobile mobile
     *
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets birth_name
     *
     * @return string|null
     */
    public function getBirthName()
    {
        return $this->container['birth_name'];
    }

    /**
     * Sets birth_name
     *
     * @param string|null $birth_name birth_name
     *
     * @return self
     */
    public function setBirthName($birth_name)
    {
        $this->container['birth_name'] = $birth_name;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return \DateTime|null
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param \DateTime|null $birthday birthday
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets birthplace
     *
     * @return string|null
     */
    public function getBirthplace()
    {
        return $this->container['birthplace'];
    }

    /**
     * Sets birthplace
     *
     * @param string|null $birthplace birthplace
     *
     * @return self
     */
    public function setBirthplace($birthplace)
    {
        $this->container['birthplace'] = $birthplace;

        return $this;
    }

    /**
     * Gets sex_id
     *
     * @return int|null
     */
    public function getSexId()
    {
        return $this->container['sex_id'];
    }

    /**
     * Sets sex_id
     *
     * @param int|null $sex_id sex_id
     *
     * @return self
     */
    public function setSexId($sex_id)
    {
        $this->container['sex_id'] = $sex_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \StevenBuehner\ChurchTools\Model\PersonEmail1[]|null
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \StevenBuehner\ChurchTools\Model\PersonEmail1[]|null $emails Save many eMail addresses for person. If `emails` is present in request `email` is ignored.
     *
     * @return self
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets cms_user_id
     *
     * @return string|null
     */
    public function getCmsUserId()
    {
        return $this->container['cms_user_id'];
    }

    /**
     * Sets cms_user_id
     *
     * @param string|null $cms_user_id cms_user_id
     *
     * @return self
     */
    public function setCmsUserId($cms_user_id)
    {
        $this->container['cms_user_id'] = $cms_user_id;

        return $this;
    }

    /**
     * Gets optigem_id
     *
     * @return int|null
     */
    public function getOptigemId()
    {
        return $this->container['optigem_id'];
    }

    /**
     * Sets optigem_id
     *
     * @param int|null $optigem_id optigem_id
     *
     * @return self
     */
    public function setOptigemId($optigem_id)
    {
        $this->container['optigem_id'] = $optigem_id;

        return $this;
    }

    /**
     * Gets privacy_policy_agreement
     *
     * @return \StevenBuehner\ChurchTools\Model\PersonsPrivacyPolicyAgreement|null
     */
    public function getPrivacyPolicyAgreement()
    {
        return $this->container['privacy_policy_agreement'];
    }

    /**
     * Sets privacy_policy_agreement
     *
     * @param \StevenBuehner\ChurchTools\Model\PersonsPrivacyPolicyAgreement|null $privacy_policy_agreement privacy_policy_agreement
     *
     * @return self
     */
    public function setPrivacyPolicyAgreement($privacy_policy_agreement)
    {
        $this->container['privacy_policy_agreement'] = $privacy_policy_agreement;

        return $this;
    }

    /**
     * Gets nationality_id
     *
     * @return int|null
     */
    public function getNationalityId()
    {
        return $this->container['nationality_id'];
    }

    /**
     * Sets nationality_id
     *
     * @param int|null $nationality_id nationality_id
     *
     * @return self
     */
    public function setNationalityId($nationality_id)
    {
        $this->container['nationality_id'] = $nationality_id;

        return $this;
    }

    /**
     * Gets family_status_id
     *
     * @return int|null
     */
    public function getFamilyStatusId()
    {
        return $this->container['family_status_id'];
    }

    /**
     * Sets family_status_id
     *
     * @param int|null $family_status_id family_status_id
     *
     * @return self
     */
    public function setFamilyStatusId($family_status_id)
    {
        $this->container['family_status_id'] = $family_status_id;

        return $this;
    }

    /**
     * Gets wedding_date
     *
     * @return \DateTime|null
     */
    public function getWeddingDate()
    {
        return $this->container['wedding_date'];
    }

    /**
     * Sets wedding_date
     *
     * @param \DateTime|null $wedding_date wedding_date
     *
     * @return self
     */
    public function setWeddingDate($wedding_date)
    {
        $this->container['wedding_date'] = $wedding_date;

        return $this;
    }

    /**
     * Gets campus_id
     *
     * @return int|null
     */
    public function getCampusId()
    {
        return $this->container['campus_id'];
    }

    /**
     * Sets campus_id
     *
     * @param int|null $campus_id campus_id
     *
     * @return self
     */
    public function setCampusId($campus_id)
    {
        $this->container['campus_id'] = $campus_id;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return int|null
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param int|null $status_id status_id
     *
     * @return self
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets department_ids
     *
     * @return int[]|null
     */
    public function getDepartmentIds()
    {
        return $this->container['department_ids'];
    }

    /**
     * Sets department_ids
     *
     * @param int[]|null $department_ids Department IDs. At least one department MUST be set for a person. The last department ID cannot be deleted.
     *
     * @return self
     */
    public function setDepartmentIds($department_ids)
    {
        $this->container['department_ids'] = $department_ids;

        return $this;
    }

    /**
     * Gets first_contact
     *
     * @return \DateTime|null
     */
    public function getFirstContact()
    {
        return $this->container['first_contact'];
    }

    /**
     * Sets first_contact
     *
     * @param \DateTime|null $first_contact first_contact
     *
     * @return self
     */
    public function setFirstContact($first_contact)
    {
        $this->container['first_contact'] = $first_contact;

        return $this;
    }

    /**
     * Gets date_of_belonging
     *
     * @return \DateTime|null
     */
    public function getDateOfBelonging()
    {
        return $this->container['date_of_belonging'];
    }

    /**
     * Sets date_of_belonging
     *
     * @param \DateTime|null $date_of_belonging date_of_belonging
     *
     * @return self
     */
    public function setDateOfBelonging($date_of_belonging)
    {
        $this->container['date_of_belonging'] = $date_of_belonging;

        return $this;
    }

    /**
     * Gets date_of_entry
     *
     * @return \DateTime|null
     */
    public function getDateOfEntry()
    {
        return $this->container['date_of_entry'];
    }

    /**
     * Sets date_of_entry
     *
     * @param \DateTime|null $date_of_entry date_of_entry
     *
     * @return self
     */
    public function setDateOfEntry($date_of_entry)
    {
        $this->container['date_of_entry'] = $date_of_entry;

        return $this;
    }

    /**
     * Gets date_of_resign
     *
     * @return \DateTime|null
     */
    public function getDateOfResign()
    {
        return $this->container['date_of_resign'];
    }

    /**
     * Sets date_of_resign
     *
     * @param \DateTime|null $date_of_resign date_of_resign
     *
     * @return self
     */
    public function setDateOfResign($date_of_resign)
    {
        $this->container['date_of_resign'] = $date_of_resign;

        return $this;
    }

    /**
     * Gets date_of_baptism
     *
     * @return \DateTime|null
     */
    public function getDateOfBaptism()
    {
        return $this->container['date_of_baptism'];
    }

    /**
     * Sets date_of_baptism
     *
     * @param \DateTime|null $date_of_baptism date_of_baptism
     *
     * @return self
     */
    public function setDateOfBaptism($date_of_baptism)
    {
        $this->container['date_of_baptism'] = $date_of_baptism;

        return $this;
    }

    /**
     * Gets place_of_baptism
     *
     * @return string|null
     */
    public function getPlaceOfBaptism()
    {
        return $this->container['place_of_baptism'];
    }

    /**
     * Sets place_of_baptism
     *
     * @param string|null $place_of_baptism place_of_baptism
     *
     * @return self
     */
    public function setPlaceOfBaptism($place_of_baptism)
    {
        $this->container['place_of_baptism'] = $place_of_baptism;

        return $this;
    }

    /**
     * Gets baptised_by
     *
     * @return string|null
     */
    public function getBaptisedBy()
    {
        return $this->container['baptised_by'];
    }

    /**
     * Sets baptised_by
     *
     * @param string|null $baptised_by baptised_by
     *
     * @return self
     */
    public function setBaptisedBy($baptised_by)
    {
        $this->container['baptised_by'] = $baptised_by;

        return $this;
    }

    /**
     * Gets referred_by
     *
     * @return string|null
     */
    public function getReferredBy()
    {
        return $this->container['referred_by'];
    }

    /**
     * Sets referred_by
     *
     * @param string|null $referred_by referred_by
     *
     * @return self
     */
    public function setReferredBy($referred_by)
    {
        $this->container['referred_by'] = $referred_by;

        return $this;
    }

    /**
     * Gets referred_to
     *
     * @return string|null
     */
    public function getReferredTo()
    {
        return $this->container['referred_to'];
    }

    /**
     * Sets referred_to
     *
     * @param string|null $referred_to referred_to
     *
     * @return self
     */
    public function setReferredTo($referred_to)
    {
        $this->container['referred_to'] = $referred_to;

        return $this;
    }

    /**
     * Gets grow_path_id
     *
     * @return int|null
     */
    public function getGrowPathId()
    {
        return $this->container['grow_path_id'];
    }

    /**
     * Sets grow_path_id
     *
     * @param int|null $grow_path_id grow_path_id
     *
     * @return self
     */
    public function setGrowPathId($grow_path_id)
    {
        $this->container['grow_path_id'] = $grow_path_id;

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


