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
 * 高危命令数据(新)
 *
 * @method integer getId() 获取数据ID
 * @method void setId(integer $Id) 设置数据ID
 * @method string getUuid() 获取主机安全ID
 * @method void setUuid(string $Uuid) 设置主机安全ID
 * @method string getQuuid() 获取主机ID
 * @method void setQuuid(string $Quuid) 设置主机ID
 * @method string getHostIp() 获取主机内网IP
 * @method void setHostIp(string $HostIp) 设置主机内网IP
 * @method string getUser() 获取执行用户名
 * @method void setUser(string $User) 设置执行用户名
 * @method integer getPlatform() 获取平台类型
 * @method void setPlatform(integer $Platform) 设置平台类型
 * @method string getBashCmd() 获取执行命令
 * @method void setBashCmd(string $BashCmd) 设置执行命令
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getRuleLevel() 获取规则等级：1-高 2-中 3-低
 * @method void setRuleLevel(integer $RuleLevel) 设置规则等级：1-高 2-中 3-低
 * @method integer getStatus() 获取处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3 = 已忽略
 * @method void setStatus(integer $Status) 设置处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3 = 已忽略
 * @method string getCreateTime() 获取发生时间
 * @method void setCreateTime(string $CreateTime) 设置发生时间
 * @method string getMachineName() 获取主机名
 * @method void setMachineName(string $MachineName) 设置主机名
 * @method integer getDetectBy() 获取0: bash日志 1: 实时监控(雷霆版)
 * @method void setDetectBy(integer $DetectBy) 设置0: bash日志 1: 实时监控(雷霆版)
 * @method string getPid() 获取进程id
 * @method void setPid(string $Pid) 设置进程id
 * @method string getExe() 获取进程名称
 * @method void setExe(string $Exe) 设置进程名称
 * @method string getModifyTime() 获取处理时间
 * @method void setModifyTime(string $ModifyTime) 设置处理时间
 * @method integer getRuleCategory() 获取规则类别  0=系统规则，1=用户规则
 * @method void setRuleCategory(integer $RuleCategory) 设置规则类别  0=系统规则，1=用户规则
 * @method string getRegexBashCmd() 获取转义后的正则表达式
 * @method void setRegexBashCmd(string $RegexBashCmd) 设置转义后的正则表达式
 * @method string getRegexExe() 获取转义后的正则表达式
 * @method void setRegexExe(string $RegexExe) 设置转义后的正则表达式
 * @method integer getMachineType() 获取0:普通 1:专业版 2:旗舰版
 * @method void setMachineType(integer $MachineType) 设置0:普通 1:专业版 2:旗舰版
 * @method MachineExtraInfo getMachineExtraInfo() 获取机器额外信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置机器额外信息
 */
class BashEventNew extends AbstractModel
{
    /**
     * @var integer 数据ID
     */
    public $Id;

    /**
     * @var string 主机安全ID
     */
    public $Uuid;

    /**
     * @var string 主机ID
     */
    public $Quuid;

    /**
     * @var string 主机内网IP
     */
    public $HostIp;

    /**
     * @var string 执行用户名
     */
    public $User;

    /**
     * @var integer 平台类型
     */
    public $Platform;

    /**
     * @var string 执行命令
     */
    public $BashCmd;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 规则等级：1-高 2-中 3-低
     */
    public $RuleLevel;

    /**
     * @var integer 处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3 = 已忽略
     */
    public $Status;

    /**
     * @var string 发生时间
     */
    public $CreateTime;

    /**
     * @var string 主机名
     */
    public $MachineName;

    /**
     * @var integer 0: bash日志 1: 实时监控(雷霆版)
     */
    public $DetectBy;

    /**
     * @var string 进程id
     */
    public $Pid;

    /**
     * @var string 进程名称
     */
    public $Exe;

    /**
     * @var string 处理时间
     */
    public $ModifyTime;

    /**
     * @var integer 规则类别  0=系统规则，1=用户规则
     */
    public $RuleCategory;

    /**
     * @var string 转义后的正则表达式
     */
    public $RegexBashCmd;

    /**
     * @var string 转义后的正则表达式
     */
    public $RegexExe;

    /**
     * @var integer 0:普通 1:专业版 2:旗舰版
     */
    public $MachineType;

    /**
     * @var MachineExtraInfo 机器额外信息
     */
    public $MachineExtraInfo;

    /**
     * @param integer $Id 数据ID
     * @param string $Uuid 主机安全ID
     * @param string $Quuid 主机ID
     * @param string $HostIp 主机内网IP
     * @param string $User 执行用户名
     * @param integer $Platform 平台类型
     * @param string $BashCmd 执行命令
     * @param integer $RuleId 规则ID
     * @param string $RuleName 规则名称
     * @param integer $RuleLevel 规则等级：1-高 2-中 3-低
     * @param integer $Status 处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3 = 已忽略
     * @param string $CreateTime 发生时间
     * @param string $MachineName 主机名
     * @param integer $DetectBy 0: bash日志 1: 实时监控(雷霆版)
     * @param string $Pid 进程id
     * @param string $Exe 进程名称
     * @param string $ModifyTime 处理时间
     * @param integer $RuleCategory 规则类别  0=系统规则，1=用户规则
     * @param string $RegexBashCmd 转义后的正则表达式
     * @param string $RegexExe 转义后的正则表达式
     * @param integer $MachineType 0:普通 1:专业版 2:旗舰版
     * @param MachineExtraInfo $MachineExtraInfo 机器额外信息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("BashCmd",$param) and $param["BashCmd"] !== null) {
            $this->BashCmd = $param["BashCmd"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("DetectBy",$param) and $param["DetectBy"] !== null) {
            $this->DetectBy = $param["DetectBy"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RuleCategory",$param) and $param["RuleCategory"] !== null) {
            $this->RuleCategory = $param["RuleCategory"];
        }

        if (array_key_exists("RegexBashCmd",$param) and $param["RegexBashCmd"] !== null) {
            $this->RegexBashCmd = $param["RegexBashCmd"];
        }

        if (array_key_exists("RegexExe",$param) and $param["RegexExe"] !== null) {
            $this->RegexExe = $param["RegexExe"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
