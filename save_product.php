<?php
// POST 요청을 통해 전달된 데이터를 받아옵니다.
$item = $_POST['item'];
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$purchaseDate = $_POST['purchaseDate'];
$stock = $_POST['stock'];
$status = $_POST['status'];

// 데이터를 배열 또는 객체로 저장하거나 데이터베이스에 저장할 수 있습니다.
// 여기에서는 데이터를 배열로 저장하는 예제를 제공합니다.
$productData = array(
    'item' => $item,
    'name' => $name,
    'price' => $price,
    'quantity' => $quantity,
    'purchaseDate' => $purchaseDate,
    'stock' => $stock,
    'status' => $status
);

// 저장된 데이터를 JSON 형식으로 변환합니다.
$jsonData = json_encode($productData);

// JSON 데이터를 원하는 위치에 저장할 수 있습니다.
// 여기에서는 파일로 저장하는 예제를 제공합니다.
$filename = 'products.json'; // 저장할 파일 이름
file_put_contents($filename, $jsonData);

// 저장이 완료되면 성공 응답을 보냅니다.
echo '데이터가 성공적으로 저장되었습니다.';
?>
