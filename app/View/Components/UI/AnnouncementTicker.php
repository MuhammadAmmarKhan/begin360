<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class AnnouncementTicker extends Component
{
    public $messages;

    public function __construct($messages = [])
    {
        // Default messages if none are provided
        $this->messages = !empty($messages) ? $messages : [
            'Engineering Excellence',
            'Propelling Enterprise Success with Velocity',
            'Advanced ERP Implementation & Web Architecture',
            'Begin360: Your Strategic Technology Ally'
        ];
    }

    public function render()
    {
        return view('components.ui.announcement-ticker',['messages'=>$this->messages]);
    }
}
