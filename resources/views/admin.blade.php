<x-card-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SAP UI Integration Cards Experiment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-4">
                <ui-integration-card manifest="/card-manifest"></ui-integration-card>
            </div>
        </div>
    </div>
</x-card-layout>
