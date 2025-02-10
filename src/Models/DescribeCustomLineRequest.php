<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeCustomLineRequest extends Model
{
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $lineId;
    protected $_name = [
        'lang'   => 'Lang',
        'lineId' => 'LineId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }

        return $model;
    }
}
