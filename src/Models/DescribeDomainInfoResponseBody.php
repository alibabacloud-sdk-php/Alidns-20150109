<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody\availableTtls;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody\dnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody\recordLines;
use AlibabaCloud\Tea\Model;

class DescribeDomainInfoResponseBody extends Model
{
    /**
     * @var bool
     */
    public $aliDomain;

    /**
     * @var availableTtls
     */
    public $availableTtls;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var dnsServers
     */
    public $dnsServers;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $inBlackHole;

    /**
     * @var bool
     */
    public $inClean;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lineType;

    /**
     * @var int
     */
    public $minTtl;

    /**
     * @var string
     */
    public $punyCode;

    /**
     * @var string
     */
    public $recordLineTreeJson;

    /**
     * @var recordLines
     */
    public $recordLines;

    /**
     * @var bool
     */
    public $regionLines;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $slaveDns;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'aliDomain'          => 'AliDomain',
        'availableTtls'      => 'AvailableTtls',
        'createTime'         => 'CreateTime',
        'dnsServers'         => 'DnsServers',
        'domainId'           => 'DomainId',
        'domainName'         => 'DomainName',
        'groupId'            => 'GroupId',
        'groupName'          => 'GroupName',
        'inBlackHole'        => 'InBlackHole',
        'inClean'            => 'InClean',
        'instanceId'         => 'InstanceId',
        'lineType'           => 'LineType',
        'minTtl'             => 'MinTtl',
        'punyCode'           => 'PunyCode',
        'recordLineTreeJson' => 'RecordLineTreeJson',
        'recordLines'        => 'RecordLines',
        'regionLines'        => 'RegionLines',
        'remark'             => 'Remark',
        'requestId'          => 'RequestId',
        'resourceGroupId'    => 'ResourceGroupId',
        'slaveDns'           => 'SlaveDns',
        'versionCode'        => 'VersionCode',
        'versionName'        => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliDomain) {
            $res['AliDomain'] = $this->aliDomain;
        }
        if (null !== $this->availableTtls) {
            $res['AvailableTtls'] = null !== $this->availableTtls ? $this->availableTtls->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dnsServers) {
            $res['DnsServers'] = null !== $this->dnsServers ? $this->dnsServers->toMap() : null;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->inBlackHole) {
            $res['InBlackHole'] = $this->inBlackHole;
        }
        if (null !== $this->inClean) {
            $res['InClean'] = $this->inClean;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lineType) {
            $res['LineType'] = $this->lineType;
        }
        if (null !== $this->minTtl) {
            $res['MinTtl'] = $this->minTtl;
        }
        if (null !== $this->punyCode) {
            $res['PunyCode'] = $this->punyCode;
        }
        if (null !== $this->recordLineTreeJson) {
            $res['RecordLineTreeJson'] = $this->recordLineTreeJson;
        }
        if (null !== $this->recordLines) {
            $res['RecordLines'] = null !== $this->recordLines ? $this->recordLines->toMap() : null;
        }
        if (null !== $this->regionLines) {
            $res['RegionLines'] = $this->regionLines;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->slaveDns) {
            $res['SlaveDns'] = $this->slaveDns;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliDomain'])) {
            $model->aliDomain = $map['AliDomain'];
        }
        if (isset($map['AvailableTtls'])) {
            $model->availableTtls = availableTtls::fromMap($map['AvailableTtls']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DnsServers'])) {
            $model->dnsServers = dnsServers::fromMap($map['DnsServers']);
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InBlackHole'])) {
            $model->inBlackHole = $map['InBlackHole'];
        }
        if (isset($map['InClean'])) {
            $model->inClean = $map['InClean'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LineType'])) {
            $model->lineType = $map['LineType'];
        }
        if (isset($map['MinTtl'])) {
            $model->minTtl = $map['MinTtl'];
        }
        if (isset($map['PunyCode'])) {
            $model->punyCode = $map['PunyCode'];
        }
        if (isset($map['RecordLineTreeJson'])) {
            $model->recordLineTreeJson = $map['RecordLineTreeJson'];
        }
        if (isset($map['RecordLines'])) {
            $model->recordLines = recordLines::fromMap($map['RecordLines']);
        }
        if (isset($map['RegionLines'])) {
            $model->regionLines = $map['RegionLines'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SlaveDns'])) {
            $model->slaveDns = $map['SlaveDns'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
