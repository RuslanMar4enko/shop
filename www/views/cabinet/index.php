<?php include ROOT . '/views/layouts/header.php'; ?>


<section>
    <div class='my-cab'> Кабинет пользователя </div>
    <div class="container">
        <div class="row">


            <h3>Привет, <?php echo ucfirst($user['name']);?>!</h3>
            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <li><a href="/cabinet/history">Список покупок</a></li>
            </ul>

        </div>
    </div>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>
