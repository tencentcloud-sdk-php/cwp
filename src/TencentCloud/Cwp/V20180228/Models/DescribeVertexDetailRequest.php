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
 * DescribeVertexDetail请求参数结构体
 *
 * @method array getVertexIds() 获取点id列表
 * @method void setVertexIds(array $VertexIds) 设置点id列表
 * @method string getIncidentId() 获取事件id
 * @method void setIncidentId(string $IncidentId) 设置事件id
 * @method string getTableName() 获取事件所在表名
 * @method void setTableName(string $TableName) 设置事件所在表名
 */
class DescribeVertexDetailRequest extends AbstractModel
{
    /**
     * @var array 点id列表
     */
    public $VertexIds;

    /**
     * @var string 事件id
     */
    public $IncidentId;

    /**
     * @var string 事件所在表名
     */
    public $TableName;

    /**
     * @param array $VertexIds 点id列表
     * @param string $IncidentId 事件id
     * @param string $TableName 事件所在表名
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
        if (array_key_exists("VertexIds",$param) and $param["VertexIds"] !== null) {
            $this->VertexIds = $param["VertexIds"];
        }

        if (array_key_exists("IncidentId",$param) and $param["IncidentId"] !== null) {
            $this->IncidentId = $param["IncidentId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
