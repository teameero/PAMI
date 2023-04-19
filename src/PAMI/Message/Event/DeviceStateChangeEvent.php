<?php
/**
 * Triggered when a device state change is detected.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     René Burow Sørensen <rene@eero.dk>
 * @license    https://github.com/teameero/PAMI Apache License 2.0
 * @version    SVN: $Id$
 * @link       https://github.com/teameero/PAMI
 *
 * Copyright 2023 René Burow Sørensen <rene@eero.dk>
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
 * Triggered when a hangup is detected.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     René Burow Sørensen <rene@eero.dk>
 * @license    https://github.com/teameero/PAMI Apache License 2.0
 * @link       https://github.com/teameero/PAMI
 */
class DeviceStateChangeEvent extends EventMessage
{
    /**
     * Returns key: 'Device'.
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->getKey('Device');
    }

    /**
     * Returns key: 'State'.
     *
     * @return string
     */
    public function getState()
    {
        return $this->getKey('State');
    }
}
