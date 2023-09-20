<style>
   
    .form-container {
        width: 50%;
        margin: 0 auto;
    }

   
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

<h1>Create Product</h1>

<div class="form-container">
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
</div>

