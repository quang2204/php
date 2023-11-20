<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Danh mục</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <?php require_once 'user-logic/logic-danh-sach.php'; ?>

    <table>
        <caption>
            <h1>Danh sách danh mục</h1>
            <a href="create.php">
                <button type="button" class="button">
                    <span class="button__text">Add Item</span>
                    <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round"
                                                                                                                                                stroke-linecap="round"
                                                                                                                                                stroke="currentColor"
                                                                                                                                                height="24"
                                                                                                                                                fill="none"
                                                                                                                                                class="svg">
                            <line y2="19" y1="5" x2="12" x1="12"></line>
                            <line y2="12" y1="12" x2="19" x1="5"></line>
                        </svg></span>
                </button>
            </a>
        </caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>img</th>
            <th>Action</th>
        </tr>

        <?php foreach ($result as $key => $value): ?>

            <tr>
                <td>
                    <?= $value['id'] ?>
                </td>
                <td>
                    <?= $value['name'] ?>
                </td>
                <td>
                    <?= $value['email'] ?>
                </td>
                <td>
                    <?= $value['password'] ?>
                </td>
                <td>
                    <?= $value['img'] ?>
                </td>
                <td id="button">
                    <a href="update.php?id=<?= $value['id'] ?>">
                        <button class="btn">Cập nhật </button>
                    </a>
                    <a href="delete.php?id=<?= $value['id'] ?>"
                                                                                                                                            onclick="return confirm('Are you sure you want to delete this item?')">
                        <button class="btn">Xóa </button>
                    </a>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>
</body>

</html>