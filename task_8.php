<?php
$persons = [
    [
        "name" => "Sunny A.",
        "job" => "(UI/UX Expert)",
        "job_title" => "Lead Author",
        "img" => "img/demo/authors/sunny.png",
        "twitter" => "https://twitter.com/@myplaneticket",
        "twitter_name" => "@myplaneticket",
        "wrapbootstrap" => "https://wrapbootstrap.com/user/myorange",
        "title" => "Contact Sunny",
        "is_banned" => false,
    ],
    [
        "name" => "Jos K.",
        "job" => "(ASP.NET Developer)",
        "job_title" => "Partner &amp; Contributor",
        "img" => "img/demo/authors/josh.png",
        "twitter" => "https://twitter.com/@atlantez",
        "twitter_name" => "@atlantez",
        "wrapbootstrap" => "https://wrapbootstrap.com/user/Walapa",
        "title" => "Contact Jos",
        "is_banned" => false,
    ],
    [
        "name" => "Jovanni L.",
        "job" => "(PHP Developer)",
        "job_title" => "Partner &amp; Contributor",
        "img" => "img/demo/authors/jovanni.png",
        "twitter" => "https://twitter.com/@lodev09",
        "twitter_name" => "@lodev09",
        "wrapbootstrap" => "https://wrapbootstrap.com/user/lodev09",
        "title" => "Contact Jovanni",
        "is_banned" => true,
    ],
    [
        "name" => "Roberto R.",
        "job" => "(Rails Developer)",
        "job_title" => "Partner &amp; Contributor",
        "img" => "img/demo/authors/roberto.png",
        "twitter" => "https://twitter.com/@sildur",
        "twitter_name" => "@sildur",
        "wrapbootstrap" => "https://wrapbootstrap.com/user/sildur",
        "title" => "Contact Roberto",
        "is_banned" => true,
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
        <style>
            .banned{
                opacity: .4;
            }
        </style>
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php foreach($persons as $person):?>
                            <div class="<?php echo $person['is_banned'] ? 'banned' : '';?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php echo $person['img'];?>" alt="<?php echo $person['name'];?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                       <?php echo $person['name'] . $person['name'];?>
                                        <small class="m-0 fw-300">
                                        <?php echo $person["job_title"];?>
                                        </small>
                                    </h5>
                                    <a href="<?php echo $person['twitter'];?>" class="text-info fs-sm" target="_blank"><?php echo $person['twitter_name'];?></a>
                                    <a href="<?php echo $person['wrapbootstrap'];?>" class="text-info fs-sm" target="_blank" title="<?php echo $person['title'];?>"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <?php endforeach;?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
                       

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
