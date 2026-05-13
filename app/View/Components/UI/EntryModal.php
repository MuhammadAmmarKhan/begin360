<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class EntryModal extends Component
{
    // Must be public to be accessible in Blade
    public array $data;

    public function __construct($data = [])
    {
        $this->data = array_merge([
    'sub_heading' => 'From Complexity to Clarity',
    'heading'     => 'Velocity <span class="section-accent fraunces text-accent fw-light">Synchronized</span>',
    'paragraph'   => 'Propel your enterprise into the next tier of operational efficiency. We architect custom Odoo ecosystems designed to eliminate friction and accelerate your digital trajectory.',
    'image_url'   => asset('assets/images/entrymodalrocket.png'),
    'button_text' => 'Initialize Launch <i class="fa fa-rocket"></i>',
    'button_url'  => route('contact')
], $data);
    }

    public function render()
    {
        return view('components.ui.entry-modal', [
        'data' => $this->data
    ]);
    }
}
