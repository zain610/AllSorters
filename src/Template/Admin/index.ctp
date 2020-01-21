<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-1">Dashboard</h2>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <i class="fa fa-bell">
                                </i>
                                <div class="text">
                                    <h2><?= $this->Html->link(
                                            $count_request,
                                            ['prefix'=>'admin','controller'=>'request','action'=>'index'],
                                            ['style'=>'color:#f2f2f2']
                                        )?></h2>
                                    <span><?= $this->Html->link(
                                        'Unread Queries',
                                        ['prefix'=>'admin','controller'=>'request','action'=>'index'],
                                        ['style'=>'color:#f2f2f2']
                                        )?>
                                    </span>
                                </div>
                            </div>
                            <div class="overview-chart">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <i class="fa fa-book"></i>
                                <div class="text">
                                    <h2><?= $this->Html->link(
                                            $count_blog,
                                            ['prefix'=>'admin','controller'=>'BlogPost','action'=>'index'],
                                            ['style'=>'color:#f2f2f2']
                                        )?></h2>
                                    <span><?= $this->Html->link(
                                            'Total Blog',
                                            ['prefix'=>'admin','controller'=>'BlogPost','action'=>'index'],
                                            ['style'=>'color:#f2f2f2']
                                        )?>
                                    </span>
                                </div>
                            </div>
                            <div class="overview-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <i class="fa fa-comments"></i>
                                <div class="text">
                                    <h2><?= $this->Html->link(
                                            $count_comment,
                                            ['prefix'=>'admin','controller'=>'BlogPost','action'=>'displayComments'],
                                            ['style'=>'color:#f2f2f2']
                                        )?></h2>
                                    <span><?= $this->Html->link(
                                            'Total Comments',
                                            ['prefix'=>'admin','controller'=>'BlogPost','action'=>'displayComments'],
                                            ['style'=>'color:#f2f2f2']
                                        )?>
                                    </span>
                                </div>
                            </div>
                            <div class="overview-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <i class="fa fa-calendar"></i>
                                <div class="text">
                                    <h2>
                                        <?= $this->Html->link(
                                            $count_job,
                                            ['prefix'=>'admin','controller'=>'Job','action'=>'index'],
                                            ['style'=>'color:#f2f2f2']
                                            )?>
                                    </h2>
                                    <span><?= $this->Html->link(
                                            'Incomplete Job',
                                            ['prefix'=>'admin','controller'=>'Job','action'=>'index'],
                                            ['style'=>'color:#f2f2f2']
                                        )?>
                                    </span>
                                </div>
                            </div>
                            <div class="overview-chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9">

                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                        </table>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>



<!-- Main JS-->
<script src="js/main.js"></script>
