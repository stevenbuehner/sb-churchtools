<?php
/**
 * PersonApiTest
 * PHP version 5
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChurchTools REST API
 *
 * The ChurchTools REST API is the best entry point for developers to access ChurchTools. <br><br> **Authentication:** You need to be authorized to use some endpoints. Those endpoints are marked by a gray lock symbol. If you view the documentation, while you are logged into ChurchTools, all requests are already authorized. If you want to authorized a request, you need to provide a `Login Token` as `Authorization` header in the format `Authorization: Login<token>` or send a valid cookie. You can use the green \"Authorize\" dialog to enter those details and see how a request would look like in detail. <br><br> **Missing Endpoints:** Not all features are yet available by our new REST API. This documentation will grow in the future. We are working hard to add new endpoints with every ChurchTools version. The documentation will always show only those endpoints you can use with your ChurchTools installation.
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace StevenBuehner\ChurchTools;

use StevenBuehner\ChurchTools\Configuration;
use StevenBuehner\ChurchTools\ApiException;
use StevenBuehner\ChurchTools\ObjectSerializer;

/**
 * PersonApiTest Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for createPerson
     *
     * Create new person.
     *
     */
    public function testCreatePerson()
    {
    }

    /**
     * Test case for declineServiceRequestById
     *
     * Decline a service request for a person.
     *
     */
    public function testDeclineServiceRequestById()
    {
    }

    /**
     * Test case for deleteDeviceForPerson
     *
     * Remove device for person.
     *
     */
    public function testDeleteDeviceForPerson()
    {
    }

    /**
     * Test case for deletePerson
     *
     * Delete person.
     *
     */
    public function testDeletePerson()
    {
    }

    /**
     * Test case for deletePersonSetting
     *
     * Delete a person setting.
     *
     */
    public function testDeletePersonSetting()
    {
    }

    /**
     * Test case for getAllGroupsForPerson
     *
     * Get all groups a member is in.
     *
     */
    public function testGetAllGroupsForPerson()
    {
    }

    /**
     * Test case for getAllPersonSettings
     *
     * Get all person settings.
     *
     */
    public function testGetAllPersonSettings()
    {
    }

    /**
     * Test case for getAllPersons
     *
     * Get all persons.
     *
     */
    public function testGetAllPersons()
    {
    }

    /**
     * Test case for getDeviceForPerson
     *
     * Fetch one device.
     *
     */
    public function testGetDeviceForPerson()
    {
    }

    /**
     * Test case for getOpenServiceRequestsForPerson
     *
     * Get all service requests for a person.
     *
     */
    public function testGetOpenServiceRequestsForPerson()
    {
    }

    /**
     * Test case for getPersonById
     *
     * Get a person by ID or GUID.
     *
     */
    public function testGetPersonById()
    {
    }

    /**
     * Test case for getPersonDevices
     *
     * Fetch all registered devices for person.
     *
     */
    public function testGetPersonDevices()
    {
    }

    /**
     * Test case for getPersonEvents
     *
     * Get events that person is involved with.
     *
     */
    public function testGetPersonEvents()
    {
    }

    /**
     * Test case for getPersonModuleSettings
     *
     * Get all person settings of a module.
     *
     */
    public function testGetPersonModuleSettings()
    {
    }

    /**
     * Test case for getPersonProperties
     *
     * Retrieve people's properties, whether they own an email adress.
     *
     */
    public function testGetPersonProperties()
    {
    }

    /**
     * Test case for getPersonRelationships
     *
     * Get all relationships linked to this person.
     *
     */
    public function testGetPersonRelationships()
    {
    }

    /**
     * Test case for getPersonSetting
     *
     * Get person setting.
     *
     */
    public function testGetPersonSetting()
    {
    }

    /**
     * Test case for getPersonTags
     *
     * Get all tags attached to a person.
     *
     */
    public function testGetPersonTags()
    {
    }

    /**
     * Test case for getPersonsBirthdays
     *
     * Fetch Birthdays.
     *
     */
    public function testGetPersonsBirthdays()
    {
    }

    /**
     * Test case for getPersonsIdLogintoken
     *
     * Fetch Login Token.
     *
     */
    public function testGetPersonsIdLogintoken()
    {
    }

    /**
     * Test case for getServiceRequestById
     *
     * Get a specific service request for a person.
     *
     */
    public function testGetServiceRequestById()
    {
    }

    /**
     * Test case for invitePerson
     *
     * Invite Person to ChurchTools.
     *
     */
    public function testInvitePerson()
    {
    }

    /**
     * Test case for patchPerson
     *
     * Updates a person.
     *
     */
    public function testPatchPerson()
    {
    }

    /**
     * Test case for postPersonsPersonIdArchive
     *
     * .
     *
     */
    public function testPostPersonsPersonIdArchive()
    {
    }

    /**
     * Test case for undoServiceRequestById
     *
     * Undo last service request action.
     *
     */
    public function testUndoServiceRequestById()
    {
    }

    /**
     * Test case for updateDeviceForPerson
     *
     * Create / Update new device for person.
     *
     */
    public function testUpdateDeviceForPerson()
    {
    }

    /**
     * Test case for updatePersonSetting
     *
     * Create/Update person setting.
     *
     */
    public function testUpdatePersonSetting()
    {
    }

    /**
     * Test case for updateServiceRequestById
     *
     * Agree to a service request for a person.
     *
     */
    public function testUpdateServiceRequestById()
    {
    }
}
