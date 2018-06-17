<?php require 'partials/head.php'; ?>



<h1>Submit your Name</h1>


<form method="POST" action="/names">

    <input name="name"></input>

    <button type="submit">Submit</button>

</form>



<!--<br><br>-->
<!--<ul>-->
<!--    --><?php
//        foreach ($tasks as $task){
//            if($task->completed){
//                echo '<li><strike>' . $task->description . '</strike></li>';
//            }else {
//                echo '<li>' . $task->description . '</li>';
//            }
//        }
//    ?>
<!--</ul>-->

<?php require 'partials/footer.php'; ?>

