<?php

namespace App\Livewire;

use Livewire\Component;

class GlobalSearch extends Component
{
    public $search = '';
    public $results = [
        'orders' => [],
        'categories' => [],
        'tags' => []
    ];

    public function mount()
    {
    }

    public function updatedSearch()
    {
        $this->results = [
            'orders' => [
                0 => [
                    'id' => 1,
                    'name' => 'Order 1',
                    'description' => 'Description order 1',
                ],
                1 => [
                    'id' => 5,
                    'name' => 'Order 5',
                    'description' => 'Description order 5',
                ]
            ],
            'categories' => [
                0 => [
                    'id' => 17,
                    'name' => 'Category 1',
                    'description' => 'Description category 1',
                ]
            ],
            'tags' => [
                0 => [
                    'id' => 38,
                    'name' => 'Tag 1',
                    'description' => 'Description tag 1',
                ],
                1 => [
                    'id' => 39,
                    'name' => 'Tag 2',
                    'description' => 'Description tag 2',
                ],
                2 => [
                    'id' => 40,
                    'name' => 'Tag 3',
                    'description' => 'Description tag 3',
                ]
            ],
        ];
    }

    public function render()
    {
        // render global search view
        return view('livewire.global-search');
    }
}
