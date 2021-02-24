<?php


$marks = [
    [
        'student-name' => 'A',
        'mark' => ['76','71','89','89'],
        'class' => 'five',
        'address' => "dhanmondi",
    ],
    [
        'student-name' => 'B',
        'mark' => ['66','61','49','78'],
        'class' => 'five',
        'address' => "dhanmondi",
    ],
    [
        'student-name' => 'C',
        'mark' => ['86','69','69','91'],
        'class' => 'five',
        'address' => "dhanmondi",
    ],
    [
        'student-name' => 'D',
        'mark' => ['56','67','45','49'],
        'class' => 'five',
        'address' => "bonani",
    ],
    [
        'student-name' => 'E',
        'mark' => ['66','72','79','89'],
        'class' => 'five',
        'address' => "bonani",
    ],
    [
        'student-name' => 'F',
        'mark' => ['46','54','49','69'],
        'class' => 'five',
        'address' => "bonani",
    ],
    [
        'student-name' => 'G',
        'mark' => ['56','67','89','89'],
        'class' => 'five',
        'address' => "bonani",
    ],
    [
        'student-name' => 'H',
        'mark' => ['56','57','99','89'],
        'class' => 'five',
        'address' => "bonani",
    ],
    [
        'student-name' => 'I',
        'mark' => ['76','77','84','85'],
        'class' => 'five',
        'address' => 'mirpur',
    ],
    [
        'student-name' => 'J',
        'mark' => ['36','47','59','89'],
        'class' => 'five',
        'address' => 'mirpur',
    ],
    [
        'student-name' => 'K',
        'mark' => ['53','64','81','89'],
        'class' => 'five',
        'address' => 'mirpur',
    ],
    [
        'student-name' => 'L',
        'mark' => ['51','68','83','69'],
        'class' => 'five',
        'address' => 'mirpur',
    ],
    [
        'student-name' => 'M',
        'mark' => ['73','76','87','71'],
        'class' => 'five',
        'address' => 'mirpur',
    ],
    [
        'student-name' => 'N',
        'mark' => ['46','57','49','83'],
        'class' => 'five',
        'address' => 'mirpur',
    ],
    [
        'student-name' => 'O',
        'mark' => ['84','97','81','81'],
        'class' => 'five',
        'address' => 'mirpur',
    ]
];

