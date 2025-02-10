<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheInstancesResponseBody\ispFlushCacheInstances;

use AlibabaCloud\Dara\Model;

class quotaInfo extends Model
{
    /**
     * @var int
     */
    public $instanceQuota;
    /**
     * @var int
     */
    public $instanceQuotaUsed;
    protected $_name = [
        'instanceQuota'     => 'InstanceQuota',
        'instanceQuotaUsed' => 'InstanceQuotaUsed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceQuota) {
            $res['InstanceQuota'] = $this->instanceQuota;
        }

        if (null !== $this->instanceQuotaUsed) {
            $res['InstanceQuotaUsed'] = $this->instanceQuotaUsed;
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
        if (isset($map['InstanceQuota'])) {
            $model->instanceQuota = $map['InstanceQuota'];
        }

        if (isset($map['InstanceQuotaUsed'])) {
            $model->instanceQuotaUsed = $map['InstanceQuotaUsed'];
        }

        return $model;
    }
}
