<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the parameters of the conversational query.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.QueryParameters</code>
 */
class QueryParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The time zone of this conversational query from the
     * [time zone database](https://www.iana.org/time-zones), e.g.,
     * America/New_York, Europe/Paris. If not provided, the time zone specified in
     * agent settings is used.
     *
     * Generated from protobuf field <code>string time_zone = 1;</code>
     */
    private $time_zone = '';
    /**
     * Optional. The geo location of this conversational query.
     *
     * Generated from protobuf field <code>.google.type.LatLng geo_location = 2;</code>
     */
    private $geo_location = null;
    /**
     * Optional. The collection of contexts to be activated before this query is
     * executed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context contexts = 3;</code>
     */
    private $contexts;
    /**
     * Optional. Specifies whether to delete all contexts in the current session
     * before the new ones are activated.
     *
     * Generated from protobuf field <code>bool reset_contexts = 4;</code>
     */
    private $reset_contexts = false;
    /**
     * Optional. The collection of session entity types to replace or extend
     * developer entities with for this query only. The entity synonyms apply
     * to all languages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SessionEntityType session_entity_types = 5;</code>
     */
    private $session_entity_types;
    /**
     * Optional. This field can be used to pass custom data into the webhook
     * associated with the agent. Arbitrary JSON objects are supported.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 6;</code>
     */
    private $payload = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        parent::__construct();
    }

    /**
     * Optional. The time zone of this conversational query from the
     * [time zone database](https://www.iana.org/time-zones), e.g.,
     * America/New_York, Europe/Paris. If not provided, the time zone specified in
     * agent settings is used.
     *
     * Generated from protobuf field <code>string time_zone = 1;</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Optional. The time zone of this conversational query from the
     * [time zone database](https://www.iana.org/time-zones), e.g.,
     * America/New_York, Europe/Paris. If not provided, the time zone specified in
     * agent settings is used.
     *
     * Generated from protobuf field <code>string time_zone = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Optional. The geo location of this conversational query.
     *
     * Generated from protobuf field <code>.google.type.LatLng geo_location = 2;</code>
     * @return \Google\Type\LatLng
     */
    public function getGeoLocation()
    {
        return $this->geo_location;
    }

    /**
     * Optional. The geo location of this conversational query.
     *
     * Generated from protobuf field <code>.google.type.LatLng geo_location = 2;</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setGeoLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->geo_location = $var;

        return $this;
    }

    /**
     * Optional. The collection of contexts to be activated before this query is
     * executed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context contexts = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContexts()
    {
        return $this->contexts;
    }

    /**
     * Optional. The collection of contexts to be activated before this query is
     * executed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context contexts = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2\Context[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Context::class);
        $this->contexts = $arr;

        return $this;
    }

    /**
     * Optional. Specifies whether to delete all contexts in the current session
     * before the new ones are activated.
     *
     * Generated from protobuf field <code>bool reset_contexts = 4;</code>
     * @return bool
     */
    public function getResetContexts()
    {
        return $this->reset_contexts;
    }

    /**
     * Optional. Specifies whether to delete all contexts in the current session
     * before the new ones are activated.
     *
     * Generated from protobuf field <code>bool reset_contexts = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setResetContexts($var)
    {
        GPBUtil::checkBool($var);
        $this->reset_contexts = $var;

        return $this;
    }

    /**
     * Optional. The collection of session entity types to replace or extend
     * developer entities with for this query only. The entity synonyms apply
     * to all languages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SessionEntityType session_entity_types = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSessionEntityTypes()
    {
        return $this->session_entity_types;
    }

    /**
     * Optional. The collection of session entity types to replace or extend
     * developer entities with for this query only. The entity synonyms apply
     * to all languages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SessionEntityType session_entity_types = 5;</code>
     * @param \Google\Cloud\Dialogflow\V2\SessionEntityType[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSessionEntityTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\SessionEntityType::class);
        $this->session_entity_types = $arr;

        return $this;
    }

    /**
     * Optional. This field can be used to pass custom data into the webhook
     * associated with the agent. Arbitrary JSON objects are supported.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 6;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Optional. This field can be used to pass custom data into the webhook
     * associated with the agent. Arbitrary JSON objects are supported.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 6;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->payload = $var;

        return $this;
    }

}

