<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainsRequest extends Model
{
    /**
     * @description The ID of the domain name group. If you do not specify this parameter, all domain names are queried by default.
     *
     * @example 2223
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The keyword for searches in "%KeyWord%" mode. The value is not case-sensitive.
     *
     * @example com
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description The language type.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-resourcegroupid01
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The search mode. Valid values:
     *
     *   **LIKE**: fuzzy match.
     *   **EXACT**: exact match.
     *
     * @example LIKE
     *
     * @var string
     */
    public $searchMode;

    /**
     * @description Specifies whether to query the starmark of the domain name.
     *
     * @example true
     *
     * @var bool
     */
    public $starmark;
    protected $_name = [
        'groupId' => 'GroupId',
        'keyWord' => 'KeyWord',
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
        'searchMode' => 'SearchMode',
        'starmark' => 'Starmark',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }
        if (null !== $this->starmark) {
            $res['Starmark'] = $this->starmark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }
        if (isset($map['Starmark'])) {
            $model->starmark = $map['Starmark'];
        }

        return $model;
    }
}
