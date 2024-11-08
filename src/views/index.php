<h1>Trang chu</h1>
<h2>Danh sach nguoi dung</h2>
<?php
if ($users) {
    foreach ($users as $user) {
        echo $user->name.' - '.$user->email.'<br>';
    }
}