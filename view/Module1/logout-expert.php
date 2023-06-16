<?php
    session_start();

    session_destroy();
    echo "<script>alert('Successully logged out.'); window.location='../Module1/login-expert.php'</script>";
?>