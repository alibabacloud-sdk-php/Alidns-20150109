<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceSystemCnameResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $systemCname;
    protected $_name = [
        'requestId'   => 'RequestId',
        'systemCname' => 'SystemCname',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemCname) {
            $res['SystemCname'] = $this->systemCname;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmInstanceSystemCnameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemCname'])) {
            $model->systemCname = $map['SystemCname'];
        }

        return $model;
    }
}
