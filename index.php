<?php
include __DIR__ . '/includes/utils/functions.php';

$page_title = 'PHP Strong Password Generator';
$password = '';

if (isset($_GET['generate']) && isset($_GET['length'])) {
    $length = $_GET['length'];
    $password = generatePassword($length);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?? 'Document' ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <main class="container text-center mt-5">
        <h1>Strong Password Generator</h1>
        <section id="password_generator">
            <form action="" method="GET">
                <div class=" mt-4">
                    <label for="length">Password length:</label>
                    <input type="number" id="length" name="length" min="1" max="20" required>
                </div>
                <div class="mt-5">
                    <button class="btn btn-primary ms-4" type="submit" name="generate">Send</button>
                    <button class="btn btn-secondary" type="reset" name="cancel">Cancel</button>
                </div>
            </form>
            <div class="alert alert-primary mt-4" role="alert">
                Your generated password is: <?= $password; ?>
            </div>
        </section>
    </main>
</body>

</html>