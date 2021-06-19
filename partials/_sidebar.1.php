<div class="links col-sm-3"><br>
<a href="../index.php">Go Home</a>
<?php
$data = glob("scripts/*.php", GLOB_BRACE);
foreach ($data as $file) {
    echo "<a href='$file'>$file</a>";
}
?>
</div>
