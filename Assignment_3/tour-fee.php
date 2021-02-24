<?php


$tour = [
    [
        'name' => 'A',
        'phone number' => '01365-897423',
        'fee' => '500'
    ],
    [
        'name' => 'B',
        'phone number' => '01633-567838',
        'fee' => '500'
    ],
    [
        'name' => 'C',
        'phone number' => '01430-850303',
        'fee' => '500'
    ],
    [
        'name' => 'D',
        'phone number' => '01731-563863',
        'fee' => '500'
    ],
    [
        'name' => 'E',
        'phone number' => '01703-769343',
        'fee' => '500'
    ],
    [
        'name' => 'F',
        'phone number' => '01553-237549',
        'fee' => '500'
    ],
    [
        'name' => 'G',
        'phone number' => '01900-585063',
        'fee' => '500'
    ],
    [
        'name' => 'H',
        'phone number' => '01456-669563',
        'fee' => '500'
    ],
    [
        'name' => 'I',
        'phone number' => '01468-769579',
        'fee' => '500'
    ],
    [
        'name' => 'J',
        'phone number' => '01989-769553',
        'fee' => '500'
    ],
    [
        'name' => 'K',
        'phone number' => '01989-779553',
        'fee' => '500'
    ],
    [
        'name' => 'L',
        'phone number' => '01989-769748',
        'fee' => '500'
    ],
    [
        'name' => 'M',
        'phone number' => '01989-758553',
        'fee' => '500'
    ],
    [
        'name' => 'N',
        'phone number' => '01989-769793',
        'fee' => '500'
    ],
    [
        'name' => 'O',
        'phone number' => '01989-769653',
        'fee' => '500'
    ],
    [
        'name' => 'P',
        'phone number' => '01989-769663',
        'fee' => '500'
    ]
];

foreach ($tour as $tours){
    echo  "Name : " .$tours['name']."<br>";
    echo "Phone Number ; ".$tours['phone number']."<br>";
    echo "fee : ".$tours['fee']."<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
$total = 0;

for ($i = 0; $i <= 50; $i++){
    $total = $tours['fee'] + $total;

}
echo "Total Collection Money : " .$total . "Taka";
echo "<br>";
echo "<br>";