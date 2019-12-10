<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>My Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--    <link rel="stylesheet" type="text/css" href="webroot/css/my-login.css">-->
    <?= $this->Html->css('my-login.css') ?>
</head>

<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <?= $this->Html->image('kodinger.jpg', ['plugin' => false])?>
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title" align="middle">Login</h4>
                        <div>
                            <?= $this->Form->create(); ?>

                            <fieldset>
                                <?= $this->Form->control('username'); ?>
                                <?php if(isset($usernameError)){ ?>
                                <p style="color: red;font-weight: bold"><?php echo $usernameError?></p>
                                <?php } ?>
                                <?= $this->Form->control('password', array('type' => 'password')); ?>
                                <?php if(isset($passwordError)){ ?>
                                <p style="color: red;font-weight: bold"><?php echo $passwordError?></p>
                                <?php } ?>


                            </fieldset>
                            <div align="middle" >
                                <?= $this->Form->button('Login',['class'=>'btn btn-success']); ?>
                                <?php echo $this->Html->link('Forgot Password',['action'=>'forgotpassword'],['class'=>'btn btn-info']) ?>
                            </div>
                            <?= $this->Form->end(); ?>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    Copyright &copy; 2019 &mdash; Allsorters
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>
<?= $this->Html->script('kodinger.js') ?>

</body>
</html>
