<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponseBody;

use AlibabaCloud\Tea\Model;

class addrPools extends Model
{
    /**
     * @var string
     */
    public $addrPoolId;

    /**
     * @var string
     */
    public $addrPoolName;
    protected $_name = [
        'addrPoolId'   => 'AddrPoolId',
        'addrPoolName' => 'AddrPoolName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->addrPoolName) {
            $res['AddrPoolName'] = $this->addrPoolName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addrPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['AddrPoolName'])) {
            $model->addrPoolName = $map['AddrPoolName'];
        }

        return $model;
    }
}
