<?php

function isEmailOk($email) {
    if (str_contains($email, '@') && str_contains($email, '.')){
        return true;
    } else {
        return false;
    }
}

?>