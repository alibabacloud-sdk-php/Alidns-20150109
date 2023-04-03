<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDNSSLBStatusRequest extends Model
{
    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The language of the subdomain.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example telecom
     *
     * @var string
     */
    public $line;

    /**
     * @description Specifies whether to enable or disable weighted round-robin. Valid values:
     *
     *   **true**: enables weighted round-robin. This is the default value.
     *   **false**: disables weighted round-robin.
     *
     * @example true
     *
     * @var bool
     */
    public $open;

    /**
     * @description The subdomain for which you want to configure weighted round-robin. Do not set the value to a string such as aliyun.com. Instead, set the value to @.aliyun.com.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description The type of the DNS record. Valid values: A and AAAA. Default value: A.
     *
     * @example A
     *
     * @var string
     */
    public $type;

    /**
     * @description The IP address of the client that you use to configure weighted round-robin.
     *
     * @example 192.0.2.0
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName'   => 'DomainName',
        'lang'         => 'Lang',
        'line'         => 'Line',
        'open'         => 'Open',
        'subDomain'    => 'SubDomain',
        'type'         => 'Type',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDNSSLBStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
