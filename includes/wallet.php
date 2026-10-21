<?php
$user_id = (int) ($_SESSION['user_id'] ?? 0);
$wallet_id = 0;
$balance = 0;

if ($user_id > 0) {
    $sql = mysqli_query($con, "SELECT id FROM wallet WHERE customer_id = $user_id");

    if ($sql && ($row1 = mysqli_fetch_array($sql))) {
        $wallet_id = (int) $row1['id'];

        $sql = mysqli_query($con, "SELECT balance FROM wallet_details WHERE wallet_id = $wallet_id");

        if ($sql && ($row1 = mysqli_fetch_array($sql))) {
            $balance = (int) $row1['balance'];
        }
    }
}
?>