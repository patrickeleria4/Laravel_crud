<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at','DESC')->get();
        
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'item_name' => 'required',
            'item_price' => 'required|numeric',
            'category' => 'required|in:Beverage,Tea,Food,Dessert',
            'item_quantity' => 'required|integer|min:1',
            // other validation rules
        ]);
        
        // Cast 'item_price' and 'item_quantity' to the correct data types
        $data['item_price'] = floatval($data['item_price']);
        $data['item_quantity'] = intval($data['item_quantity']);

         // Calculate the total price
    $totalPrice = $data['item_price'] * $data['item_quantity'];


        
        $product = new Product([
            'item_name' => $data['item_name'],
            'item_price' => $data['item_price'],
            'category' => $data['category'],
            'item_quantity' => $data['item_quantity'],
            'total_price' => $totalPrice, // Store the calculated total price
            // other product fields
        ]);
        
        $product->save();
        
    
        Log::info('Data before save:', $data);

        try {
            $product->save();
            Log::info('Data saved successfully.');
        } catch (\Exception $e) {
            Log::error('Error when saving product: ' . $e->getMessage());
        }
       

    
        return redirect()->route('product.index')->with('success', 'Product added successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $product= Product::findOrFail($id);

      return view('product.show', compact('product'));

     


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('product.edit', compact('product'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $product = Product::findOrFail($id);

    $data = $request->validate([
        'item_name' => 'required',
        'item_price' => 'required|numeric',
        'category' => 'required|in:Beverage,Tea,Food,Dessert',
        'item_quantity' => 'required|integer|min:1',
        // Add validation rules for other fields if needed
    ]);

    // Calculate the total price based on the updated item_price and item_quantity
    $totalPrice = $data['item_price'] * $data['item_quantity'];

    // Update the product attributes, including the calculated total_price
    $product->update([
        'item_name' => $data['item_name'],
        'item_price' => $data['item_price'],
        'category' => $data['category'],
        'item_quantity' => $data['item_quantity'],
        'total_price' => $totalPrice, // Update the total_price field
        // Update other fields as needed
    ]);

    // Redirect to a success page or return a response as needed
   
    return redirect()->route('product.index')->with('success', 'Product edit successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product Deleted successfully');
    }
}
