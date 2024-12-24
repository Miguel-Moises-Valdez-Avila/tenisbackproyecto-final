<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('calzado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="min-h-screen bg-gray-100 flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
              <h2 class="text-2xl font-bold mb-6 text-gray-700 text-center">Editar Producto</h2>
              <form action=" {{ route('product.update', ["id" => $products['product']->id])}}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                <!-- Campo de Servicio -->
                <div>
                  <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    value="{{$products['product']->name}}"
                  />
                </div>
                <!-- Campo de Dirección -->
                <div>
                  <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                  <input
                    type="text"
                    id="brand"
                    name="brand"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    value="{{$products['product']->brand}}"
                  />
                </div>
                <!-- Campo de Encargado -->
                <div>
                  <label for="color" class="block text-sm font-medium text-gray-700">color</label>
                  <input
                    type="text"
                    id="color"
                    name="color"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    value="{{$products['product']->color}}"
                  />
                </div>
                <!-- Campo de Contacto -->
                <div>
                  <label for="size" class="block text-sm font-medium text-gray-700">Size mx</label>
                  <input
                    type="text"
                    id="size"
                    name="size"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    value="{{$products['product']->size}}"
                  />
                </div>
                <!-- Botón de Enviar -->
                <!-- Campo de Contacto -->
                <div>
                  <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                  <input
                    type="text"
                    id="price"
                    name="price"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    value="{{$products['product']->price}}"
                  />
                </div>
                <!-- Botón de Enviar -->
                <div>
                  <button
                    type="submit"
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                  >
                    Actualizar Tenis
                  </button>

                  
                </div>
              </form>
            </div>
          
    </div>
</x-app-layout>