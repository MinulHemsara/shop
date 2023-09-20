

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h1>All Products</h1>

<style>
    /* Add some basic styling to the table */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Style the action buttons */
    .action-buttons a {
        text-decoration: none;
        margin-right: 10px;
        padding: 5px 10px;
        border: 1px solid #007bff;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
    }

    .action-buttons a:hover {
        background-color: #0056b3;
    }

    .action-buttons form {
        display: inline;
    }

    .action-buttons button {
        margin: 0;
        padding: 5px 10px;
        border: none;
        background-color: #dc3545;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }

    .action-buttons button:hover {
        background-color: #c82333;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category->name }}</td>
                <td class="action-buttons">
                    <a href="{{ route('products.edit', $product) }}">Edit</a>
                    <form method="POST" action="{{ route('products.destroy', $product) }}" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
