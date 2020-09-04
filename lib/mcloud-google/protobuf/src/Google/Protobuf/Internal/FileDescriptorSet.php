<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace MediaCloud\Vendor\Google\Protobuf\Internal;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBWire;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\InputStream;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * The protocol compiler can output a FileDescriptorSet containing the .proto
 * files it parses.
 *
 * Generated from protobuf message <code>google.protobuf.FileDescriptorSet</code>
 */
class FileDescriptorSet extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.FileDescriptorProto file = 1;</code>
     */
    private $file;
    private $has_file = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Protobuf\Internal\FileDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $file
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.FileDescriptorProto file = 1;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.FileDescriptorProto file = 1;</code>
     * @param \MediaCloud\Vendor\Google\Protobuf\Internal\FileDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFile($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Protobuf\Internal\FileDescriptorProto::class);
        $this->file = $arr;
        $this->has_file = true;

        return $this;
    }

    public function hasFile()
    {
        return $this->has_file;
    }

}
