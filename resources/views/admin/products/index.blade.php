<x-app-layout>
    <main class="p-6">
        <h1 class="text-2xl mb-4">Manage Products</h1>

        <a href="{{ route('admin.products.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded">Add Product</a>

        <table class="w-full mt-6 border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-3 border">Image</th>
                    <th class="p-3 border">Name</th>
                    <th class="p-3 border">Price</th>
                    <th class="p-3 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="p-3 border">
                        <img src="{{ asset('storage/' . $product->image_url) }}" class="w-16 h-16 object-cover">
                    </td>
                    <td class="p-3 border">{{ $product->name }}</td>
                    <td class="p-3 border">${{ $product->price }}</td>
                    <td class="p-3 border">
                        <a href="{{ route('admin.products.edit', $product->id) }}"
                           class="text-blue-600">Edit</a>

                        <form action="{{ route('admin.products.destroy', $product->id) }}"
                              method="POST" class="inline-block ml-2">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600"
                                    onclick="return confirm('Delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-app-layout>
