<x-app-layout>
    <main class="p-6">
        <h1 class="text-2xl mb-4">Add New Product</h1>

        <form action="{{ route('admin.products.index') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block mb-1">Product Name</label>
                <input type="text" name="name" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label class="block mb-1">Price</label>
                <input type="number" name="price" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label class="block mb-1">Image</label>
                <input type="file" name="image" class="border p-2 w-full">
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
        </form>
    </main>
</x-app-layout>
