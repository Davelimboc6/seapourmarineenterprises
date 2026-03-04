<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDetail extends Component
{
    public Product $product;
    public string $activeImage = '';

    public function mount(string $slug): void
    {
        $this->product   = Product::with(['category', 'images'])->where('slug', $slug)->firstOrFail();
        $this->activeImage = $this->product->image ?? '';
    }

    public function setImage(string $image): void
    {
        $this->activeImage = $image;
    }

    public function render()
    {
        return view('livewire.product-detail')
            ->layout('layouts.app', [
                'title' => $this->product->name ?? 'Product Detail',
            ]);
    }
}