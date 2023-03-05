<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create Record</title>
    <?php include('../layouts/employee-style.php'); ?>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="store.php" method="post">
                        <div class="form-group">
                            <label>title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label>description<span class="text-danger">*</span></label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>price <span class="text-danger">*</span></label>
                            <input type="text" name="price" class="form-control" value="" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('../layouts/employee-script.php'); ?>
</body>

</html>