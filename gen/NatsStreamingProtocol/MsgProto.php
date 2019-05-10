<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protoc/nats_streaming.proto

namespace NatsStreamingProtocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Msg struct. Sequence is assigned for global ordering by
 * the cluster after the publisher has been acknowledged.
 *
 * Generated from protobuf message <code>NatsStreamingProtocol.MsgProto</code>
 */
class MsgProto extends \Google\Protobuf\Internal\Message
{
    /**
     * globally ordered sequence number for the subject's channel
     *
     * Generated from protobuf field <code>uint64 sequence = 1;</code>
     */
    private $sequence = 0;
    /**
     * subject
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     */
    private $subject = '';
    /**
     * optional reply
     *
     * Generated from protobuf field <code>string reply = 3;</code>
     */
    private $reply = '';
    /**
     * payload
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     */
    private $data = '';
    /**
     * received timestamp
     *
     * Generated from protobuf field <code>int64 timestamp = 5;</code>
     */
    private $timestamp = 0;
    /**
     * Flag specifying if the message is being redelivered
     *
     * Generated from protobuf field <code>bool redelivered = 6;</code>
     */
    private $redelivered = false;
    /**
     * optional IEEE CRC32
     *
     * Generated from protobuf field <code>uint32 CRC32 = 10;</code>
     */
    private $CRC32 = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sequence
     *           globally ordered sequence number for the subject's channel
     *     @type string $subject
     *           subject
     *     @type string $reply
     *           optional reply
     *     @type string $data
     *           payload
     *     @type int|string $timestamp
     *           received timestamp
     *     @type bool $redelivered
     *           Flag specifying if the message is being redelivered
     *     @type int $CRC32
     *           optional IEEE CRC32
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protoc\NatsStreaming::initOnce();
        parent::__construct($data);
    }

    /**
     * globally ordered sequence number for the subject's channel
     *
     * Generated from protobuf field <code>uint64 sequence = 1;</code>
     * @return int|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * globally ordered sequence number for the subject's channel
     *
     * Generated from protobuf field <code>uint64 sequence = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->sequence = $var;

        return $this;
    }

    /**
     * subject
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * subject
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * optional reply
     *
     * Generated from protobuf field <code>string reply = 3;</code>
     * @return string
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * optional reply
     *
     * Generated from protobuf field <code>string reply = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReply($var)
    {
        GPBUtil::checkString($var, True);
        $this->reply = $var;

        return $this;
    }

    /**
     * payload
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * payload
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * received timestamp
     *
     * Generated from protobuf field <code>int64 timestamp = 5;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * received timestamp
     *
     * Generated from protobuf field <code>int64 timestamp = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Flag specifying if the message is being redelivered
     *
     * Generated from protobuf field <code>bool redelivered = 6;</code>
     * @return bool
     */
    public function getRedelivered()
    {
        return $this->redelivered;
    }

    /**
     * Flag specifying if the message is being redelivered
     *
     * Generated from protobuf field <code>bool redelivered = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setRedelivered($var)
    {
        GPBUtil::checkBool($var);
        $this->redelivered = $var;

        return $this;
    }

    /**
     * optional IEEE CRC32
     *
     * Generated from protobuf field <code>uint32 CRC32 = 10;</code>
     * @return int
     */
    public function getCRC32()
    {
        return $this->CRC32;
    }

    /**
     * optional IEEE CRC32
     *
     * Generated from protobuf field <code>uint32 CRC32 = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCRC32($var)
    {
        GPBUtil::checkUint32($var);
        $this->CRC32 = $var;

        return $this;
    }

}
