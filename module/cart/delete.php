<?php
$id = (int)$_GET['id'];

delete_cart($id);
redirect_to("?mod=cart&act=show");