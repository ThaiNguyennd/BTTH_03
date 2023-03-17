<?php require './views/home/header.php'; ?>

<form action="">
    <h3>Chi tiết Bài viết</h3>
</form>
<main class="container mt-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->

    <div class="row mb-5">
        <div class="col-sm-4">
            <img src="images/songs/cayvagio.jpg" class="img-fluid" alt="...">
        </div>
        <div class="col-sm-8">
            <h5 class="card-title mb-2">
                <a href="" class="text-decoration-none"><?= $articleDetail -> tieude  ?></a>
            </h5>
            <p class="card-text"><span class=" fw-bold">Bài hát: </span><?= $articleDetail -> ten_bhat ?></p>
            <p class="card-text"><span class=" fw-bold">Thể loại: </span><?= $articleDetail -> ten_tloai  ?></p>
            <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?= $articleDetail -> tomtat ?></p>
            <p class="card-text"><span class=" fw-bold">Nội dung: </span><?= $articleDetail -> noidung ?></p>
            <p class="card-text"><span class=" fw-bold">Tác giả: </span><?= $articleDetail -> ten_tgia  ?></p>

        </div>
    </div>
</main>
