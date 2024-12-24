<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('calzado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="min-h-screen bg-gray-100 flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
              <h2 class="text-2xl font-bold mb-6 text-gray-700 text-center">Registrar Producto</h2>
              <form action=" {{ route('product.store')}}" method="POST" class="space-y-6">
                @csrf
                <!-- Campo de Servicio -->
                <div>
                  <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Nombre de tenis"
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
                    placeholder="Marca del tenis"
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
                    placeholder="Azul, morado o rojo etc.."
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
                    placeholder="Talla"
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
                    placeholder="Precio del calzado"
                  />
                </div>
                <div>
                  <label for="categoria">Categoria:</label>
                  <select name="categoria" id="categoria">
                    @foreach($products['categoria'] as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endforeach
              </select>
                </div>

                <!-- Botón de Enviar -->
                <div>
                  <button
                    type="submit"
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                  >
                    Registrar Tenis
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="container mx-auto p-4">
            <div class="overflow-x-auto">
              <table class="min-w-full border-collapse border border-gray-300">
                <thead>
                  <tr class="bg-gray-100">
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold border-b border-gray-300">Nombre</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold border-b border-gray-300">Brand</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold border-b border-gray-300">color</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold border-b border-gray-300">Size mx</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold border-b border-gray-300">precio</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold border-b border-gray-300">categoria</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold border-b border-gray-300">editar</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold border-b border-gray-300">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products['products'] as $item)
                  <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 border-b border-gray-300">{{$item->name}}</td>
                    <td class="px-6 py-4 border-b border-gray-300">{{$item->brand}}</td>
                    <td class="px-6 py-4 border-b border-gray-300">{{$item->color}}</td>
                    <td class="px-6 py-4 border-b border-gray-300">{{$item->size}}</td>
                    <td class="px-6 py-4 border-b border-gray-300">{{$item->price}}</td>
                    <td class="px-6 py-4 border-b border-gray-300">{{$item->categoria->nombre}}</td>
                    <td>
                      <a href="{{ route('product.edit' , ["id" => $item->id])}}" class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M16.864 3.232a2 2 0 0 1 2.828 2.828L7.35 17.818a2 2 0 0 1-1.09.526l-4.18.836a1 1 0 0 0-1.171-1.171l.836-4.18a2 2 0 0 1 .526-1.09L18.096 3.232z"/>
                        </svg>
                        Editar
                      </a>
                      
                    </td>
                    <td>
                      <form action="{{route('product.destroy' , ["id" => $item->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                      <button class="flex items-center px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        Eliminar
                      </button>
                    </form>
                      
                    </td>
                  </tr>
                  @endforeach

                 
                  <!-- Añade más filas aquí -->
                </tbody>
              </table>
            </div>
          </div>
          
    </div>
</x-app-layout>