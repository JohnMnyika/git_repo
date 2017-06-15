<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
    <?php
        // going to do a numeric array and loop through it's contents
        $numbers = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10
        ];

        // count the array to make sure that it has items
        $how_many = count($numbers);

        if($how_many > 0){
            foreach ($numbers as $value){
                echo '<pre>' . $value . '</pre><br/>';
            }
        }
    ?>
    </body>
</html>