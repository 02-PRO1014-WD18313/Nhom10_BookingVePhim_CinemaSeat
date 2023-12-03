<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
</head>
<style>
    div.rating {
        width: 270px;
        display: inline-block;
    }

    input.star {
        display: none;
    }

    label.star {
        float: right;
        padding: 10px;
        font-size: 36px;
        color: #444;
        transition: all .2s;
    }

    input.star:checked~label.star:before {
        content: '\f005';
        color: #FD4;
        transition: all .25s;
    }

    input.star-5:checked~label.star:before {
        color: #FE7;
        text-shadow: 0 0 20px #952;
    }

    input.star-1:checked~label.star:before {
        color: #F62;
    }

    label.star:hover {
        transform: rotate(-15deg) scale(1.3);
    }

    label.star:before {
        content: '\f006';
        font-family: FontAwesome;
    }
</style>

<body>
    <form action="" method="post">
        <?php
        // Define the number of comments
        $numComments = 3;

        // Loop to create input fields dynamically
        for ($i = 1; $i <= $numComments; $i++) { ?>
            <input type="text" value="<?= $i ?>" name="id<?= $i ?>" hidden><br>
            <label for="">Bình luận <?= $i ?></label> <br>
            <textarea name="binhluan<?= $i ?>" id="" cols="30" rows="10"></textarea><br>
            <div class="rating">
                <input class="star star-5" id="star-5-<?= $i ?>" value="5" type="radio" name="star-<?= $i ?>" />
                <label class="star star-5" for="star-5-<?= $i ?>"></label>
                <input class="star star-4" id="star-4-<?= $i ?>" value="4" type="radio" name="star-<?= $i ?>" />
                <label class="star star-4" for="star-4-<?= $i ?>"></label>
                <input class="star star-3" id="star-3-<?= $i ?>" value="3" type="radio" name="star-<?= $i ?>" />
                <label class="star star-3" for="star-3-<?= $i ?>"></label>
                <input class="star star-2" id="star-2-<?= $i ?>" value="2" type="radio" name="star-<?= $i ?>" />
                <label class="star star-2" for="star-2-<?= $i ?>"></label>
                <input class="star star-1" id="star-1-<?= $i ?>" value="1" type="radio" name="star-<?= $i ?>" />
                <label class="star star-1" for="star-1-<?= $i ?>"></label>
            </div>
        <?php }
        ?>

        <button name="submit" value="submit" type="submit">Gửi</button>
    </form>

    <?php
    $_SESSION['mang'] = [];
    if (isset($_POST['submit'])) {
        $mang = $_SESSION['mang'];

        // Loop through posted data and store in session array
        for ($i = 1; $i <= $numComments; $i++) {
            $id = $_POST['id' . $i];
            $binhluan = $_POST['binhluan' . $i];
            $rating = isset($_POST['star-' . $i]) ? $_POST['star-' . $i] : null;

            // Check if the comment is not empty before adding to the array
            if (!empty($binhluan)) {
                $mang[] = ['id' => $id, 'binhluan' => $binhluan, 'rating' => $rating];
            }
        }

        $_SESSION['mang'] = $mang;
        echo '<pre>';
        var_dump($_SESSION['mang']);
        echo count($_SESSION['mang']);
    }
    ?>
</body>

</html>