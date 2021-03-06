<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/checked.proto

namespace MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Map type with parameterized key and value types, e.g. `map<string, int>`.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.Type.MapType</code>
 */
class MapType extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * The type of the key.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type key_type = 1;</code>
     */
    private $key_type = null;
    /**
     * The type of the value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type value_type = 2;</code>
     */
    private $value_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type $key_type
     *           The type of the key.
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type $value_type
     *           The type of the value.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Expr\V1Alpha1\Checked::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of the key.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type key_type = 1;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type
     */
    public function getKeyType()
    {
        return $this->key_type;
    }

    /**
     * The type of the key.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type key_type = 1;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type $var
     * @return $this
     */
    public function setKeyType($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type::class);
        $this->key_type = $var;

        return $this;
    }

    /**
     * The type of the value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type value_type = 2;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * The type of the value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type value_type = 2;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type $var
     * @return $this
     */
    public function setValueType($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type::class);
        $this->value_type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MapType::class, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type_MapType::class);

