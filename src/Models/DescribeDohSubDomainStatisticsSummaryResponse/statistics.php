<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohSubDomainStatisticsSummaryResponse;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var int
     */
    public $v4HttpCount;

    /**
     * @var int
     */
    public $v6HttpCount;

    /**
     * @var int
     */
    public $v4HttpsCount;

    /**
     * @var int
     */
    public $v6HttpsCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $ipCount;

    /**
     * @var int
     */
    public $httpCount;

    /**
     * @var int
     */
    public $httpsCount;
    protected $_name = [
        'subDomain'    => 'SubDomain',
        'v4HttpCount'  => 'V4HttpCount',
        'v6HttpCount'  => 'V6HttpCount',
        'v4HttpsCount' => 'V4HttpsCount',
        'v6HttpsCount' => 'V6HttpsCount',
        'totalCount'   => 'TotalCount',
        'ipCount'      => 'IpCount',
        'httpCount'    => 'HttpCount',
        'httpsCount'   => 'HttpsCount',
    ];

    public function validate()
    {
        Model::validateRequired('subDomain', $this->subDomain, true);
        Model::validateRequired('v4HttpCount', $this->v4HttpCount, true);
        Model::validateRequired('v6HttpCount', $this->v6HttpCount, true);
        Model::validateRequired('v4HttpsCount', $this->v4HttpsCount, true);
        Model::validateRequired('v6HttpsCount', $this->v6HttpsCount, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('ipCount', $this->ipCount, true);
        Model::validateRequired('httpCount', $this->httpCount, true);
        Model::validateRequired('httpsCount', $this->httpsCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->v4HttpCount) {
            $res['V4HttpCount'] = $this->v4HttpCount;
        }
        if (null !== $this->v6HttpCount) {
            $res['V6HttpCount'] = $this->v6HttpCount;
        }
        if (null !== $this->v4HttpsCount) {
            $res['V4HttpsCount'] = $this->v4HttpsCount;
        }
        if (null !== $this->v6HttpsCount) {
            $res['V6HttpsCount'] = $this->v6HttpsCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }
        if (null !== $this->httpCount) {
            $res['HttpCount'] = $this->httpCount;
        }
        if (null !== $this->httpsCount) {
            $res['HttpsCount'] = $this->httpsCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['V4HttpCount'])) {
            $model->v4HttpCount = $map['V4HttpCount'];
        }
        if (isset($map['V6HttpCount'])) {
            $model->v6HttpCount = $map['V6HttpCount'];
        }
        if (isset($map['V4HttpsCount'])) {
            $model->v4HttpsCount = $map['V4HttpsCount'];
        }
        if (isset($map['V6HttpsCount'])) {
            $model->v6HttpsCount = $map['V6HttpsCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }
        if (isset($map['HttpCount'])) {
            $model->httpCount = $map['HttpCount'];
        }
        if (isset($map['HttpsCount'])) {
            $model->httpsCount = $map['HttpsCount'];
        }

        return $model;
    }
}
