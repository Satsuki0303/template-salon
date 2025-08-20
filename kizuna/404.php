<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'noto sans jp', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        a {
            display: inline-block;
            background-color: var(--main-color);
            color: white;
            padding: 10px 30px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: var(--select-color);
        }
    </style>
</head>
<body>
    <h1>ページが見つかりません</h1>
    <p>お探しのページは存在しないか、削除されました。</p>
    <a href="<?php echo esc_url(home_url('/')); ?>">トップページはこちら</a>
</body>
</html>