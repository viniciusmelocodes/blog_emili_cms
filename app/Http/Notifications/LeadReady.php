<?php

namespace App\Notifications;

use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Notifications\Notification;

class LeadReady extends Notification
{
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to($notifiable->routes['telegram_user_id'])
            ->content($notifiable->routes['message']);
    }
}
