@extends('layouts.app')

@section('title', 'Connect with Begin360 | Strategic Consultation & Enterprise Partnerships')
@section('meta_title', 'Contact Us - Begin360: Architect Your Digital Transformation')
@section('meta_description', 'Reach out to Begin360 to discuss high-end ERP architecture, Odoo implementation, or custom digital infrastructure. Engage with our specialists to engineer your enterprise\'s future.')
@section('meta_keywords', 'Contact Begin360, ERP Consultation, Odoo Implementation Partner, Business Infrastructure Inquiry, Enterprise Digital Strategy, Australia ERP Experts.')
@push('styles')

@endpush
@section('content')
    @php
        $heroData = [
            'badge' => '— Initiate Your Architectural Transformation —',
            'heading_start' => 'Let’s Engineer the Future of Your',
            'dynamic_word' => 'Enterprise',
            'description' => "Generic solutions are built for the average-rigid, fragmented, and scaling with friction. At <b>Begin360</b>, we believe your digital infrastructure should be as unique as your vision. <br/><br/>We don't just implement software; we architect ecosystems that breathe with your business. Whether you are seeking a sovereign Odoo implementation or a complete overhaul of your digital operating system, our consultants are ready to translate your operational complexity into glass-clear efficiency.",
            'primary_btn' => [
                'text' => 'Talk to Us',
                'url' => 'tel:'.env('COMPANY_PHONE'),
                'icon' => 'fa-phone'
            ],
            'secondary_btn' => [
                'text' => 'Have a Look',
                'url' => url('/contact'),
                'icon' => 'fa-play'
            ],
            'scroll_text' => 'Scroll to see the transformation'
        ];
    @endphp    
    <x-about-hero :heroData="$heroData"/>  
@endsection
@push('scripts')

@endpush