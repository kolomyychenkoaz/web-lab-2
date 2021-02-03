<?php
require_once('../includes/header.php'); ?>
<?php if ($_SESSION['auth'] == true): ?>
    <span><?php echo $_SESSION['login']; ?></span>
<?php else: ?>
    <span>Пользователь не авторизован!</span>
<?php endif; ?>
<?php require_once('../includes/footer.php');
?>
