<?php

require_once("utils.php");

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Registration</h1>

        <div class="row">
            <div class="col-12">
                <div style="max-width: 30rem;" class="card mx-auto">
                    <div class="card-header">
                        Registration
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label>Birthdate</label>
                                <div class="row">
                                    <div class="col-6">
                                        <?php generateNumericSelect('year', 1990, 2050) ?>
                                    </div>
                                    <div class="col-3">
                                        <?php generateNumericSelect('month', 1, 12) ?>
                                    </div>
                                    <div class="col-3">
                                        <?php generateNumericSelect('day', 1, 31) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="bio">BIO</label>
                                <textarea class="form-control" name="bio" id="bio" cols="30" rows="3"></textarea>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <button class="btn btn-primary" type="submit">Küldés</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <pre>
        <?php 
        
        var_dump($_POST);
        
        ?>
    </pre>


</body>
</html>