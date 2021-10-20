<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 8</title>
    <style>
        html, body {
            height: auto; 
            width: 100%;
            font-family: monospace;
        }
        img {
            width: 100%;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow-wrap: anywhere;
        }
        hr {
            margin-top: 30px;
            border: none;
            border-top: 1px solid gainsboro;
        }
        div {
            width: 70%;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-items: center;
            align-items: flex-start;
            border-bottom: 1px solid gainsboro;
            padding-bottom: 50px;
        }
        .div-flex-center {
            align-items: center;
            text-align: center;
        }
        section {
            margin-top: 10px;
            background-color: #dcdcdc8a;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <!-- FUNCTION -->
    <div>
        <p>1. Function PHP</p>
        <section>
            <?php
            // link another php files
            include "calculate.php";

            // call the function from the another file
            echo add(5, 1) + add(2, 2);
            echo add(100, 50);
            ?>
        </section>
    </div>

    <!-- ARRAY -->
    <div>
        <p>2. Array PHP</p>
        <section>
            <?php
            $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9,];
            $numbers2[5] = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
            print_r ($numbers);
            echo '<br>';
            print_r ($numbers2);
            ?>
        </section>
        <br>
        <p>Randomise the subject</p>
        <section>
            <?php
            $students = ['Fikri', 'Arwin', 'Zafri', 'Chee Hoe'];
            $subjects = ['English', 'Math'];
            $grades = ['A', 'B', 'C', 'D', 'E', 'F'];

            // echo $student[0].', ';
            // echo $subjects[0].', ';
            for ($h=0; $h < count($students) ; $h++) { 
                echo $students[$h].', ';

                $randomSubject = rand(0, count($subjects)-1);
                echo $subjects[$randomSubject].', ';

                for ($i=0; $i < count($grades); $i++) { 
                    echo $grades[$i].', '; 
                }
                echo '<br>';
            }
            ?>
        </section>
        <br>
        <p>Randomise all</p>
        <section>
            <?php
            $students = ['Fikri', 'Arwin', 'Zafri', 'Chee Hoe'];
            $subjects = ['English', 'Math'];
            $grades = ['A', 'B', 'C', 'D', 'E', 'F'];

            // echo $student[0].', ';
            // echo $subjects[0].', ';
            $randomStudent = rand(0, count($students)-1);
            echo $students[$randomStudent].', ';

            $randomSubject = rand(0, count($subjects)-1);
            echo $subjects[$randomSubject].', ';

            $randomGrade = rand(0, count($grades)-1);
            echo $grades[$randomGrade].', ';
            echo '<br>';
            ?>
        </section>
    </div>

    <!-- EXERCISE 1 - ATTEMPT 1-->
    <div>
        <p>Exercise - attempt 1</p>
        <section>
            <?php
            $items = ['fish', 'chicken', 'tomato', 'eggs', 'bread', 'cabbage', 'carrot', 'salads'];
            $person = ['Kevin', 'Arwin'];

            $random1 = rand(0, count($items)-1);
            // echo $random1;
            // echo '<br>';

            $random1a = rand(0, count($items)-1);

            $random2 = rand(0, count($items)-1);
            if ($random1a == $random2) {
                $random2 = rand(0, count($items)-1);
            }

            $random3 = rand(0, count($items)-1);
            if ($random1a == $random2 || $random2 == $random3 || $random3 == $random1a) {
                $random3 = rand(0, count($items)-1);
            }

            $random4 = rand(0, count($items)-1);
            if ($random1a == $random2 || $random2 == $random3 || $random3 == $random4 || $random4 == $random1a) {
                $random4 = rand(0, count($items)-1);
            }

            $random4 = rand(0, count($items)-1);
            if ($random1a == $random2 || $random2 == $random3 || $random3 == $random4 || $random4 == $random1a) {
                $random4 = rand(0, count($items)-1);
            }

            $random5 = rand(0, count($items)-1);
            if ($random1a == $random2 || $random2 == $random3 || $random3 == $random4 || $random4 == $random5 || $random5 == $random1a) {
                $random5 = rand(0, count($items)-1);
            }

            $random6 = rand(0, count($items)-1);
            if ($random1a == $random2 || $random2 == $random3 || $random3 == $random4 || $random4 == $random5 || $random5 == $random6 || $random6 == $random1a) {
                $random6 = rand(0, count($items)-1);
            }



            echo $random1a.' ';
            echo $random2.' ';
            echo $random3.' ';
            echo $random4.' ';
            echo $random5.' ';
            echo $random6.' ';
            echo '<br>';

            // kevin
            echo $person[0].' saw ';
            echo implode(', ', $items);

            echo '<br>';
            echo $person[0].' ';
            echo 'buys '.$items[$random1];
            echo ' at the grocery shop.';

            // arwin
            echo '<br>';
            echo '<br>';
            echo $person[1].' saw ';
            echo implode(', ', $items);

            echo '<br>';
            echo $person[1].' ';
            echo 'buys '.$items[$random1a];
            echo ', '.$items[$random2];
            echo ' and '.$items[$random3];
            echo ' at the grocery shop.';

            echo '<br>';
            echo 'Then he buys another 3 different item, which are - ';
            echo $items[$random4]. ', ';
            echo $items[$random5]. ' and ';
            echo $items[$random6].'.';
            ?>
        </section>
        <p><em>This solution has a flaw, it only compare with the adjecent items in the array.</em></p>
    </div>

    <!-- EXERCISE 1 -->
    <div>
        <p>Exercise - attempt 2</p>
        <section>
            <?php
            $items = ['fish', 'chicken', 'tomato', 'eggs', 'bread', 'cabbage', 'carrot', 'salads'];
            $person = ['Kevin', 'Arwin'];

            // kevin
            echo $person[0].' saw ';
            echo implode(', ', $items);

            echo '<br>';
            echo $person[0].' ';
            echo 'buys '.$items[$random1];
            echo ' at the grocery shop.';
            echo "$items[0] and $items[1]";

            // arwin
            echo '<br>';
            echo '<br>';
            $newArray = array_rand($items, 3);
            $newArray2 = array_rand($items, 3);
            echo '<br>';
            print_r($newArray);
            echo '<br>';
            if ($newArray === $newArray2) {
                $newArray2 = array_rand($items, 3);
            }
            print_r($newArray2);

            $randomNum = rand(0, count($items)-1);
            echo '<br>';
            echo '<br>';
            echo $items[$randomNum];
            // unset item selected
            echo '<br>';
            unset($items[$randomNum]);
            print_r($items);
            // revalue the index in array
            echo '<br>';
            $items2 = array_values($items);
            print_r($items2);
            ?>
        </section>
    </div>
</body>
</html>