<?php
/**
 * Event triggered when a queue member has finished servicing a caller in the queue.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAMI/
 *
 * Copyright 2011 Marcelo Gornstein <marcelog@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace PAMI\Message\Event;

use PAMI\Message\Event\EventMessage;

/**
 * Event triggered for the end of the list when an action Agents is issued.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAMI/
 */
class AgentCompleteEvent extends EventMessage
{
    public function getChannel()
    {
        return $this->getKey('Channel');
    }

    public function getChannelState()
    {
        return $this->getKey('ChannelState');
    }

    public function getChannelStateDesc()
    {
        return $this->getKey('ChannelStateDesc');
    }

    public function getCallerIDNum()
    {
        return $this->getKey('CallerIDNum');
    }

    public function getCallerIDName()
    {
        return $this->getKey('CallerIDName');
    }

    public function getConnectedLineNum()
    {
        return $this->getKey('ConnectedLineNum');
    }

    public function getConnectedLineName()
    {
        return $this->getKey('ConnectedLineName');
    }

    public function getLanguage()
    {
        return $this->getKey('Language');
    }

    public function getAccountCode()
    {
        return $this->getKey('AccountCode');
    }

    public function getContext()
    {
        return $this->getKey('Context');
    }

    public function getExten()
    {
        return $this->getKey('Exten');
    }

    public function getPriority()
    {
        return $this->getKey('Priority');
    }

    public function getUniqueid()
    {
        return $this->getKey('Uniqueid');
    }

    public function getLinkedid()
    {
        return $this->getKey('Linkedid');
    }

    public function getDestChannel()
    {
        return $this->getKey('DestChannel');
    }

    public function getDestChannelState()
    {
        return $this->getKey('DestChannelState');
    }

    public function getDestChannelStateDesc()
    {
        return $this->getKey('DestChannelStateDesc');
    }

    public function getDestCallerIDNum()
    {
        return $this->getKey('DestCallerIDNum');
    }

    public function getDestCallerIDName()
    {
        return $this->getKey('DestCallerIDName');
    }

    public function getDestConnectedLineNum()
    {
        return $this->getKey('DestConnectedLineNum');
    }

    public function getDestConnectedLineName()
    {
        return $this->getKey('DestConnectedLineName');
    }

    public function getDestLanguage()
    {
        return $this->getKey('DestLanguage');
    }

    public function getDestAccountCode()
    {
        return $this->getKey('DestAccountCode');
    }

    public function getDestContext()
    {
        return $this->getKey('DestContext');
    }

    public function getDestExten()
    {
        return $this->getKey('DestExten');
    }

    public function getDestPriority()
    {
        return $this->getKey('DestPriority');
    }

    public function getDestUniqueid()
    {
        return $this->getKey('DestUniqueid');
    }

    public function getDestLinkedid()
    {
        return $this->getKey('DestLinkedid');
    }

    public function getQueue()
    {
        return $this->getKey('Queue');
    }

    public function getMemberName()
    {
        return $this->getKey('MemberName');
    }

    public function getInterface()
    {
        return $this->getKey('Interface');
    }

    public function getHoldTime()
    {
        return $this->getKey('HoldTime');
    }

    public function getTalkTime()
    {
        return $this->getKey('TalkTime');
    }

    public function getReason()
    {
        return $this->getKey('Reason');
    }
}
