<?php
namespace Dmishh\SettingsBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Dmishh\SettingsBundle\Entity\Setting;
use Dmishh\SettingsBundle\Manager\SettingsManager;

/**
 * The order.placed event is dispatched each time an order is created
 * in the system.
 */
class SettingUpdateEvent extends Event
{
    const NAME = 'setting.updated';

    protected $setting;
    protected $settingManager;

    public function __construct(Setting $setting, SettingsManager $settingManager)
    {
        $this->setting = $setting;
        $this->settingManager = $settingManager;
    }

    public function getSetting()
    {
        return $this->settingManager->get($this->setting->getName());
    }
}

