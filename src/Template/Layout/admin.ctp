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
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
    <?= $this->Html->css('light-bootstrap-dashboard.css') ?>
    <?= $this->Html->css('pe-icon-7-stroke.css') ?>
    <?= $this->Html->css('styles.css') ?>


    <script type="text/javascript">

        const handleMenuToggle = (object) => {
            let parentElementClass = object.parentNode.classList
            if(parentElementClass.contains("open")) {
                //remove "open" to the classList to close the dropdown
                parentElementClass.remove("open")
            } else {
                //add "open" to the classList to open the dropdown
                parentElementClass.add("open")
            }
        }
        const handlePreviewClick = (event) => {
            console.log("Clicked Preview Button", event.form)
            let clientNameVal = document.getElementById('clientNameInput').value
            let reviewDetailVal = document.getElementById('reviewInput').value
            console.log(clientNameVal, reviewDetailVal)
            //fill in the preview card placeholders
            document.getElementById('previewClientName').textContent = clientNameVal
            document.getElementById('previewReviewDetails').textContent = reviewDetailVal
        }


    </script>


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


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>

    </div>
</div>
</body>
<!--   Core JS Files   -->

<?= $this->Html->js('jquery-1.10.2.js') ?>
<?= $this->Html->js('bootstrap.min.js') ?>
<?= $this->Html->js('bootstrap-checkbox-radio-switch.js') ?>
<?= $this->Html->js('chartlist.min.js') ?>
<?= $this->Html->js('bootstrap-notify.js') ?>
<?= $this->Html->js('light-bootstrap-dashboard.js') ?>
<?= $this->Html->js('tinymce/tinymce.min.js') ?>
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

        $('select').chosen({width: '50%'});
    })();
</script>


</html>
