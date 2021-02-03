<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody\previews\preview\switchInfos;

use AlibabaCloud\Tea\Model;

class switchInfo extends Model
{
    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'strategyName' => 'StrategyName',
        'content'      => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return switchInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
