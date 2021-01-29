<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains the set of entries to remove from a local database.
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1.ThreatEntryRemovals</code>
 */
class ThreatEntryRemovals extends \Google\Protobuf\Internal\Message
{
    /**
     * The raw removal indices for a local list.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.RawIndices raw_indices = 1;</code>
     */
    private $raw_indices = null;
    /**
     * The encoded local, lexicographically-sorted list indices, using a
     * Golomb-Rice encoding. Used for sending compressed removal indices. The
     * removal indices (uint32) are sorted in ascending order, then delta encoded
     * and stored as encoded_data.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.RiceDeltaEncoding rice_indices = 2;</code>
     */
    private $rice_indices = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\WebRisk\V1\RawIndices $raw_indices
     *           The raw removal indices for a local list.
     *     @type \Google\Cloud\WebRisk\V1\RiceDeltaEncoding $rice_indices
     *           The encoded local, lexicographically-sorted list indices, using a
     *           Golomb-Rice encoding. Used for sending compressed removal indices. The
     *           removal indices (uint32) are sorted in ascending order, then delta encoded
     *           and stored as encoded_data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * The raw removal indices for a local list.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.RawIndices raw_indices = 1;</code>
     * @return \Google\Cloud\WebRisk\V1\RawIndices
     */
    public function getRawIndices()
    {
        return $this->raw_indices;
    }

    /**
     * The raw removal indices for a local list.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.RawIndices raw_indices = 1;</code>
     * @param \Google\Cloud\WebRisk\V1\RawIndices $var
     * @return $this
     */
    public function setRawIndices($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebRisk\V1\RawIndices::class);
        $this->raw_indices = $var;

        return $this;
    }

    /**
     * The encoded local, lexicographically-sorted list indices, using a
     * Golomb-Rice encoding. Used for sending compressed removal indices. The
     * removal indices (uint32) are sorted in ascending order, then delta encoded
     * and stored as encoded_data.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.RiceDeltaEncoding rice_indices = 2;</code>
     * @return \Google\Cloud\WebRisk\V1\RiceDeltaEncoding
     */
    public function getRiceIndices()
    {
        return $this->rice_indices;
    }

    /**
     * The encoded local, lexicographically-sorted list indices, using a
     * Golomb-Rice encoding. Used for sending compressed removal indices. The
     * removal indices (uint32) are sorted in ascending order, then delta encoded
     * and stored as encoded_data.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.RiceDeltaEncoding rice_indices = 2;</code>
     * @param \Google\Cloud\WebRisk\V1\RiceDeltaEncoding $var
     * @return $this
     */
    public function setRiceIndices($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebRisk\V1\RiceDeltaEncoding::class);
        $this->rice_indices = $var;

        return $this;
    }

}

