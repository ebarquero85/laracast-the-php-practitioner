<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRUEBA</title>
</head>
<body>

    <ul>
        <li><a href="about">About</a></li>
        <li><a href="contact">Contact</a></li>
    </ul>

    <br><br>

    <ul>

        <?php

            foreach ($tasks as $task){
                if($task->completed){
                    echo '<li><strike>' . $task->description . '</strike></li>';
                }else {
                    echo '<li>' . $task->description . '</li>';
                }
            }

        ?>

    </ul>

</body>
</html>