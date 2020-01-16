<?php require 'partials/head.php' ?>

<h1>all users</h1>

<ul>
    <?php foreach ($users as $user): ?>
    <li><?= $user->name ?>
    </li>
    <?php endforeach; ?>
</ul>

<h1> Enter your name</h1>
<form action="/users" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.php';
