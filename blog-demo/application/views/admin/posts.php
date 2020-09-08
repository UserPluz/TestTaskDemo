<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Посты</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <?php if (empty($list)): ?>
                            <p>Список постов пуст</p>
                        <?php else: ?>
                            <?php foreach ($list as $val): ?>
                    <div>
                        <p href="/post/<?php echo $val['id']; ?>">
                            <h2><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                            <h5><?php echo htmlspecialchars($val['content'], ENT_QUOTES); ?></h5>
                        </p>
                        <p>Дата: <?php echo $val['date']; ?></p>

                        <a href="/admin/add/" class="btn btn-primary">Добавить</a>
                        <a href="/admin/edit/<?php echo $val['id']; ?>" class="btn btn-primary">Редактировать</a>
                        <a href="/admin/delete/<?php echo $val['id']; ?>" class="btn btn-danger">Удалить</a>
                    </div>
                    <hr>                
                <?php endforeach; ?>
                         
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>