foreach ($marks as $marka){
    //echo $marka['mark']."<br>";
            echo "Name : " .$marka['student-name']."<br>";
            echo "Class : " .$marka['class']."<br>";
            echo "Address : " .$marka['address']."<br>";



    //Bangla subject....

        if ($marka['mark'][0] >= 33 && $marka['mark'][0]  <=39){
               // echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
                echo "Bangla  CGPA 2.00<br>";
                $bng = 2;
            } elseif ($marka['mark'][0]  >= 40 && $marka['mark'][0]  <= 49){
                echo "Bangla CGPA 2.50<br>";
            $bng = 2.5;
           }elseif ($marka['mark'][0]  >= 50 && $marka['mark'][0]  <= 59){
                echo "Bangla CGPA 3.00<br>";
            $bng = 3;
            }elseif ($marka['mark'][0]  >= 60 && $marka['mark'][0]  <= 69){
                echo "Bangla CGPA 3.50<br>";
            $bng = 3.5;
           }elseif ($marka['mark'][0] >= 70 && $marka['mark'][0]  <= 79){
                echo "Bangla CGPA 4.00 <br>";
            $bng = 4;
            }elseif ($marka['mark'][0]  >= 80 && $marka['mark'][0]  <= 99){
                echo "Bangla CGPA 5.00<br>";
            $bng = 5;
            }elseif ($marka['mark'][0]  >= 0 && $marka['mark'][0]  <= 32){
                echo $marka['student-name'] . " " ."!You are Fall.<br>";
            }else{
                echo $marka['student-name'] . " "."Incorrect your Mark<br>";
            }

        //English Subject...
    if ($marka['mark'][1] >= 33 && $marka['mark'][1]  <=39){
        // echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
        echo "English CGPA 2.00<br>";
        $eng = 2;
    } elseif ($marka['mark'][1]   >= 40 && $marka['mark'][1]   <= 49){
        echo "English CGPA 2.50<br>";
        $eng = 2.5;
    }elseif ($marka['mark'][1]   >= 50 && $marka['mark'][1]   <= 59){
        echo "English CGPA 3.00<br>";
        $eng = 3;
    }elseif ($marka['mark'][1]  >= 60 && $marka['mark'][1]   <= 69){
        echo "English CGPA 3.50<br>";
        $eng = 3.5;
    }elseif ($marka['mark'][1]  >= 70 && $marka['mark'][1]   <= 79){
        echo "English CGPA 4.00 <br>";
        $eng = 4;
    }elseif ($marka['mark'][1]   >= 80 && $marka['mark'][1]   <= 99){
        echo "English CGPA 5.00<br>";
        $eng = 5;
    }elseif ($marka['mark'][1]   >= 0 && $marka['mark'][1]   <= 32){
        echo $marka['student-name'] . " " ."!You are Fall.<br>";
    }else{
        echo $marka['student-name'] . " "."Incorrect your Mark<br>";
        echo "<br>";
    }


    //Math Subject...
    if ($marka['mark'][2] >= 33 && $marka['mark'][2]  <=39){
        // echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
        echo "Math CGPA 2.00<br>";
        $math = 2;
    } elseif ($marka['mark'][2]  >= 40 && $marka['mark'][2]  <= 49){
        echo "Math CGPA 2.50<br>";
        $math = 2.5;
    }elseif ($marka['mark'][2]  >= 50 && $marka['mark'][2]  <= 59){
        echo "Math CGPA 3.00<br>";
        $math = 3;
    }elseif ($marka['mark'][2]  >= 60 && $marka['mark'][2] <= 69){
        echo "Math CGPA 3.50<br>";
        $math = 3.5;
    }elseif ($marka['mark'][2] >= 70 && $marka['mark'][2]  <= 79){
        echo "Math CGPA 4.00 <be>";
        $math = 4;
    }elseif ($marka['mark'][2] >= 80 && $marka['mark'][2]  <= 99){
        echo "Math CGPA 5.00<br>";
        $math = 5;
    }elseif ($marka['mark'][2]  >= 0 && $marka['mark'][2]  <= 32){
        echo $marka['student-name'] . " " ."!You are Fall.<br>";
    }else{
        echo $marka['student-name'] . " "."Incorrect your Mark<br>";
    }


    //Science Subject...
    if ($marka['mark'][3] >= 33 && $marka['mark'][3] <=39){
        // echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
        echo "Science CGPA 2.00<br>";
        $sen = 2;
      //  echo "<br>";
    } elseif ($marka['mark'][3]  >= 40 && $marka['mark'][3]  <= 49){
        echo "Science CGPA 2.50<br>";
        $sen = 2.5;
      //  echo "<br>";
    }elseif ($marka['mark'][3]  >= 50 && $marka['mark'][3]  <= 59){
        echo "Science CGPA 3.00<br>";
        $sen = 3;
      //  echo "<br>";
    }elseif ($marka['mark'][3]  >= 60 && $marka['mark'][0]  <= 69){
        echo "Science CGPA 3.50<br>";
        $sen = 3.5;
       // echo "<br>";
    }elseif ($marka['mark'][3] >= 70 && $marka['mark'][3]  <= 79){
        echo "Science CGPA 4.00 <br>";
        $sen = 4;
       // echo "<br>";
    }elseif ($marka['mark'][3]  >= 80 && $marka['mark'][3]  <= 99){
        echo "Science CGPA 5.00<br>";
        $sen = 5;
        //echo "<br>";
    }elseif ($marka['mark'][3]  >= 0 && $marka['mark'][3] <= 32){
        echo $marka['student-name'] . " " ."!You are Fall.<br>";
       // echo "<br>";
    }else{
        echo $marka['student-name'] . " "."Incorrect your Mark<br>";
        //echo "<br>";
    }
    $total = 0;
    echo "Total Number : ". $total =  $marka['mark'][0]+$marka['mark'][1]+$marka['mark'][2]+$marka['mark'][3]."<br>";
    $total_gpa = ($bng+ $eng + $math + $sen) / 4;
    echo "Your GPA : " .  $total_gpa."<br>";
    echo "<br>";
    echo "<br>";



}
