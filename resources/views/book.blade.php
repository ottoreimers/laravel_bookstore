<x-app-layout>
  <x-slot name="header">
      <h1 class="text-left whitespace-nowrap pl-80 font-sans text-4xl text-red-400 leading-tight">
          {{ __('Books') }}
      </h1>
  </x-slot>

  <div class="py-12 bg-gray-900">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-gray-900 overflow-hidden shadow-lg sm:rounded-2xl">
              <div class="p-6 bg-gray-800 border-b border-gray-900">
                @if (session('status') == 'success_delete')
                    <div class="p-6 bg-green-50">
                      {{ __('Book successfully deleted') }}
                    </div>
                @endif
                <table class="table-auto border-collapse min-w-full divide-y divide-gray-400">
                  <thead class="bg-gray-800">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 dark:text-white uppercase tracking-wider">
                        Id
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 dark:text-white uppercase tracking-wider">
                        Title
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 dark:text-white uppercase tracking-wider">
                        Year
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 dark:text-white uppercase tracking-wider">
                        Author
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 dark:text-white uppercase tracking-wider">
                        Price
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 dark:text-white uppercase tracking-wider">
                        Stock
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Delete</span>
                      </th>
                    </tr>
                </thead>
                    <tbody class="bg-gray-800 divide-y divide-gray-400">
                      @foreach ($book as $book)
                      <tr>
                        <td class="px-6 py-4 text-gray-400 whitespace-nowrap">
                          {{$book ['id']}}
                        </td>

                        <td class="px-6 py-4 text-gray-400 whitespace-nowrap">
                          {{$book ['title']}}
                        </td>

                        <td class="px-6 py-4 text-gray-400 whitespace-nowrap">
                          {{$book ['year']}}
                        </td>

                        <td class="px-6 py-4 text-gray-400 whitespace-nowrap">
                          @if ($book->author()->get()->first())
                            {{ $book->author()->get()->first()->firstname }}
                            {{ $book->author()->get()->first()->surname }}
                          @endif
                        </td>

                        <td class="px-6 py-4 text-gray-400 whitespace-nowrap">
                          ${{ $book ['price'] }}
                        </td>

                        <td class="px-6 py-4 text-gray-400 whitespace-nowrap">
                          {{ $book ['stock'] }}
                        </td>
                        <td class="px-6 py-4 text-gray-400 whitespace-nowrap">
                          <a href="{{ action([App\Http\Controllers\BookController::class, 'edit'], ['book'=>$book]) }}" class="uppercase px-8 py-2 rounded-full border border-gray-400 text-gray-400 max-w-max shadow-sm hover:shadow-2xl hover:bg-gray-600 transition duration-150 ease-in-out">Edit</a>
                        </td>
                        <td class="px-6 py-4 text-gray-400 whitespace-nowrap">
                          <form action="{{
                              action(
                                [App\Http\Controllers\BookController::class,
                                'destroy'],
                                ['book'=>$book]
                              )
                            }}" method="post">
                            @csrf
                            <td class="px-6 py-4 whitespace-nowrap">
                            <input name="_method" type="hidden" value="DELETE" />
                            {{-- <button class="uppercase px-8 py-2 rounded-full border border-red-600 text-gray-600 max-w-max shadow-sm hover:shadow-lg" type="submit">Delete</button> --}}


                            <button class="uppercase p-3 flex items-center  border border-red-600 text-red-600 max-w-max shadow-sm hover:shadow-lg hover:bg-red-800 rounded-full w-12 h-12 transition duration-150 ease-in-out" type="submit">

                              <svg width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"       style="transform: rotate(360deg);">
                                <path d="M12 12h2v12h-2z" fill="currentColor"></path>
                                <path d="M18 12h2v12h-2z" fill="currentColor"></path>
                                <path d="M4 6v2h2v20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8h2V6zm4 22V8h16v20z" fill="currentColor"></path>
                                <path d="M12 2h8v2h-8z" fill="currentColor"></path>
                              </svg>
                            </button>
                          </form>
                        </td>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
