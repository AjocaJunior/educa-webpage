<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message to annotate an Assessment.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest</code>
 */
class AnnotateAssessmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Assessment, in the format
     * "projects/{project}/assessments/{assessment}".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The annotation that will be assigned to the Event.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest.Annotation annotation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $annotation = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the Assessment, in the format
     *           "projects/{project}/assessments/{assessment}".
     *     @type int $annotation
     *           Required. The annotation that will be assigned to the Event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Assessment, in the format
     * "projects/{project}/assessments/{assessment}".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Assessment, in the format
     * "projects/{project}/assessments/{assessment}".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The annotation that will be assigned to the Event.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest.Annotation annotation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Required. The annotation that will be assigned to the Event.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest.Annotation annotation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAnnotation($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\RecaptchaEnterprise\V1\AnnotateAssessmentRequest_Annotation::class);
        $this->annotation = $var;

        return $this;
    }

}
