<?php

namespace App\Notifications;

use App\Models\Friend;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FriendRequestAcceptedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $friend;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Friend $friend)
    {
        $this->friend = $friend;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'friend' => $this->friend,
            'message' => $this->friend->user->name . ' has accepted your friend request.',
        ];
    }
}
