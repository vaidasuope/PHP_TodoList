<?php include 'view/partials/header.php' ?>

<h1 class="mt-3 text-center">Organize it all with to-do list</h1>
<div class="row justify-content-center">
    <div class="col-md-10 mt-3">
        <form method="post">
            <div class="form-group rounded formBack">
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject">
                </div>
                <div class="form-group">
                    <label for="priority">Priority:</label>
                    <select class="form-control" id="priority" name="priority">
                        <option class="disabled selected col">--Choose--</option>
                        <?php foreach ($priority as $item): ?>
                            <option class="col"><?= ucfirst($item) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dueDate">Due date:</label>
                    <input type="date" class="form-control" id="duedate" name="duedate">
                </div>
<!--                                    <div class="form-group">-->
<!--                                        <label for="status">Status:</label>-->
<!--                                        <select class="form-control" id="status">-->
<!--                                            <option class="selected disabled col">--Choose--</option>-->
<!--                                            --><?php //foreach ($status as $item):?>
<!--                                                <option class="col">--><?// //= ucfirst($item) ?><!--</option>-->
<!--                                            --><?php //endforeach;?>
<!--                                        </select>-->
<!--                                    </div>-->
                <!--                    <div class="form-group">-->
                <!--                        <label for="percent">Percent completed:</label>-->
                <!--                        <select class="form-control" id="percent">-->
                <!--                            <option class="selected disabled col">--Choose--</option>-->
                <!--                            --><?php //foreach ($percent as $item):?>
                <!--                                <option class="col">--><? //= ucfirst($item) ?><!--</option>-->
                <!--                            --><?php //endforeach;?>
                <!--                        </select>-->
                <!--                    </div>-->
            </div>
            <div class="form-group d-flex justify-content-center">
                <button type="submit" name="send" id="send" class="mt-3 col-md-4 btn-lg rounded">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php include 'view/partials/bottom.php'?>
