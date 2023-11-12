<?php
if (isset($_GET['added'])) {
    $msg = "Data berhasil ditambahkan";
    MessageHandler::showMessage('success', $msg);
}

if (isset($_GET['edited'])) {
    $msg = "Data berhasil diedit";
    MessageHandler::showMessage('success', $msg);
}


if (isset($_GET['deleted'])) {
    $msg = "Data berhasil dihapus";
    MessageHandler::showMessage('error', $msg);
}
?>