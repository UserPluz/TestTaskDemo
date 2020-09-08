<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                <p>Список постов пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div>
                        <p href="/post/<?php echo $val['id']; ?>">
                            <h2><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                            <h5><?php echo htmlspecialchars($val['content'], ENT_QUOTES); ?></h5>
                        </p>
                        <p> Дата: <?php echo $val['date']; ?></p>
                    </div>
                    <hr>
                <?php endforeach; ?>
               
            <?php endif; ?>
        </div>
    </div>
</div>