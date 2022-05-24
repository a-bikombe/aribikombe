<?php

$pageTitle = 'I\'m an open book. Usually.';

$iconPath = 'images/icons/403.png';

$styles = [];

$mobileStyles = [
    'main' => '600'
];

$scripts = [
    'main'
];

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head-tag.php'; ?>

<body class="dark-theme" id="error">
    <?php require_once 'include/header.php'; ?>
    <main class="error-main flex-center text-center dir-col vh-100">
        <img src="/images/gifs/corg-sad.gif" alt="Corg Sad" class="gif">
        <section class="text" aria-label="403 Error Text">
            <h1>Uh Oh!</h1>
            <p>Looks like you've stumbled somewhere you're not wanted.</p>
        </section>
    </main>
</body>

</html>