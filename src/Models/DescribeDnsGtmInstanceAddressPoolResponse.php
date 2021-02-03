<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolResponse\addrs;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceAddressPoolResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $addrPoolId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var int
     */
    public $addrCount;

    /**
     * @var string
     */
    public $monitorConfigId;

    /**
     * @var string
     */
    public $monitorStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $lbaStrategy;

    /**
     * @var addrs
     */
    public $addrs;
    protected $_name = [
        'requestId'       => 'RequestId',
        'addrPoolId'      => 'AddrPoolId',
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'updateTime'      => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'addrCount'       => 'AddrCount',
        'monitorConfigId' => 'MonitorConfigId',
        'monitorStatus'   => 'MonitorStatus',
        'name'            => 'Name',
        'type'            => 'Type',
        'lbaStrategy'     => 'LbaStrategy',
        'addrs'           => 'Addrs',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('addrPoolId', $this->addrPoolId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('updateTimestamp', $this->updateTimestamp, true);
        Model::validateRequired('addrCount', $this->addrCount, true);
        Model::validateRequired('monitorConfigId', $this->monitorConfigId, true);
        Model::validateRequired('monitorStatus', $this->monitorStatus, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('lbaStrategy', $this->lbaStrategy, true);
        Model::validateRequired('addrs', $this->addrs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->addrCount) {
            $res['AddrCount'] = $this->addrCount;
        }
        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }
        if (null !== $this->monitorStatus) {
            $res['MonitorStatus'] = $this->monitorStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
        }
        if (null !== $this->addrs) {
            $res['Addrs'] = null !== $this->addrs ? $this->addrs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmInstanceAddressPoolResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['AddrCount'])) {
            $model->addrCount = $map['AddrCount'];
        }
        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        if (isset($map['MonitorStatus'])) {
            $model->monitorStatus = $map['MonitorStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if (isset($map['Addrs'])) {
            $model->addrs = addrs::fromMap($map['Addrs']);
        }

        return $model;
    }
}
