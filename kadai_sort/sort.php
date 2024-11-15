<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        // ソート関数の定義
        function sort_2way($array, $order) {
            if ($order) {
                sort($array); // 昇順
            } else {
                rsort($array); // 降順
            }

            // 結果を表示
            foreach ($array as $val) {
                echo $val . "<br>";
            }
        }

        // ソート対象の配列
        $nums = [15, 4, 18, 23, 10];

        // 昇順で表示
        echo "昇順ソート:<br>";
        sort_2way($nums, true);

        echo "<br>";

        // 降順で表示
        echo "降順ソート:<br>";
        sort_2way($nums, false);
        ?>
    </p>
</body>
</html>
