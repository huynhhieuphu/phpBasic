<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Count Character</title>
</head>
<body>

<?php
/**
 * 3. Cho 1 trước đoạn văn bản, yêu cầu đếm số lần xuất hiện các ký tự trong chuỗi và hiển thị kết quả dưới dạng bảng.
 * bao gồm:
 * + STT
 * + Ký tự
 * + Số lần xuất hiện
 */

$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$contentLen = strlen($content);
$character = [];
$result = [];

if($contentLen > 0) {
    for ($i = 0; $i < $contentLen; $i++) {
        $character = $content[$i];
        if(!empty($result[$character])) {
            $result[$character]++;
        } else {
            $result[$character] = 1;
        }
    }
}
?>

<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th width="10%">STT</th>
            <th>Ký Tự</th>
            <th width="20%">Số lần xuất hiện</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($result)): $stt = 0;
            foreach ($result as $key => $value): $stt++; ?>
            <tr>
                <td width="10%"><?= $stt; ?></td>
                <td><?= $key === " " ? "khoảng trắng" : $key; ?></td>
                <td width="20%"><?= $value; ?></td>
            </tr>
        <?php endforeach; else: ?>
            <tr>
                <td colspan="5" style="text-align: center;">Không có dữ liệu</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


</body>
</html>
