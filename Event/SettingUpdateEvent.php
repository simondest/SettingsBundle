<?php
namespace Dmishh\SettingsBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Dmishh\SettingsBundle\Entity\Setting;

/**
 * The order.placed event is dispatched each time an order is created
 * in the system.
 */
class SettingUpdateEvent extends Event
{
    const NAME = 'setting.updated';

    protected $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function getSetting()
    {
        return $this->setting;
    }
}

