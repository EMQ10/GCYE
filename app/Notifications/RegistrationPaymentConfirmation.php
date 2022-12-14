<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Member;

class RegistrationPaymentConfirmation extends Notification
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
    public function toMail($notifiable)
    {
        $business = 'https://paystack.com/pay/msme';
        $starter = 'https://paystack.com/pay/startupdues1';
        $membership = $this->member->membership_type;
    
        if($membership == 'Starter'){
            $url = $starter;
        }
        elseif($membership == 'Business'){
            $url = $business;
        }
    
        return (new MailMessage)
                ->greeting('Hello, '.$this->member->name)
                ->line('Your registration payment has been confirmed successfully.')
                ->line('Please follow the link below to proceed with the payment of Your Dues.')

                ->action('Pay Dues', url('$url'))
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
