<?php
include __DIR__ . '/includes/utils/functions.php';

session_start();

$page_title = 'PHP Strong Password Generator';
$password = '';

if (isset($_GET['generate']) && isset($_GET['length'])) {
    $length = $_GET['length'];
    $_SESSION['generated_password'] = generate_password($length);
    header('Location: view_password.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include __DIR__ . '/includes/layouts/head.php' ?>

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
        </section>
    </main>
</body>

</html>