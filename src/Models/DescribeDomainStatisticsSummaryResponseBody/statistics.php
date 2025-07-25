<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsSummaryResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsSummaryResponseBody\statistics\statistic;
use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var statistic[]
     */
    public $statistic;
    protected $_name = [
        'statistic' => 'Statistic',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->statistic) {
            $res['Statistic'] = [];
            if (null !== $this->statistic && \is_array($this->statistic)) {
                $n = 0;
                foreach ($this->statistic as $item) {
                    $res['Statistic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Statistic'])) {
            if (!empty($map['Statistic'])) {
                $model->statistic = [];
                $n = 0;
                foreach ($map['Statistic'] as $item) {
                    $model->statistic[$n++] = null !== $item ? statistic::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
