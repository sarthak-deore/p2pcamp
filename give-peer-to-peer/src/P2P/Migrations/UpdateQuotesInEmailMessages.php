<?php

namespace GiveP2P\P2P\Migrations;

use Give\Framework\Migrations\Contracts\Migration;
use Give_Email_Notifications;

/**
 * @since 1.6.7
 */
class UpdateQuotesInEmailMessages extends Migration
{
    /**
     * @inheritdoc
     */
    public static function id()
    {
        return 'give-p2p-update-quotes-in-email-messages';
    }

    /**
     * @inheritdoc
     */
    public static function title()
    {
        return __('Update quotes in Email Messages', 'give-peer-to-peer');
    }

    /**
     * @inheritdoc
     */
    public static function timestamp()
    {
        return strtotime('2023-10-10 20:00:00');
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $notifications = Give_Email_Notifications::get_instance()->get_email_notifications();

        foreach ($notifications as $notification) {
            $optionKey = $notification->config['id'] . '_email_message';

            if (strpos($notification->config['id'], 'p2p') !== 0) {
                continue;
            }

            $savedEmailMessage = give_get_option($optionKey);

            if (!$savedEmailMessage) {
                continue;
            }

            $newEmailMessage = str_replace(['"“', '"”', '“"', '”"', '“', '”'], '"', $savedEmailMessage);
            give_update_option($optionKey, $newEmailMessage);
        }
    }
}
