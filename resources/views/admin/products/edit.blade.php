<x-app-layout>
    <main class="p-6">
        <h1 class="text-2xl mb-4">Edit Product</h1>

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-1">Product Name</label>
                <input type="text" name="name" class="border p-2 w-full" value="{{ $product->name }}">
            </div>

            <div class="mb-4">
                <label class="block mb-1">Price</label>
                <input type="number" name="price" class="border p-2 w-full" value="{{ $product->price }}">
            </div>

            <div class="mb-4">
                <label class="block mb-1">Image (Upload new if you want to replace)</label>
                <input type="file" name="image" class="border p-2 w-full">

                <img src="{{ asset('storage/' . $product->image_url) }}" class="w-24 mt-2 rounded">
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded">Update</button>
        </form>
    </main>
</x-app-layout>
