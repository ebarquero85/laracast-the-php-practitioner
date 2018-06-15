<?php require 'partials/head.php'; ?>

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

<?php require 'partials/footer.php'; ?>

