<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/edit/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Содержание</label>
                                <textarea class="form-control" type="text" name="content"> <?php echo htmlspecialchars($data['content'], ENT_QUOTES); ?> </textarea>
                            </div>
                            <div class="form-group">
                                <label>Дата: </label>
                                <input type="date" class="form-control" value="<?php echo htmlspecialchars($data['date'], ENT_QUOTES); ?>" rows="3" name="date"> </input>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>