<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Member;

class WelcomeEmailNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }
    public function toMail($notifiable)
{
    $business = 'https://paystack.com/pay/msmefee';
    $starter = 'https://paystack.com/pay/startupfee';
    $membership = $this->member->membership_type;

    if($membership == 'Starter'){
        $url = $starter;
    }
    elseif($membership == 'Business'){
        $url = $business;
    }

    return (new MailMessage)
                    ->greeting('Hello, '.$this->member->name)
                    ->line('Thank you for registering with GCYEGH.')
                    ->line('Please follow the link below to proceed with payment for registration.')

                    ->action('Registration Payment', url($url))

                    ->line('If you were already redirected upon registration and have completed registration,')
                    ->line('Please ignore This Email')
                    ->line('Thank you.');
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
            //
        ];
    }
}
