<?php
$id = $_POST['id'];
$qty = $_POST['qty'];

$item = get_product_by_id($id);

if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
    //Cập nhật số lượng
    $_SESSION['cart']['buy'][$id]['qty'] = $qty;
    //Cập nhật tổng tiền
    $sub_total = $item['price'] * $qty;
    $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;

    //Cập nhật toàn bộ giỏ hàng
    update_info_cart();

    //Lấy tổng giá trị giỏ hàng

    $total = get_total_cart();
    //Giá trị trả về
    $data = array(
        'sub_total' => currency_format($sub_total),
        'total' => currency_format($total),
    );

    echo json_encode($data);
}
