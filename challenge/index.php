<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Day 8</title>
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

    <!-- Loop the stars -->
    <div>
        <p>1. Loop the stars</p>
        <form action="index.php" method="get">
            <label for="layers">Number of layers</label>
            <input type="number" name="numberStars" id="layers" value="5">
            <br>
            <label for="stars">How do you want to display your stars?</label>
            <select name="stars" id="stars">
                <option value="0">Half</option>
                <option value="1">Full</option>
            </select>
            <br>
            <input type="submit" value="Generate">
            <a href="http://localhost:8888/backend-day-8/challenge">reset</a>
        </form>
        <section>
            <?php
            $number;
            $number = $_GET[numberStars];
            $arrangement = $_GET[stars];
            switch ($arrangement) {
                case '0':
                    //normal
                    for ($i=0; $i < $number ; $i++) {
                        for ($j=0; $j <= $i; $j++) {
                            echo '*';
                        }
                        echo '<br>';
                    }
                    break;
                
                case '1':
                    //normal
                    for ($i=0; $i < $number ; $i++) {
                        for ($j=0; $j <= $i; $j++) {
                            echo '*';
                        }
                        echo '<br>';
                    }
                    //normal reverse
                    for ($i=0; $i < $number ; $i++) {
                        for ($j=$number; $j > $i; $j--) {
                            echo '*';
                        }
                        echo '<br>';
                    }
                    break;
            }
            ?>
        </section>
    </div>

    <!-- Get the inputs -->
    <div>
        <p>2. Get the input</p>
        <form action="index.php" method="get">
            <label for="name">Name</label>
            <input type="text" name="username" id="name">
            <label for="nric">NRIC</label>
            <input type="text" name="usernric" id="nric">
            <label for="mobile">Mobile Number</label>
            <input type="text" name="usermobile" id="mobile">
            <input type="submit" value="Submit">
            <a href="http://localhost:8888/backend-day-8/challenge">reset</a>
        </form>
        <section>
            <?php
            $name = $_GET[username];
            $nric = $_GET[usernric];
            $mobile = $_GET[usermobile];
            
            // get the name
            function getUsername($str) {
                return $str;
            }
            // get the number
            function getNum($str) {
                return $str;
            }
            // get nric
            function getNRIC($str) {
                return $str;
            }
            // display the inputs
            function displayInputs($a, $b, $c) {
                return getUsername($a)."<br>".getNRIC($b)."<br>".getNum($c);
            }

            echo '<strong>User details</strong>';
            echo '<br>'.'<br>';
            echo displayInputs($name, $nric, $mobile);
            
            ?>
        </section>
    </div>

    <!-- Push index into array -->
    <div>
        <p>3. Push index into</p>
        <form action="index.php" method="get">
            <label for="newname">New name into array</label>
            <input type="text" name="newName" id="newname">
            <input type="submit" value="Insert">
            <a href="http://localhost:8888/backend-day-8/challenge">reset</a>
        </form>
        <section>
            <?php
            $newStudent = $_GET[newName];
            $students = ['Amir', 'Zahin', 'Arwin', 'Amirul'];
            print_r($students);
            echo '<br>';
            function addNewStudent($newinsert) {
                $students = ['Amir', 'Zahin', 'Arwin', 'Amirul'];
                array_push($students, $newinsert);
                print_r($students);
            }

            if (isset($newStudent)) {
                addNewStudent($newStudent);
            }
            ?>
        </section>
    </div>

    <!-- Get the inputs -->
    <div>
        <p>4. Display the inputs (also)</p>
        <form action="index.php" method="get">
            <label for="name">What is your name</label>
            <input type="text" name="username2" id="name">
            <br><br>
            <label for="hobby">What is your hobby?</label>
            <input type="text" name="userhobby" id="hobby">
            <br><br>
            <label for="club">What is your favourite club?</label>
            <input type="text" name="userclub" id="club">
            <br><br>
            <input type="submit" value="Submit">
            <a href="http://localhost:8888/backend-day-8/challenge">reset</a>
        </form>
        <section>
            <?php
            $name2 = $_GET[username2];
            $hobby = $_GET[userhobby];
            $favClub = $_GET[userclub];

            // get name
            function getName2($str) {
                return $str;
            }
            // get hobby
            function getHobby($str) {
                return $str;
            }
            // get club
            function getClub($str) {
                return $str;
            }
            // display all input
            function displayInputs2 ($a, $b, $c){
                return getName2($a)."<br>".getHobby($b)."<br>".getClub($c);
            }

            echo '<strong>Information</strong>';
            echo '<br>'.'<br>';
            echo displayInputs($name2, $hobby, $favClub);

            ?>
        </section>
    </div>
</body>
</html>