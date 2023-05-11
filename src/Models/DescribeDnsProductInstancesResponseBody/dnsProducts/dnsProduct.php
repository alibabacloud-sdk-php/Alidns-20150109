<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesResponseBody\dnsProducts;

use AlibabaCloud\Tea\Model;

class dnsProduct extends Model
{
    /**
     * @description The number of subdomain name levels.
     *
     * @example 3
     *
     * @var int
     */
    public $bindCount;

    /**
     * @description The time at which the instance expired.
     *
     * @example 5
     *
     * @var int
     */
    public $bindDomainCount;

    /**
     * @description The list of ISP line subdivisions.
     *
     * @example 3
     *
     * @var int
     */
    public $bindDomainUsedCount;

    /**
     * @description The bound domain name.
     *
     * @example 1
     *
     * @var int
     */
    public $bindUsedCount;

    /**
     * @description The number of times you can change domain names that are bound to the DNS instance. It can be specified by the user who uses Alibaba Cloud DNS of the custom version.
     *
     * @example 50
     *
     * @var int
     */
    public $DDosDefendFlow;

    /**
     * @description The ID of the Alibaba Cloud DNS instance.
     *
     * @example 50
     *
     * @var int
     */
    public $DDosDefendQuery;

    /**
     * @example 15
     *
     * @var int
     */
    public $dnsSLBCount;

    /**
     * @description The number of IP addresses supported by a domain name or line.
     *
     * @example no
     *
     * @var string
     */
    public $dnsSecurity;

    /**
     * @description The monitoring frequency. Unit: minutes.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The time when the DNS instance was purchased.
     *
     * @example 2015-12-12T09:23Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The version name of the Alibaba Cloud DNS instance.
     *
     * @example 1474335170000
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @description The DNS security policy. Valid values:
     *
     *   **no**: not required.
     *   **basic**: anti-DDoS basic.
     *   **advanced**: anti-DDoS advanced.
     *
     * @example true
     *
     * @var bool
     */
    public $gslb;

    /**
     * @description The list of search engine lines.
     *
     * @var string
     */
    public $ISPLines;

    /**
     * @description The minimum TTL. Unit: seconds.
     *
     * @var string
     */
    public $ISPRegionLines;

    /**
     * @description The number of domain names that have been bound to the DNS instance.
     *
     * @example false
     *
     * @var bool
     */
    public $inBlackHole;

    /**
     * @description The URL forwarding quantity.
     *
     * @example false
     *
     * @var bool
     */
    public $inClean;

    /**
     * @description The DDoS protection traffic. Unit: GB.
     *
     * @example i-8fj
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the request for domain name resolution was being cleared.
     *
     * @example 50
     *
     * @var int
     */
    public $monitorFrequency;

    /**
     * @description Indicates whether the request for domain name resolution was in the black hole.
     *
     * @example 5
     *
     * @var int
     */
    public $monitorNodeCount;

    /**
     * @description The number of times you have changed domain names that are bound to the DNS instance. It can be specified by the user who uses Alibaba Cloud DNS of the custom version.
     *
     * @example 2
     *
     * @var int
     */
    public $monitorTaskCount;

    /**
     * @description Indicates whether regional lines were allowed.
     *
     * @example 1
     *
     * @var int
     */
    public $overseaDDosDefendFlow;

    /**
     * @description The number of monitored nodes.
     *
     * @var string
     */
    public $overseaLine;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description Indicates whether global server load balancing (GSLB) was allowed.
     *
     * @example true
     *
     * @var bool
     */
    public $regionLines;

    /**
     * @description The UNIX timestamp representing the expiration time of the instance.
     *
     * @var string
     */
    public $searchEngineLines;

    /**
     * @description DDoS protection traffic outside China. Unit: GB.
     *
     * @example 2015-12-12T09:23Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The DDoS protection frequency. Unit: 10,000 QPS.
     *
     * @example 1474335170000
     *
     * @var int
     */
    public $startTimestamp;

    /**
     * @description The number of domain names that can be bound to the DNS instance.
     *
     * @example 6
     *
     * @var int
     */
    public $subDomainLevel;

    /**
     * @description The list of ISP lines.
     *
     * @example 10
     *
     * @var int
     */
    public $TTLMinValue;

    /**
     * @description The UNIX timestamp representing when the DNS instance was purchased.
     *
     * @example 20
     *
     * @var int
     */
    public $URLForwardCount;

    /**
     * @description The number of monitoring tasks.
     *
     * @example version1
     *
     * @var string
     */
    public $versionCode;

