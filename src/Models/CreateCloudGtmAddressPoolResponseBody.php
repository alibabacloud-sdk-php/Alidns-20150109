<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudGtmAddressPoolResponseBody extends Model
{
    /**
     * @description The ID of the address pool. This ID uniquely identifies the address pool.
     *
     * @example pool-89528023225442**16
     *
     * @var string
     */
    public $addressPoolId;

    /**
     * @description Unique request identification code.
     *
     * @example 46973D4C-E3E4-4ABA-9190-9A9DE406C7E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the address pool creation operation was successful:
     * - false: Operation was failed
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'addressPoolId' => 'AddressPoolId',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudGtmAddressPoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
