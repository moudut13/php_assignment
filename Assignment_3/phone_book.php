<?php


$number = [
    [
        'name' => 'A',
        'phone number' => '01365-897423'
    ],
    [
        'name' => 'B',
        'phone number' => '01633-567838'
    ],
    [
        'name' => 'C',
        'phone number' => '01430-850303'
    ],
    [
    'name' => 'D',
    'phone number' => '01731-563863'
    ],
    [
    'name' => 'E',
        'phone number' => '01703-769343'
    ],
    [
        'name' => 'F',
        'phone number' => '01553-237549'
    ],
    [
        'name' => 'G',
        'phone number' => '01900-585063'
    ],
    [
        'name' => 'H',
        'phone number' => '01456-669563'
    ],
    [
        'name' => 'I',
        'phone number' => '01468-769579'
    ],
    [
        'name' => 'J',
        'phone number' => '01989-769553'
    ]
];

foreach ($number as $numbers){
    echo "Name: ".$numbers['name']."<br>";
    echo "Mobile Number: ".$numbers['phone number']."<br>";
    echo "<br>";
}
