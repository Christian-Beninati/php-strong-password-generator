<?php
session_start();

$page_title = 'Generated Password';


if (isset($_SESSION['generated_password'])) {
    $generated_password = $_SESSION['generated_password'];
    unset($_SESSION['generated_password']);
} else {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include __DIR__ . '/includes/layouts/head.php' ?>


<body class="bg-dark">
    <main class="container text-center mt-5">
        <h1 class="text-white">Generated Password</h1>
        <div class="alert alert-primary mt-4" role="alert">
            Your generated password is: <?= $generated_password; ?>
        </div>
    </main>
</body>

</html>