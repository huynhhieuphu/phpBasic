<!doctype html>
<html lang="<!">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển thị danh sách khách hàng</title>
</head>
<body>
<?php
/**
 * 2. Hiển thị danh sách khách hàng dưới dạng mảng. Bao gồm:
 * + STT
 * + Họ và tên
 * + Email
 * + Phone
 * + Address
 *
 * Lưu ý: Nếu email bị trùng, chỉ giữ lại 1.
 */
$customers = [
    [
        "name" => "Kristen Richard",
        "phone" => "(762) 953-8672",
        "email" => "dignissim@aol.com",
        "address" => "888-8358 Laoreet Road"
    ],
    [
        "name" => "Len Farley",
        "phone" => "(836) 381-6169",
        "email" => "mauris.ipsum.porta@outlook.org",
        "address" => "9637 Scelerisque Road"
    ],
    [
        "name" => "Rudyard Franks",
        "phone" => "(667) 491-5748",
        "email" => "tellus.lorem.eu@outlook.ca",
        "address" => "Ap #115-7394 Pede. St."
    ],
    [
        "name" => "Len Farley 2",
        "phone" => "(836) 381-6169",
        "email" => "mauris.ipsum.porta@outlook.org",
        "address" => "9637 Scelerisque Road"
    ],
    [
        "name" => "Ulla Marsh",
        "phone" => "(634) 392-7852",
        "email" => "posuere.enim@google.net",
        "address" => "P.O. Box 380, 4927 A, Avenue"
    ],
    [
        "name" => "Kristen Richard 2",
        "phone" => "(762) 953-8672",
        "email" => "dignissim@aol.com",
        "address" => "888-8358 Laoreet Road"
    ],
    [
        "name" => "Hector Neal",
        "phone" => "1-452-661-3176",
        "email" => "phasellus.libero@aol.couk",
        "address" => "471-2122 Neque St."
    ],
    [
        "name" => "Hector Neal 2",
        "phone" => "1-452-661-3176",
        "email" => "phasellus@aol.couk",
        "address" => "471-2122 Neque St."
    ],
    [
        "name" => "Kristen Richard 3",
        "phone" => "(762) 953-8672",
        "email" => "dignissim@aol.com",
        "address" => "888-8358 Laoreet Road"
    ],
];

if(!empty($customers)) {
    //Tìm phần tử mảng trùng
    $countCustomer = count($customers);
    $customerDuplicate = []; // Lưu trữ các index trùng
    for ($i = 0; $i < ($countCustomer - 1); $i++) {
        for ($j = $i + 1; $j < $countCustomer; $j++) {
            if($customers[$i]['email'] == $customers[$j]['email']) {
                $customerDuplicate[] = $j;
            }
        }
    }

    // Xoá các phần tử mảng trùng
    if(!empty($customerDuplicate)) {
        foreach ($customerDuplicate as $index) {
            if(isset($customers[$index])) {
                unset($customers[$index]);
            }
        }
    }
}

?>
    <table width="100%" cellspacing="0" cellpadding="0" border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($customers) && is_array($customers)):
                $count = 1;  ?>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= $count ?></td>
                        <td><?= $customer['name'] ?></td>
                        <td><?= $customer['phone'] ?></td>
                        <td><?= $customer['email'] ?></td>
                        <td><?= $customer['name'] ?></td>
                    </tr>
            <?php $count++; endforeach; else: ?>
                <tr>
                    <td colspan="5" style="text-align: center">No Data</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
