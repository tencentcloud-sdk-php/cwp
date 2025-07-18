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
 * DeleteBaselineWeakPassword请求参数结构体
 *
 * @method array getPasswordIds() 获取弱口令Id
 * @method void setPasswordIds(array $PasswordIds) 设置弱口令Id
 */
class DeleteBaselineWeakPasswordRequest extends AbstractModel
{
    /**
     * @var array 弱口令Id
     */
    public $PasswordIds;

    /**
     * @param array $PasswordIds 弱口令Id
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
        if (array_key_exists("PasswordIds",$param) and $param["PasswordIds"] !== null) {
            $this->PasswordIds = $param["PasswordIds"];
        }
    }
}
