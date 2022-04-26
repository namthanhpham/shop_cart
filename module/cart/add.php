<?php

$id = (int)$_GET['id'];

add_cart($id);
update_info_cart();
redirect_to("?mod=cart&act=show");