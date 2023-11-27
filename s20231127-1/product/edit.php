<?php

$data = [
    'name' => 'bob',
    'mobile' => '0911-111-111',
    'price' => '1000'
]

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container-fluid {
            width: 80%;
        }

        .button {
            text-align: center;
        }

        button {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <form action="" method="post">
            <h1>Product Create</h1>
            <div class="mb-3 mt-3">
                <label for="file">Photo:</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <div class="mb-3 mt-3">
                <label for="photoDesc">Photo Description</label>
                <input type="text" name="photoDesc" id="photoDesc" class="form-control">
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="price">Price:</label>
                        <input type="number" name="price" id="price" value="<?=$data['price'];?>" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="unit">單位:</label>
                        <select name="" id="unit" class="form-select">
                            <option value="">臺幣</option>
                            <option value="">美金</option>
                            <option value="">日圓</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="button">
                <button type="submit" class="btn btn-primary">確認</button>
            </div>
        </form>
    </div>
</body>

</html>