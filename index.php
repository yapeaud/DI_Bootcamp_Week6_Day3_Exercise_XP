<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week6_Day3_Exercise_XP</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <?php
        function check_vote() 
        {
            $name = "Yapeaud";
            $age = 19;
            if ($age >= 18) {
                echo $name . ", you Are Eligible For Vote";
            } else {
                echo $name . ", you are not eligible for vote. ";
            }
        }
        check_vote(); 

    ?>
    <hr>
    <h1>Exercise 2</h1>
    <?php
        function rect_area($length = 2, $width = 4) 
        {
            $area = $length * $width;
            echo "Area Of Rectangle with length " . $length . " & width " . $width . " is " . $area ;
        }
        rect_area(); 
    ?>
    <hr>
    <h1>Exercise 3</h1>
    <?php
        function trinary_Test($nbre){
        $result = $nbre > 30 ? "greater than 30": ($nbre > 20 ? "greater than 20": ($nbre >10? "greater than 10": "Input a number at least greater than 10!")); 
        echo $nbre." : ".$result."<br>";
        }
        trinary_Test(32);
        trinary_Test(21);
        trinary_Test(12);
        trinary_Test(9);
    ?>
    <hr>
    <h1>Exercise 4</h1>
    <?php
        function word_digit($word) {
            $item = explode(';',$word);
            $result = '';
            foreach($item as $value){
                switch(trim($value)){
                    case 'zero':
                        $result .= '0';
                        break;
                    case 'one':
                        $result .= '1';
                        break;
                    case 'two':
                        $result .= '2';
                        break;
                    case 'three':
                        $result .= '3';
                        break;
                    case 'four':
                        $result .= '4';
                        break;
                    case 'five':
                        $result .= '5';
                        break;
                    case 'six':
                        $result .= '6';
                        break;
                    case 'seven':
                        $result .= '7';
                        break;
                    case 'eight':
                        $result .= '8';
                        break;
                    case 'nine':
                        $result .= '9';
                        break;    
                }
            }
            return $result;
        }

        echo word_digit("zero;three;five;six;eight;one")."<br>";
        echo word_digit("seven;zero;one")."<br>";
    ?>                     
    <hr>
</body>
</html>