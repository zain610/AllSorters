<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title', 'Welcome to the Admin Section of the Application') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
    <?= $this->Html->css('light-bootstrap-dashboard.css') ?>
    <?= $this->Html->css('pe-icon-7-stroke.css') ?>
    <?= $this->Html->css('styles.css') ?>
</head>
<body>
<!--?php: $this->fetch('title', 'Foundation System Build')-->
<div class="wrapper">
    <div class="sidebar" data-color="blue">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->
        <?= $this->element('Admin/navbar'); ?>




        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <?= $this->fetch('content') ?>

                </div>
            </div>
        </div>

    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<?= $this->Html->script([
    'jquery-3.4.1.min.js',
    'bootstrap.min.js',
    'bootstrap-checkbox-radio-switch.js',
    'bootstrap-notify.js',
    'light-bootstrap-dashboard.js',
    'tinymce/tinymce.min.js'
    ]) ?>
<script>
    (function() {
        tinymce.init({
            class: 'textarea',
            selector: 'textarea',
            content_css: '../../../css/home.css',


            // Started with the full list of all plugins from https://www.tinymce.com/docs/demo/full-featured/, and then
            // removed ones which were unneeded for a relatively simplistic blog platform.
            plugins: 'fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media table anchor toc lists wordcount imagetools contextmenu colorpicker textpattern help',
            menubar: 'edit insert format table tools help',
            toolbar1: 'formatselect | bold italic strikethrough codetag | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | fullpage',
            menu: {
                edit: {title: 'Edit', items: 'undo redo | cut copy paste | selectall'},
                insert: {title: 'Insert', items: 'link media'},
                format: {
                    title: 'Format',
                    items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'
                },
                table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'}
            },

            // This is quite messy, but the back story is that TinyMCE DOES provide the ability to format selected
            // text using <code></code> tags, but it does NOT allow you to put a button in the toolbar for this.
            // As such, I've hacked into the existing ability to toggle the 'code' style, based on the following
            // stack voerflow answer: https://stackoverflow.com/a/23241638. The "codetag" button is then used in the
            // "toolbar1" above.
            setup: function(editor) {
                editor.addButton('codetag', {
                    text: '',
                    icon: 'code',
                    onclick: function() {
                        editor.formatter.toggle('code');
                    }
                });
            },
        });
    })();
</script>


</html>
