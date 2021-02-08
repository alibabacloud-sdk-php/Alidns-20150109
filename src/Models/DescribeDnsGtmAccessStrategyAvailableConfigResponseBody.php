<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\domainAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\ipv4AddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\ipv6AddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\lines;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\selectedDomainLines;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\selectedIpv4Lines;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\selectedIpv6Lines;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAccessStrategyAvailableConfigResponseBody extends Model
{
    /**
     * @var selectedDomainLines
     */
    public $selectedDomainLines;

    /**
     * @var domainAddrPools
     */
    public $domainAddrPools;

    /**
     * @var ipv4AddrPools
     */
    public $ipv4AddrPools;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var selectedIpv4Lines
     */
    public $selectedIpv4Lines;

    /**
     * @var ipv6AddrPools
     */
    public $ipv6AddrPools;

    /**
     * @var bool
     */
    public $suggestSetDefaultLine;

    /**
     * @var selectedIpv6Lines
     */
    public $selectedIpv6Lines;

    /**
     * @var lines
     */
    public $lines;
    protected $_name = [
        'selectedDomainLines'   => 'SelectedDomainLines',
        'domainAddrPools'       => 'DomainAddrPools',
        'ipv4AddrPools'         => 'Ipv4AddrPools',
        'requestId'             => 'RequestId',
        'selectedIpv4Lines'     => 'SelectedIpv4Lines',
        'ipv6AddrPools'         => 'Ipv6AddrPools',
        'suggestSetDefaultLine' => 'SuggestSetDefaultLine',
        'selectedIpv6Lines'     => 'SelectedIpv6Lines',
        'lines'                 => 'Lines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectedDomainLines) {
            $res['SelectedDomainLines'] = null !== $this->selectedDomainLines ? $this->selectedDomainLines->toMap() : null;
        }
        if (null !== $this->domainAddrPools) {
            $res['DomainAddrPools'] = null !== $this->domainAddrPools ? $this->domainAddrPools->toMap() : null;
        }
        if (null !== $this->ipv4AddrPools) {
            $res['Ipv4AddrPools'] = null !== $this->ipv4AddrPools ? $this->ipv4AddrPools->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->selectedIpv4Lines) {
            $res['SelectedIpv4Lines'] = null !== $this->selectedIpv4Lines ? $this->selectedIpv4Lines->toMap() : null;
        }
        if (null !== $this->ipv6AddrPools) {
            $res['Ipv6AddrPools'] = null !== $this->ipv6AddrPools ? $this->ipv6AddrPools->toMap() : null;
        }
        if (null !== $this->suggestSetDefaultLine) {
            $res['SuggestSetDefaultLine'] = $this->suggestSetDefaultLine;
        }
        if (null !== $this->selectedIpv6Lines) {
            $res['SelectedIpv6Lines'] = null !== $this->selectedIpv6Lines ? $this->selectedIpv6Lines->toMap() : null;
        }
        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmAccessStrategyAvailableConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectedDomainLines'])) {
            $model->selectedDomainLines = selectedDomainLines::fromMap($map['SelectedDomainLines']);
        }
        if (isset($map['DomainAddrPools'])) {
            $model->domainAddrPools = domainAddrPools::fromMap($map['DomainAddrPools']);
        }
        if (isset($map['Ipv4AddrPools'])) {
            $model->ipv4AddrPools = ipv4AddrPools::fromMap($map['Ipv4AddrPools']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SelectedIpv4Lines'])) {
            $model->selectedIpv4Lines = selectedIpv4Lines::fromMap($map['SelectedIpv4Lines']);
        }
        if (isset($map['Ipv6AddrPools'])) {
            $model->ipv6AddrPools = ipv6AddrPools::fromMap($map['Ipv6AddrPools']);
        }
        if (isset($map['SuggestSetDefaultLine'])) {
            $model->suggestSetDefaultLine = $map['SuggestSetDefaultLine'];
        }
        if (isset($map['SelectedIpv6Lines'])) {
            $model->selectedIpv6Lines = selectedIpv6Lines::fromMap($map['SelectedIpv6Lines']);
        }
        if (isset($map['Lines'])) {
            $model->lines = lines::fromMap($map['Lines']);
        }

        return $model;
    }
}
