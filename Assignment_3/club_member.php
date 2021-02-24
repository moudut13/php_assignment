<?php


$members = [
    [
        'name' => 'A',
        'phone number' => '01365-897423',
        'age' => '50'
    ],
    [
        'name' => 'B',
        'phone number' => '01633-567838',
        'age' => '55'
    ],
    [
        'name' => 'C',
        'phone number' => '01430-850303',
        'age' => '35'
    ],
    [
        'name' => 'D',
        'phone number' => '01731-563863',
        'age' => '25'
    ],
    [
        'name' => 'E',
        'phone number' => '01703-769343',
        'age' => '27'
    ],
    [
        'name' => 'F',
        'phone number' => '01553-237549',
        'age' => '20'
    ],
    [
        'name' => 'G',
        'phone number' => '01900-585063',
        'age' => '19'
    ],
    [
        'name' => 'H',
        'phone number' => '01456-669563',
        'age' => '15'
    ],
    [
        'name' => 'I',
        'phone number' => '01468-769579',
        'age' => '12'
    ],
    [
        'name' => 'J',
        'phone number' => '01989-769553',
        'age' => '17'
    ],
    [
        'name' => 'K',
        'phone number' => '01989-779553',
        'age' => '22'
    ],
    [
        'name' => 'L',
        'phone number' => '01989-769748',
        'age' => '30'
    ],
    [
        'name' => 'M',
        'phone number' => '01989-758553',
        'age' => '28'
    ],
    [
        'name' => 'N',
        'phone number' => '01989-769793',
        'age' => '24'
    ],
    [
        'name' => 'O',
        'phone number' => '01989-769653',
        'age' => '40'
    ],
    [
        'name' => 'P',
        'phone number' => '01989-769663',
        'age' => '34'
    ]
];

foreach ($members as $member){
    //echo  $member['name']."<br>";
    //echo $member['phone number']."<br>";
    //echo $member['age']."<br>";
    echo "<br>";
    echo "<br>";
    if ($member['age'] > 18 && $member['age'] <= 40){
        echo  $member['name']."<br>";
        echo "Welcome <br>";
    }
    elseif ($member['age'] > 40){
        echo  $member['name']."<br>";
        echo "Good luck to you <br>";
    }
    elseif ($member['age'] >= 1 && $member['age'] <= 17 ){
        echo  $member['name']."<br>";
        echo "Concentrate on studying <br>";
    }
    else{
        echo "Invalid";
    }
    echo "<br>";
    echo "<br>";
}
