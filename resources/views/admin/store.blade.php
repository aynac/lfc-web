<x-app-layout>
    <x-slot name="header">Store Products</x-slot>

    <div class="max-w-7xl mx-auto p-6">
        <a href="/admin/store/create" class="bg-blue-600 text-white px-5 py-2 rounded-md">+ Add Product</a>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
            @foreach ($products as $product)
                <div class="bg-white shadow p-5 rounded-lg">
                    <img src="{{ $product->image }}" class="w-full h-56 object-cover rounded-lg">
                    <h3 class="mt-3 text-xl font-bold">{{ $product->name }}</h3>
                    <p class="mt-1 text-gray-600">${{ $product->price }}</p>

                    <div class="flex gap-4 mt-4">
                        <a href="/admin/store/{{ $product->id }}/edit" class="text-blue-600">Edit</a>
                        <form method="POST" action="/admin/store/{{ $product->id }}">
                            @csrf @method('DELETE')
                            <button class="text-red-600">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
