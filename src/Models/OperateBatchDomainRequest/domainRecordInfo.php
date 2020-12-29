<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainRequest;

use AlibabaCloud\Tea\Model;

class domainRecordInfo extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $newRr;

    /**
     * @var string
     */
    public $rr;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $newType;

    /**
     * @var string
     */
    public $newValue;
    protected $_name = [
        'type'     => 'Type',
        'value'    => 'Value',
        'ttl'      => 'Ttl',
        'domain'   => 'Domain',
        'line'     => 'Line',
        'newRr'    => 'NewRr',
        'rr'       => 'Rr',
        'priority' => 'Priority',
        'newType'  => 'NewType',
        'newValue' => 'NewValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->newRr) {
            $res['NewRr'] = $this->newRr;
        }
        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->newType) {
            $res['NewType'] = $this->newType;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainRecordInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['NewRr'])) {
            $model->newRr = $map['NewRr'];
        }
        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['NewType'])) {
            $model->newType = $map['NewType'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }

        return $model;
    }
}
