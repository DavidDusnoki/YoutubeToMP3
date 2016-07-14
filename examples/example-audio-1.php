<?php
require('../youtube-dl.class.php');
try {
    new yt_downloader("https://www.youtube.com/watch?v=zClca05WJ48", TRUE, "audio");
}
catch (Exception $e) {
    die($e->getMessage());
}
