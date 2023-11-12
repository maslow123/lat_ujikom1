<?php
class MessageHandler {
    public static function showMessage($type, $message) {
        if ($type === 'success') {
            echo '<div style="height:40px;" class="alert alert-success">' . $message . '</div>';
        } elseif ($type === 'error') {
            echo '<div style="height:40px;" class="alert alert-danger">' . $message . '</div>';
        } else {
            echo '<div style="height:40px;" class="alert alert-info">' . $message . '</div>';
        }
    }
}
?>