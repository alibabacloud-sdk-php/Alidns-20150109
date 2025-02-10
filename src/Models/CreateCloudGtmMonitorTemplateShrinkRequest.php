<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class CreateCloudGtmMonitorTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var int
     */
    public $evaluationCount;
    /**
     * @var string
     */
    public $extendInfo;
    /**
     * @var int
     */
    public $failureRate;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var string
     */
    public $ipVersion;
    /**
     * @var string
     */
    public $ispCityNodesShrink;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $protocol;
    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'acceptLanguage'     => 'AcceptLanguage',
        'clientToken'        => 'ClientToken',
        'evaluationCount'    => 'EvaluationCount',
        'extendInfo'         => 'ExtendInfo',
        'failureRate'        => 'FailureRate',
        'interval'           => 'Interval',
        'ipVersion'          => 'IpVersion',
        'ispCityNodesShrink' => 'IspCityNodes',
        'name'               => 'Name',
        'protocol'           => 'Protocol',
        'timeout'            => 'Timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }

        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }

        if (null !== $this->failureRate) {
            $res['FailureRate'] = $this->failureRate;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->ispCityNodesShrink) {
            $res['IspCityNodes'] = $this->ispCityNodesShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }

        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }

        if (isset($map['FailureRate'])) {
            $model->failureRate = $map['FailureRate'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['IspCityNodes'])) {
            $model->ispCityNodesShrink = $map['IspCityNodes'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
