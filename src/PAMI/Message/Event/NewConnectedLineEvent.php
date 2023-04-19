<?php
/**
 * Event triggered when a channel's connected line information is changed.
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
class NewConnectedLineEvent extends EventMessage
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
}
