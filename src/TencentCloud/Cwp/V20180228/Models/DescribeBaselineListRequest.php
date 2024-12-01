<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeBaselineList请求参数结构体
 *
 * @method integer getLimit() 获取分页参数 最大100条
 * @method void setLimit(integer $Limit) 设置分页参数 最大100条
 * @method integer getOffset() 获取分页参数
 * @method void setOffset(integer $Offset) 设置分页参数
 * @method array getFilters() 获取过滤条件。
<li>StrategyId- Uint64 - 基线策略id</li>
<li>Status - Uint64 - 处理状态1已通过 0未通过</li>
<li>Level - Uint64[] - 威胁等级</li>
<li>BaselineName  - String - 基线名称</li>
<li>Quuid- String - 主机quuid</li>
<li>Uuid- String - 主机uuid</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>StrategyId- Uint64 - 基线策略id</li>
<li>Status - Uint64 - 处理状态1已通过 0未通过</li>
<li>Level - Uint64[] - 威胁等级</li>
<li>BaselineName  - String - 基线名称</li>
<li>Quuid- String - 主机quuid</li>
<li>Uuid- String - 主机uuid</li>
 */
class DescribeBaselineListRequest extends AbstractModel
{
    /**
     * @var integer 分页参数 最大100条
     */
    public $Limit;

    /**
     * @var integer 分页参数
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>StrategyId- Uint64 - 基线策略id</li>
<li>Status - Uint64 - 处理状态1已通过 0未通过</li>
<li>Level - Uint64[] - 威胁等级</li>
<li>BaselineName  - String - 基线名称</li>
<li>Quuid- String - 主机quuid</li>
<li>Uuid- String - 主机uuid</li>
     */
    public $Filters;

    /**
     * @param integer $Limit 分页参数 最大100条
     * @param integer $Offset 分页参数
     * @param array $Filters 过滤条件。
<li>StrategyId- Uint64 - 基线策略id</li>
<li>Status - Uint64 - 处理状态1已通过 0未通过</li>
<li>Level - Uint64[] - 威胁等级</li>
<li>BaselineName  - String - 基线名称</li>
<li>Quuid- String - 主机quuid</li>
<li>Uuid- String - 主机uuid</li>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
