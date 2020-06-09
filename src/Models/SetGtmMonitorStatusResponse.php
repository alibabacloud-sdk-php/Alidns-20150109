<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetGtmMonitorStatusResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        return $res;
    }
    /**
     * @param array $map
     * @return SetGtmMonitorStatusResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

}
