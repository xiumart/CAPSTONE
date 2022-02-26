<?php
session_start();
unset($_SESSION['IS_LOGIN']);
session_destroy();
?>
<script>
window.location.href='index.php';
</script>