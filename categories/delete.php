<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - POST</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php require_once 'logic/logic-lay-1-theo-id.php'; ?>
    <div class="container">
        <div class="row">
            <h1>FORM - Thêm mới danh mục</h1>

            <form action="logic/logic-xoa.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?= $result['name'] ?>">
                <label for="img" class="mt-2">Img</label>
                <input type="file" class="form-control" name="img" id="img">
                <label for="in_active" class="mt-2">Is Active</label>
                <select name="in_active" id="in_active" class="form-control">
                    <option <?= $result['in_active'] ? 'selected' : '' ?> value="1">Yes</option>
                    <option <?= $result['in_active'] ? '' : 'selected' ?> value="0">No</option>
                </select>

                <button type="submit" class="btn btn-primary mt-2">Xóa</button>
            </form>
        </div>
    </div>

</body>

</html>