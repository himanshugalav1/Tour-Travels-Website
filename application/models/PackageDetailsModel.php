<?php

class PackageDetailsModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getData($name)
    {
        $arr = [
            'uttarakhand' => [
                'list' => [
                    [
                        'name' => 'Uttarakhand Travel Package - 1',
                        'image' => 'assets/img/package/uttrakhand-1.jpg',
                        'reviews' => '50',
                        'time' => '3 Nights / 4 Days',
                        'condition' => 'Min 4 Persons',
                        'price' => '8000/-'
                    ],
                    [
                        'name' => 'Uttarakhand Travel Package - 2',
                        'image' => 'assets/img/package/uttrakhand-2.jpg',
                        'reviews' => '64',
                        'time' => '4 Nights / 4 Days',
                        'condition' => 'Min 2 Persons',
                        'price' => '10000/-'
                    ],
                    [
                        'name' => 'Uttarakhand Travel Package - 3',
                        'image' => 'assets/img/package/uttrakhand-3.jpg',
                        'reviews' => '124',
                        'time' => '2 Nights / 1 Days',
                        'condition' => 'Min 6 Persons',
                        'price' => '3000/-'
                    ]
                ]
            ],

            'kerala' => [
                'list' => [
                    [
                        'name' => 'Kerala Travel Package - 1',
                        'image' => 'assets/img/package/uttrakhand-1.jpg',
                        'reviews' => '50',
                        'time' => '3 Nights / 4 Days',
                        'condition' => 'Min 4 Persons',
                        'price' => '8000/-'
                    ],
                    [
                        'name' => 'Kerala Travel Package - 2',
                        'image' => 'assets/img/package/uttrakhand-2.jpg',
                        'reviews' => '64',
                        'time' => '4 Nights / 4 Days',
                        'condition' => 'Min 2 Persons',
                        'price' => '10000/-'
                    ],
                    [
                        'name' => 'Kerala Travel Package - 3',
                        'image' => 'assets/img/package/uttrakhand-3.jpg',
                        'reviews' => '124',
                        'time' => '2 Nights / 1 Days',
                        'condition' => 'Min 6 Persons',
                        'price' => '3000/-'
                    ]
                ]
            ],

            'manali' => [
                'list' => [
                    [
                        'name' => 'Manali Travel Package - 1',
                        'image' => 'assets/img/package/uttrakhand-1.jpg',
                        'reviews' => '50',
                        'time' => '3 Nights / 4 Days',
                        'condition' => 'Min 4 Persons',
                        'price' => '8000/-'
                    ],
                    [
                        'name' => 'Manali Travel Package - 2',
                        'image' => 'assets/img/package/uttrakhand-2.jpg',
                        'reviews' => '64',
                        'time' => '4 Nights / 4 Days',
                        'condition' => 'Min 2 Persons',
                        'price' => '10000/-'
                    ],
                    [
                        'name' => 'Manali Travel Package - 3',
                        'image' => 'assets/img/package/uttrakhand-3.jpg',
                        'reviews' => '124',
                        'time' => '2 Nights / 1 Days',
                        'condition' => 'Min 6 Persons',
                        'price' => '3000/-'
                    ]
                ]
            ],

            'rajasthan' => [
                'list' => [
                    [
                        'name' => 'Rajasthan Travel Package - 1',
                        'image' => 'assets/img/package/uttrakhand-1.jpg',
                        'reviews' => '50',
                        'time' => '3 Nights / 4 Days',
                        'condition' => 'Min 4 Persons',
                        'price' => '8000/-'
                    ],
                    [
                        'name' => 'Rajasthan Travel Package - 2',
                        'image' => 'assets/img/package/uttrakhand-2.jpg',
                        'reviews' => '64',
                        'time' => '4 Nights / 4 Days',
                        'condition' => 'Min 2 Persons',
                        'price' => '10000/-'
                    ],
                    [
                        'name' => 'Rajasthan Travel Package - 3',
                        'image' => 'assets/img/package/uttrakhand-3.jpg',
                        'reviews' => '124',
                        'time' => '2 Nights / 1 Days',
                        'condition' => 'Min 6 Persons',
                        'price' => '3000/-'
                    ]
                ]
            ],

            'goa' => [
                'list' => [
                    [
                        'name' => 'Goa Travel Package - 1',
                        'image' => 'assets/img/package/uttrakhand-1.jpg',
                        'reviews' => '50',
                        'time' => '3 Nights / 4 Days',
                        'condition' => 'Min 4 Persons',
                        'price' => '8000/-'
                    ],
                    [
                        'name' => 'Goa Travel Package - 2',
                        'image' => 'assets/img/package/uttrakhand-2.jpg',
                        'reviews' => '64',
                        'time' => '4 Nights / 4 Days',
                        'condition' => 'Min 2 Persons',
                        'price' => '10000/-'
                    ],
                    [
                        'name' => 'Goa Travel Package - 3',
                        'image' => 'assets/img/package/uttrakhand-3.jpg',
                        'reviews' => '124',
                        'time' => '2 Nights / 1 Days',
                        'condition' => 'Min 6 Persons',
                        'price' => '3000/-'
                    ]
                ]
            ],

            'gujrat' => [
                'list' => [
                    [
                        'name' => 'Gujrat Travel Package - 1',
                        'image' => 'assets/img/package/uttrakhand-1.jpg',
                        'reviews' => '50',
                        'time' => '3 Nights / 4 Days',
                        'condition' => 'Min 4 Persons',
                        'price' => '8000/-'
                    ],
                    [
                        'name' => 'Gujrat Travel Package - 2',
                        'image' => 'assets/img/package/uttrakhand-2.jpg',
                        'reviews' => '64',
                        'time' => '4 Nights / 4 Days',
                        'condition' => 'Min 2 Persons',
                        'price' => '10000/-'
                    ],
                    [
                        'name' => 'Gujrat Travel Package - 3',
                        'image' => 'assets/img/package/uttrakhand-3.jpg',
                        'reviews' => '124',
                        'time' => '2 Nights / 1 Days',
                        'condition' => 'Min 6 Persons',
                        'price' => '3000/-'
                    ]
                ]
            ],
        ];

        return $arr[$name];
    }
}
