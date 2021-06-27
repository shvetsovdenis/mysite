<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/php.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут: 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город:', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мой возраст:
                    <?php  echo $age;   ?>          
                    год </p>
                    <p> Я научился создавать различные переменные. </p>
                    <p> Плюс, я изучил как совершать простые операции с ними. Хорошо :) </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?>   <br>
                    <?php
                        echo 'А еще у нас есть два числа: 5 и 10. Проведем с ними простые операции: ', '<br>';
                        echo '5 + 10 = ', $firstNumber + $secondNumber . '<br>';    // сложение. Здесь $a и $b операнды, символ + (плюс) это оператор
                        echo '5 - 10 = ', $firstNumber - $secondNumber . '<br>';    // вычитание (если имеется только правый операнд (в данном случае $b), то операция возвращает значение этого операнда с обратным знаком)
                        echo '5 * 10 = ', $firstNumber * $secondNumber . '<br>';    // умножение. Здесь оператор - это знак умножения *, $a и $b операнды.
                        echo '5 / 10 =', $firstNumber / $secondNumber . '<br>';  // деление
                        echo 'Остаток от деления 5/10 = ', $firstNumber % $secondNumber . '<br>'; // остаток от деления
                        echo '5 в десятой степени = ', $firstNumber ** $secondNumber . '<br>'; // возведение в степень
                    ?>
                    <?php
                        echo "Количество баллов, которое нужно поставить мне за это задание: $myResult";
                    ?>

            </div>
            <br>
            <br>
            <div class="article">
                <p class="text">
                    Один из важных навыков программиста и пентестера - внимательность к мелочам. 
                    Даже если ты отлично знаешь синтаксис в логику функций, но стоит ошибиться в одном знаке... 
                    И вся работа насмарку. Поэтому так важно не пропскать ни одной буквы и ни однго знака ;)
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
