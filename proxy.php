<?php
header("Access-Control-Allow-Origin: *");
if (isset($_GET['url'])) {
    echo file_get_contents($_GET['url']);
}
else {
    http_response_code(404);
}
