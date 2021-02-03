<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody\config\alertConfig;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $alertGroup;

    /**
     * @var string
     */
    public $cnameType;

    /**
     * @var string
     */
    public $strategyMode;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $publicCnameMode;

    /**
     * @var alertConfig
     */
    public $alertConfig;

    /**
     * @var string
     */
    public $publicUserDomainName;

    /**
     * @var string
     */
    public $pubicZoneName;
    protected $_name = [
        'ttl'                  => 'Ttl',
        'alertGroup'           => 'AlertGroup',
        'cnameType'            => 'CnameType',
        'strategyMode'         => 'StrategyMode',
        'instanceName'         => 'InstanceName',
        'publicCnameMode'      => 'PublicCnameMode',
        'alertConfig'          => 'AlertConfig',
        'publicUserDomainName' => 'PublicUserDomainName',
        'pubicZoneName'        => 'PubicZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->cnameType) {
            $res['CnameType'] = $this->cnameType;
        }
        if (null !== $this->strategyMode) {
            $res['StrategyMode'] = $this->strategyMode;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->publicCnameMode) {
            $res['PublicCnameMode'] = $this->publicCnameMode;
        }
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toMap() : null;
        }
        if (null !== $this->publicUserDomainName) {
            $res['PublicUserDomainName'] = $this->publicUserDomainName;
        }
        if (null !== $this->pubicZoneName) {
            $res['PubicZoneName'] = $this->pubicZoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['CnameType'])) {
            $model->cnameType = $map['CnameType'];
        }
        if (isset($map['StrategyMode'])) {
            $model->strategyMode = $map['StrategyMode'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PublicCnameMode'])) {
            $model->publicCnameMode = $map['PublicCnameMode'];
        }
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }
        if (isset($map['PublicUserDomainName'])) {
            $model->publicUserDomainName = $map['PublicUserDomainName'];
        }
        if (isset($map['PubicZoneName'])) {
            $model->pubicZoneName = $map['PubicZoneName'];
        }

        return $model;
    }
}
