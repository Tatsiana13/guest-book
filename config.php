<?php
if (!empty($_POST)) {
    if (($_POST["name"] != "") && ($_POST["text"] != "")) {
        if (isset($_POST["ok"])){
        $row = "\n<----->\n" .
            $_POST["name"] . "\n" .
            $_POST["email"] . "\n" .
            $_POST["text"] . "\n".
            $_POST["ok"] = date('l\, d F Y H:i A');
        }
        file_put_contents("guest.txt", $row, FILE_APPEND);

        header("Location: ?");
        die();
    }
}
