<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNetAttackWhiteList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，最大值为100。
 * @method array getFilters() 获取过滤条件。
<li>IP - String - 是否必填：否 - 主机ip查询 </li>
<li>SrcIP- String - 是否必填：否 - 白名单ip查询 </li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>IP - String - 是否必填：否 - 主机ip查询 </li>
<li>SrcIP- String - 是否必填：否 - 白名单ip查询 </li>
 * @method string getOrder() 获取排序方式: [ASC:升序|DESC:降序]
 * @method void setOrder(string $Order) 设置排序方式: [ASC:升序|DESC:降序]
 * @method string getBy() 获取可选排序列: [CreateTime]
 * @method void setBy(string $By) 设置可选排序列: [CreateTime]
 */
class DescribeNetAttackWhiteListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，最大值为100。
     */
    public $Limit;

    /**
     * @var array 过滤条件。
<li>IP - String - 是否必填：否 - 主机ip查询 </li>
<li>SrcIP- String - 是否必填：否 - 白名单ip查询 </li>
     */
    public $Filters;

    /**
     * @var string 排序方式: [ASC:升序|DESC:降序]
     */
    public $Order;

    /**
     * @var string 可选排序列: [CreateTime]
     */
    public $By;

    /**
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，最大值为100。
     * @param array $Filters 过滤条件。
<li>IP - String - 是否必填：否 - 主机ip查询 </li>
<li>SrcIP- String - 是否必填：否 - 白名单ip查询 </li>
     * @param string $Order 排序方式: [ASC:升序|DESC:降序]
     * @param string $By 可选排序列: [CreateTime]
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
