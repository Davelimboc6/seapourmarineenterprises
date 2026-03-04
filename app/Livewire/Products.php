<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class Products extends Component
{
    public string $search = '';
    public string $selectedCategory = 'All';

    public function getFilteredProductsProperty()
    {
        return Product::with('category')
            ->when(
                $this->search,
                fn ($q) => $q->where('name', 'like', '%' . $this->search . '%')
            )
            ->when(
                $this->selectedCategory !== 'All',
                fn ($q) => $q->whereHas(
                    'category',
                    fn ($q2) => $q2->where('name', $this->selectedCategory)
                )
            )
            ->get();
    }

    public function getCategoriesProperty()
    {
        return collect(['All'])->merge(Category::orderBy('name')->pluck('name'));
    }

    public function goToProduct(string $slug): void
    {
        $this->redirect(route('products.show', $slug));
    }

    public function render()
    {
       return view('livewire.products')
            ->layout('layouts.app', [
                'title' => 'Products',
            ]);
    }
}




