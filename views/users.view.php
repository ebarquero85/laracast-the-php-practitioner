<?php require 'partials/head.php'; ?>

    <h1>Users</h1>

    <form method="POST" action="/users">
        <input name="name" placeholder="name"></input><br>
        <input name="email" placeholder="email"></input><br>
        <button type="submit">Submit</button>
    </form>

    <br><br>

    <ul>
        <?php
        foreach ($users as $user){
            echo '<li>' . $user->name . '</li>';
        }
        ?>
    </ul>

<?php require 'partials/footer.php'; ?>