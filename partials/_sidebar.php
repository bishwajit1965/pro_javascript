<div class="col-sm-3 bg-success">
<?php
/**
 * Will load all files to loop through
 */
$data = glob("scripts/*.php", GLOB_BRACE);
foreach ($data as $file) {
    echo "<a href='$file'> $file </a>";
}
?>
</div>
