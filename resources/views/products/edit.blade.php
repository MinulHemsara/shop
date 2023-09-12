@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

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
