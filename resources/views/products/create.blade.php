<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div>
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="description">Product Description:</label>
        <textarea name="description" id="description" required></textarea>
    </div>
    <div>
        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Create Product</button>
    </div>
</form>
