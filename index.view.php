<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <ul>

        <?php

            foreach ($tasks as $task){
                if($task->isCompleted()){
                    echo '<li><strike>' . $task->description . '</strike></li>';
                }else {
                    echo '<li>' . $task->description . '</li>';
                }
            }

        ?>

    </ul>

</body>
</html>