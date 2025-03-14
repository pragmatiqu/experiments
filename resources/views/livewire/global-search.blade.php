<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-10">

    <!-- search input -->
    <div>
        <label class="font-semibold mb-2">Search</label>
        <input type="text" wire:model.live="search" placeholder="category, tag, order..." class="border border-indigo-300 shadow-md rounded-md p-2 w-full mb-12 mt-2">
    </div>

    <div class="grid grid-cols-3 gap-4">
        <!-- Categories -->
        <div class="col-span-2">
            <h6 class="text-xl mb-3 font-bold tracking-tight text-gray-900">Categories</h6>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-white rounded-md">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-indigo-500 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($results['categories'] as $category)
                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ ucwords($category['name']) }}
                        </th>
                        <td class="px-6 py-4 text-gray-900">
                            {{ $category['description'] }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tags -->
        <div>
            <h6 class="text-xl mb-3 font-bold tracking-tight text-gray-900">Tags</h6>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-white rounded-md">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-indigo-500 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($results['tags'] as $tag)
                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $tag['name'] }}
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Orders -->
    <div class="my-10">
        <h6 class="text-xl mb-3 font-bold tracking-tight text-gray-900">Orders</h6>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-white rounded-md">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-indigo-500 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Bestellung
                </th>
                <th scope="col" class="px-6 py-3">
                    Beschreibung
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($results['orders'] as $order)
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ ucwords($order['name']) }}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $order['description'] }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