    /**
     * @description The version code of the Alibaba Cloud DNS instance.
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'bindCount'             => 'BindCount',
        'bindDomainCount'       => 'BindDomainCount',
        'bindDomainUsedCount'   => 'BindDomainUsedCount',
        'bindUsedCount'         => 'BindUsedCount',
        'DDosDefendFlow'        => 'DDosDefendFlow',
        'DDosDefendQuery'       => 'DDosDefendQuery',
        'dnsSLBCount'           => 'DnsSLBCount',
        'dnsSecurity'           => 'DnsSecurity',
        'domain'                => 'Domain',
        'endTime'               => 'EndTime',
        'endTimestamp'          => 'EndTimestamp',
        'gslb'                  => 'Gslb',
        'ISPLines'              => 'ISPLines',
        'ISPRegionLines'        => 'ISPRegionLines',
        'inBlackHole'           => 'InBlackHole',
        'inClean'               => 'InClean',
        'instanceId'            => 'InstanceId',
        'monitorFrequency'      => 'MonitorFrequency',
        'monitorNodeCount'      => 'MonitorNodeCount',
        'monitorTaskCount'      => 'MonitorTaskCount',
        'overseaDDosDefendFlow' => 'OverseaDDosDefendFlow',
        'overseaLine'           => 'OverseaLine',
        'paymentType'           => 'PaymentType',
        'regionLines'           => 'RegionLines',
        'searchEngineLines'     => 'SearchEngineLines',
        'startTime'             => 'StartTime',
        'startTimestamp'        => 'StartTimestamp',
        'subDomainLevel'        => 'SubDomainLevel',
        'TTLMinValue'           => 'TTLMinValue',
        'URLForwardCount'       => 'URLForwardCount',
        'versionCode'           => 'VersionCode',
        'versionName'           => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindCount) {
            $res['BindCount'] = $this->bindCount;
        }
        if (null !== $this->bindDomainCount) {
            $res['BindDomainCount'] = $this->bindDomainCount;
        }
        if (null !== $this->bindDomainUsedCount) {
            $res['BindDomainUsedCount'] = $this->bindDomainUsedCount;
        }
        if (null !== $this->bindUsedCount) {
            $res['BindUsedCount'] = $this->bindUsedCount;
        }
        if (null !== $this->DDosDefendFlow) {
            $res['DDosDefendFlow'] = $this->DDosDefendFlow;
        }
        if (null !== $this->DDosDefendQuery) {
            $res['DDosDefendQuery'] = $this->DDosDefendQuery;
        }
        if (null !== $this->dnsSLBCount) {
            $res['DnsSLBCount'] = $this->dnsSLBCount;
        }
        if (null !== $this->dnsSecurity) {
            $res['DnsSecurity'] = $this->dnsSecurity;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->gslb) {
            $res['Gslb'] = $this->gslb;
        }
        if (null !== $this->ISPLines) {
            $res['ISPLines'] = $this->ISPLines;
        }
        if (null !== $this->ISPRegionLines) {
            $res['ISPRegionLines'] = $this->ISPRegionLines;
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
        if (null !== $this->monitorFrequency) {
            $res['MonitorFrequency'] = $this->monitorFrequency;
        }
        if (null !== $this->monitorNodeCount) {
            $res['MonitorNodeCount'] = $this->monitorNodeCount;
        }
        if (null !== $this->monitorTaskCount) {
            $res['MonitorTaskCount'] = $this->monitorTaskCount;
        }
        if (null !== $this->overseaDDosDefendFlow) {
            $res['OverseaDDosDefendFlow'] = $this->overseaDDosDefendFlow;
        }
        if (null !== $this->overseaLine) {
            $res['OverseaLine'] = $this->overseaLine;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->regionLines) {
            $res['RegionLines'] = $this->regionLines;
        }
        if (null !== $this->searchEngineLines) {
            $res['SearchEngineLines'] = $this->searchEngineLines;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->subDomainLevel) {
            $res['SubDomainLevel'] = $this->subDomainLevel;
        }
        if (null !== $this->TTLMinValue) {
            $res['TTLMinValue'] = $this->TTLMinValue;
        }
        if (null !== $this->URLForwardCount) {
            $res['URLForwardCount'] = $this->URLForwardCount;
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
     * @return dnsProduct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindCount'])) {
            $model->bindCount = $map['BindCount'];
        }
        if (isset($map['BindDomainCount'])) {
            $model->bindDomainCount = $map['BindDomainCount'];
        }
        if (isset($map['BindDomainUsedCount'])) {
            $model->bindDomainUsedCount = $map['BindDomainUsedCount'];
        }
        if (isset($map['BindUsedCount'])) {
            $model->bindUsedCount = $map['BindUsedCount'];
        }
        if (isset($map['DDosDefendFlow'])) {
            $model->DDosDefendFlow = $map['DDosDefendFlow'];
        }
        if (isset($map['DDosDefendQuery'])) {
            $model->DDosDefendQuery = $map['DDosDefendQuery'];
        }
        if (isset($map['DnsSLBCount'])) {
            $model->dnsSLBCount = $map['DnsSLBCount'];
        }
        if (isset($map['DnsSecurity'])) {
            $model->dnsSecurity = $map['DnsSecurity'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['Gslb'])) {
            $model->gslb = $map['Gslb'];
        }
        if (isset($map['ISPLines'])) {
            $model->ISPLines = $map['ISPLines'];
        }
        if (isset($map['ISPRegionLines'])) {
            $model->ISPRegionLines = $map['ISPRegionLines'];
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
        if (isset($map['MonitorFrequency'])) {
            $model->monitorFrequency = $map['MonitorFrequency'];
        }
        if (isset($map['MonitorNodeCount'])) {
            $model->monitorNodeCount = $map['MonitorNodeCount'];
        }
        if (isset($map['MonitorTaskCount'])) {
            $model->monitorTaskCount = $map['MonitorTaskCount'];
        }
        if (isset($map['OverseaDDosDefendFlow'])) {
            $model->overseaDDosDefendFlow = $map['OverseaDDosDefendFlow'];
        }
        if (isset($map['OverseaLine'])) {
            $model->overseaLine = $map['OverseaLine'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['RegionLines'])) {
            $model->regionLines = $map['RegionLines'];
        }
        if (isset($map['SearchEngineLines'])) {
            $model->searchEngineLines = $map['SearchEngineLines'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['SubDomainLevel'])) {
            $model->subDomainLevel = $map['SubDomainLevel'];
        }
        if (isset($map['TTLMinValue'])) {
            $model->TTLMinValue = $map['TTLMinValue'];
        }
        if (isset($map['URLForwardCount'])) {
            $model->URLForwardCount = $map['URLForwardCount'];
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
