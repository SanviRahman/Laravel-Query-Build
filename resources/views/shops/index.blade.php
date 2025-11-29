@extends('welcome')
@section('content')
<div class="container mt-4">
    <h2>Shop List</h2>
    <a href="{{ route('shop.create') }}" class="btn btn-success mb-3">Add New Shop</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#SL</th>
                <th scope="col">Shope Name</th>
                <th scope="col">Shope Number</th>
                <th scope="col">Shope Address</th>
                <th scope="col">Shope Phone</th>
                <th scope="col">Shope Email</th>
                <th scope="col">Shop TIN</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shopList as $shop)
            <tr>
                <th scope="row">{{ $shop->id }}</th>
                <td>{{ $shop->shop_name }}</td>
                <td>{{ $shop->shop_number }}</td>
                <td>{{ $shop->shop_address }}</td>
                <td>{{ $shop->shop_phone }}</td>
                <td>{{ $shop->shop_email }}</td>
                <td>{{ $shop->shop_TIN }}</td>
                <td>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection