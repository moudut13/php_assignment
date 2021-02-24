<?php


$lives = [
    [
        'name' => 'A',
        'phone number' => '01365-897423',
        'address' => 'mirpur'
    ],
    [
        'name' => 'B',
        'phone number' => '01633-567838',
        'address' => "bonani"
    ],
    [
        'name' => 'C',
        'phone number' => '01430-850303',
        'address' => "dhanmondi",
    ],
    [
        'name' => 'D',
        'phone number' => '01731-563863',
        'address' => "dhanmondi",
    ],
    [
        'name' => 'E',
        'phone number' => '01703-769343',
        'address' => "dhanmondi",
    ],
    [
        'name' => 'F',
        'phone number' => '01553-237549',
        'address' => 'mirpur',
    ],
    [
        'name' => 'G',
        'phone number' => '01900-585063',
        'address' => 'mirpur',
    ],
    [
        'name' => 'H',
        'phone number' => '01456-669563',
        'address' => 'mirpur',
    ],
    [
        'name' => 'I',
        'phone number' => '01468-769579',
        'address' => 'mirpur',
    ],
    [
        'name' => 'J',
        'phone number' => '01989-769553',
        'address' => "bonani"
    ],
    [
        'name' => 'K',
        'phone number' => '01989-779553',
        'address' => "bonani"
    ],
    [
        'name' => 'L',
        'phone number' => '01989-769748',
        'address' => "bonani"
    ],
    [
        'name' => 'M',
        'phone number' => '01989-758553',
        'address' => "dhanmondi",
    ],
    [
        'name' => 'N',
        'phone number' => '01989-769793',
        'address' => "dhanmondi",
    ],
    [
        'name' => 'O',
        'phone number' => '01989-769653',
        'address' => "bonani"
    ],
    [
        'name' => 'P',
        'phone number' => '01989-769663',
        'address' => 'mirpur'
    ]
];

foreach ($lives as  $live){
    if ($live['address'] == 'mirpur'){
        echo "Name : " .$live['name']."<br>";
        echo "Phone Number : " . $live['phone number']."<br>";
        echo "Location : ". $live['address']."<br>";
        echo "<br>";
        echo "<br>";
    }
}