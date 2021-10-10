<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Helper\Cart;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    public $cart;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->cart = new Cart();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('c2009g2@gmail.com')->view('emails.orders.shipped');
    }
}
