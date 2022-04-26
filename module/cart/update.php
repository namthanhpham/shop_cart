<?php
if (isset($_POST['btn-update'])) {
    update_cart($_POST['qty']);
    redirect_to("?mod=cart&act=show");
}
