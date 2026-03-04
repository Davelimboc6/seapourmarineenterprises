<?php

namespace App\Livewire;

use Livewire\Component;

class News extends Component
{
    public $newsItems = [];  // Must be public for Blade access

    public function mount()
    {
        $this->newsItems = [  // Now ALL 9 items (copy from your NewsDetail)
            [
                'slug' => 'mtkr-jason-bradley-oil-leak-incident-shakes-mariveles-bataan-immediate-response-initiated',
                'title' => 'MTKR Jason Bradley Oil Leak Incident Shakes Mariveles, Bataan: Immediate Response Initiated',
                'date' => 'July 29, 2024',
                'image' => '/images/news/oil_leak_incident_mariveles_bulacan.jpg',
                'excerpt' => 'The MTKR Jason Bradley incident occurred off the coast of Mariveles, Bataan, where the vessel sank and released diesel fuel into the sea. Initial reports from the shipping company claimed no cargo fuel was onboard.'
            ],
            [
                'slug' => 'mt-terranova-bataan-oil-spill-current-status-sea-pour-marine-enterprises-role',
                'title' => 'MT Terranova Bataan Oil Spill: Current Status and Sea Pour Marine Enterprises’ Role',
                'date' => 'July 28, 2024',
                'image' => '/images/news/mt-terranova.jpg',
                'excerpt' => 'The recent oil spill from the MT Terranova off the coast of Bataan has raised significant environmental concerns, affecting marine life and local communities. The spill, which began earlier this month, has necessitated immediate and comprehensive action to prevent extensive damage to the ecosystem.'
            ],
            [
                'slug' => 'turning-the-tide-sea-pour-marine-enterprises-mt-princess-empress-oil-spill',
                'title' => 'Turning the Tide: Sea Pour Marine Enterprises and the MT Princess Empress Oil Spill',
                'date' => 'July 27, 2024',
                'image' => '/images/news/mt-princess-empress.jpg',
                'excerpt' => 'In the serene waters off the coast, where the azure waves dance under the golden sun, disaster struck. The MT Princess Empress, a vessel that had once proudly sailed these seas, encountered an unforeseen calamity.'
            ],
            [
                'slug' => 'responding-to-crisis-sea-pour-marine-enterprises-aiding-guimaras-oil-spill-clean-up',
                'title' => 'Responding to Crisis: How Sea Pour Marine Enterprises is Aiding in the Guimaras Oil Spill Clean-Up',
                'date' => 'July 26, 2024',
                'image' => '/images/news/guimaras-oil-spill.webp',
                'excerpt' => 'On August 11, 2006, the beautiful island province of Guimaras in the Philippines experienced a devastating environmental disaster when an oil tanker, MT Solar 1, sank off its coast.

'
            ],
            [
                'slug' => 'essential-guide-oil-siltation-booms-protecting-waterways',
                'title' => 'The Essential Guide to Oil Siltation Booms: Protecting Our Waterways',
                'date' => 'July 22, 2024',
                'image' => '/images/siltation-boom.png',
                'excerpt' => 'Water pollution remains one of the most pressing environmental issues of our time. Among the many threats to our waterways, oil spills and sedimentation from construction and dredging activities stand out due to their immediate and long-term impacts on aquatic ecosystems.'
            ],
            [
                'slug' => 'journey-hdpe-dredging-pipes-stories-field',
                'title' => 'The Journey of HDPE Dredging Pipes: Stories from the Field',
                'date' => 'July 16, 2024',
                'image' => '/images/news/hdpe-pipes.png',
                'excerpt' => 'High-Density Polyethylene (HDPE) pipes have revolutionized the dredging industry. Known for their durability, flexibility, and resilience, these pipes have been pivotal in numerous successful dredging projects around the globe.'
            ],
            [
                'slug' => 'exploring-versatility-benefits-pe-pipe-floaters',
                'title' => 'Exploring the Versatility and Benefits of PE Pipe Floaters',
                'date' => 'July 11, 2024',
                'image' => '/images/pe-pipe-floater.png',
                'excerpt' => 'In the dynamic world of marine and offshore industries, the efficient and secure handling of pipes is paramount. One innovation that has revolutionized this aspect is the PE (Polyethylene) pipe floater.'
            ],
            [
                'slug' => 'fire-extinguishers-essential-guide-fire-safety',
                'title' => 'Fire Extinguishers: Your Essential Guide to Fire Safety',
                'date' => 'July 3, 2024',
                'image' => '/images/news/fire-extinguishers.png',
                'excerpt' => 'Fire safety is extremely important in homes and workplaces, and the fire extinguisher is a crucial tool for preventing and handling fires. This small device can make a big difference, turning a small accident into a major disaster.'
            ],
            [
                'slug' => 'unsung-hero-environmental-disasters-oil-spill-boom',
                'title' => 'The Unsung Hero of Environmental Disasters: The Oil Spill Boom',
                'date' => 'July 27, 2024',
                'image' => '/images/news/oil-spill-boom.png',
                'excerpt' => 'Oil spills are catastrophic events that wreak havoc on marine life, coastal ecosystems, and human communities. When these disasters strike, the response must be swift and effective to minimize damage.'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.news')  // Your existing news.blade.php
            ->layout('layouts.app', ['title' => 'News & Insights']);
    }
}