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
 * CreateBanWhiteList请求参数结构体
 *
 * @method BanWhiteList getRules() 获取阻断规则
 * @method void setRules(BanWhiteList $Rules) 设置阻断规则
 * @method integer getEventId() 获取事件ID，事件列表加白名单时传递，白名单添加成功后，会将事件变成已加白状态
 * @method void setEventId(integer $EventId) 设置事件ID，事件列表加白名单时传递，白名单添加成功后，会将事件变成已加白状态
 */
class CreateBanWhiteListRequest extends AbstractModel
{
    /**
     * @var BanWhiteList 阻断规则
     */
    public $Rules;

    /**
     * @var integer 事件ID，事件列表加白名单时传递，白名单添加成功后，会将事件变成已加白状态
     */
    public $EventId;

    /**
     * @param BanWhiteList $Rules 阻断规则
     * @param integer $EventId 事件ID，事件列表加白名单时传递，白名单添加成功后，会将事件变成已加白状态
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = new BanWhiteList();
            $this->Rules->deserialize($param["Rules"]);
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
