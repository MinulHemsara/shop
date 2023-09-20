@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<style>
    /* Style the form container */
    .form-container {
        width: 50%;
        margin: 0 auto;
    }

    /* Style form elements */
    form {
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    select {
        height: 40px;
    }

    button[type="submit"] {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>


<h1>Edit Product</h1>

<form method="POST" action="{{ route('products.update', $product) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>
    </div>
    <div>
        <label for="description">Product Description:</label>
        <textarea name="description" id="description" required>{{ old('description', $product->description) }}</textarea>
    </div>
    <div>
        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Update Product</button>
    </div>
</form>
