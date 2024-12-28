<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCart;
use App\Models\Supplier;
use Livewire\Component;

class Products extends Component
{
    public $categories;
    public $brands;
    public $suppliers;
    public $products;
    public $barcode;
    public $selected_cart;
    //Filters
    public $category = "";
    public $brand = "";
    public $supplier = "";
    //Listeners
    protected $listeners = ["updatedSelectedCart" => "selectedCartUpdated"];

    public function selectedCartUpdated($id)
    {
        $this->selected_cart = $id;
    }
    public function clean_filter()
    {
        $this->reset('category', 'brand', 'supplier');
    }
    public function updatedCategory()
    {
        $this->category = $this->category;
    }
    public function updatedBrand()
    {
        $this->brand = $this->brand;
    }
    public function updatedSupplier()
    {
        $this->supplier = $this->supplier;
    }
    public function mount()
    {
        $this->updatedProduct();
    }
    public function updatedProduct()
    {
        $this->categories = Category::all();
        $this->brands = Brand::all();
        $this->suppliers = Supplier::all();
        $products = Product::query();

        if ($this->category) {
            $products->where("category_id", $this->category);
        }
        if ($this->brand) {
            $products->where("brand_id", $this->brand);
        }
        if ($this->supplier) {
            $products->where("supplier", $this->supplier);
        }

        $this->products = $products->take(100)->get();
    }
    public function add_to_cart($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return;
        }

        $item = SubCart::where('product_id', $product->id)
            ->where('cart_id', $this->selected_cart)
            ->first();

        if ($item) {
            $item->quantity += 1;
        } else {
            $item = new SubCart;
            $item->product_id = $product->id;
            $item->cart_id = $this->selected_cart;
            $item->quantity = 1;
        }
        $item->save();
        $this->dispatch('cartUpdated');
    }

    public function search()
    {
        $product = Product::where('sku', $this->barcode)->first();
        if ($product) {
            $this->add_to_cart($product->id);
            $this->reset('barcode');
            $this->dispatch('cartUpdated');
        } else {
            $products = Product::where('name', 'like', "%$this->barcode%")->take(100)->get();
            $this->products = $products;
        }
    }
    public function render()
    {
        return view('livewire.products');
    }
}
