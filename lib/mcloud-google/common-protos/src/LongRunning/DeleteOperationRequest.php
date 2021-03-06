<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/longrunning/operations.proto

namespace MediaCloud\Vendor\Google\LongRunning;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Operations.DeleteOperation][google.longrunning.Operations.DeleteOperation].
 *
 * Generated from protobuf message <code>google.longrunning.DeleteOperationRequest</code>
 */
class DeleteOperationRequest extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * The name of the operation resource to be deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the operation resource to be deleted.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Longrunning\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the operation resource to be deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the operation resource to be deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

