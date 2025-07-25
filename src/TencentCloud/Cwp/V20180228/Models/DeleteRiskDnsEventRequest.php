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
 * DeleteRiskDnsEvent请求参数结构体
 *
 * @method array getIds() 获取恶意请求记录ID数组，(最大100条), 为空时全部删除
 * @method void setIds(array $Ids) 设置恶意请求记录ID数组，(最大100条), 为空时全部删除
 */
class DeleteRiskDnsEventRequest extends AbstractModel
{
    /**
     * @var array 恶意请求记录ID数组，(最大100条), 为空时全部删除
     */
    public $Ids;

    /**
     * @param array $Ids 恶意请求记录ID数组，(最大100条), 为空时全部删除
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }
    }
}
