<?php
session_start();

if (isset($_SESSION['generated_password'])) {
    $generated_password = $_SESSION['generated_password'];
    unset($_SESSION['generated_password']);
} else {
    // Se la password non è presente nella sessione, reindirizza all'index o a una pagina di errore.
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Password</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <main class="container text-center mt-5">
        <h1>Generated Password</h1>
        <div class="alert alert-primary mt-4" role="alert">
            Your generated password is: <?= $generated_password; ?>
        </div>
    </main>
</body>

</html>