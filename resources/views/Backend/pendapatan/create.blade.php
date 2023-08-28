@extends('backend.layouts.index')
@section('container')
<div class="content-wrapper">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .product-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
        .product:hover {
            background-color: #f0f0f0;
        }
        .cart {
            border: 1px solid #ccc;
            padding: 20px;
            margin-top: 20px;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 5px;
            border-bottom: 1px solid #ccc;
        }
        .total {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>

    <div class="container">
        <h1>Kasir</h1>
        <div class="product-list">
            <div class="product" data-name="Produk 1" data-price="10">Produk 1<br>$10</div>
            <div class="product" data-name="Produk 2" data-price="15">Produk 2<br>$15</div>
            <div class="product" data-name="Produk 3" data-price="20">Produk 3<br>$20</div>
        </div>
        <div class="cart">
            <h2>Keranjang</h2>
            <div class="cart-items"></div>
            <div class="total">Total: $0</div>
        </div>
    </div>

    <script>
        const products = document.querySelectorAll('.product');
        const cartItems = document.querySelector('.cart-items');
        const totalElement = document.querySelector('.total');

        let total = 0;
        products.forEach(product => {
            product.addEventListener('click', () => {
                const name = product.dataset.name;
                const price = parseFloat(product.dataset.price);
                total += price;
                totalElement.textContent = `Total: $${total}`;
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <div>${name}</div>
                    <div>$${price}</div>
                `;
                cartItems.appendChild(cartItem);
            });
        });
    </script>

</div>
@endsection
