<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class AutoDatePlugin
 * @package Grav\Plugin
 */
class AddModifiedPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onAdminCreatePageFrontmatter' => ['onAdminCreatePageFrontmatter', 0],
            'onAdminSave' => ['onAdminSave', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onAdminCreatePageFrontmatter(Event $event)
    {
        $header = $event['header'];
        if (!isset($header['modified'])) {
            $header['modified'] = date($this->grav['config']->get('system.pages.dateformat.default', 'H:i d-m-Y'));
            $event['header'] = $header;
        }
    }

    /**
     * Set datetime when mod page
     */
    public function onAdminSave(Event $event)
    {
        $obj = $event['object'];
        $header = $obj['header'];
        $header['modified'] = date($this->grav['config']->get('system.pages.dateformat.default', 'H:i d-m-Y'));
        $obj['header'] = $header;
        $event['object'] = $obj;
    }
}
