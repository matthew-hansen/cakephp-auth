<?php
$user = $this->Session->read('Auth.User');
if (!empty($user)) {
    echo 'Hi ', $user['username'];
}
