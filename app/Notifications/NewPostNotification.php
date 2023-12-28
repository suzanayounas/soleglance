<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Post;

class NewPostNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $post;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        //
        $this->post = $post;
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
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toDatabase($notifiable)
    {

        return [
            'message' => 'New post published',
            'post_id' => $this->post->id,
            'user_id' => $this->post->user_id,
            'post_content' => $this->post->post_content,
            'post_date' => $this->post->post_date,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'message' => 'A new post has been published by ' . $this->post->user->name,
        ];
    }
}
