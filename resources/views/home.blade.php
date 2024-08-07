@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1>Dashboard</h1>
<div class="items">
    <div class="item">
        <img src="{{ asset('images/product1.jpg') }}" alt="Product 1">
        <h2>Product A</h2>
        <p>Price: $100</p>
        <p>Description: A high-quality product.</p>
        <button>Add to Cart</button>
        <button>View Product</button>
    </div>
    <div class="item">
        <img src="{{ asset('images/product2.jpg') }}" alt="Product 2">
        <h2>Product B</h2>
        <p>Price: $200</p>
        <p>Description: Another great product.</p>
        <button>Add to Cart</button>
        <button>View Product</button>
    </div>
    <div class="item">
        <img src="{{ asset('images/product3.jpg') }}" alt="Product 3">
        <h2>Product C</h2>
        <p>Price: $300</p>
        <p>Description: The best product ever.</p>
        <button>Add to Cart</button>
        <button>View Product</button>
    </div>
    <!-- Add more items as needed -->
</div>
<style>
    .items {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: space-around;
    }
    .item {
        background-color: #eee;
        padding: 1rem;
        margin: 0.5rem;
        width: calc(25% - 1rem);
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        text-align: center;
        border-radius: 8px;
    }
    .item img {
        max-width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
    }
    .item h2 {
        font-size: 1.2rem;
        margin: 0.5rem 0;
    }
    .item p {
        font-size: 0.9rem;
        margin: 0.5rem 0;
    }
    .item button {
        margin-top: 0.5rem;
        padding: 0.5rem 1rem;
        border: none;
        background-color: #333;
        color: #fff;
        cursor: pointer;
        border-radius: 4px;
    }
    .item button:hover {
        background-color: #555;
    }
</style>
@endsection
