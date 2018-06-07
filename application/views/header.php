<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/custom.min.css">
	<!-- MUST BE ADDED LAST - You know about cascading style sheets right?-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/really-custom.css">

</head>
<style>
    .main-content{
        margin-top: 3.5rem;
    }
</style>

<body>
<div class="container" id="container">
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
        <div class="container">
            <a href="../" class="navbar-brand">Bootswatch</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
					<li class="nav-item">
						<!-- <a class="nav-link" href="<?=site_url()?>/purchases/browse">Purchases</a> -->
						<span class="nav-link">
							<?php echo anchor('purchases/browse','Purchases');?>
						</span>
					</li>
					<li class="nav-item">
                        <a class="nav-link" href="<?=site_url()?>/create_purchases">Add Record</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Themes <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="themes">
                            <a class="dropdown-item" href="../default/">Default</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../cerulean/">Cerulean</a>
                            <a class="dropdown-item" href="../cosmo/">Cosmo</a>
                            <a class="dropdown-item" href="../cyborg/">Cyborg</a>
                            <a class="dropdown-item" href="../darkly/">Darkly</a>
                            <a class="dropdown-item" href="../flatly/">Flatly</a>
                            <a class="dropdown-item" href="../journal/">Journal</a>
                            
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../help/">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://blog.bootswatch.com">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Flatly <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="download">
                            <a class="dropdown-item" href="https://jsfiddle.net/bootswatch/jmg3gykg/">Open in JSFiddle</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../4/flatly/bootstrap.min.css">bootstrap.min.css</a>
                            <a class="dropdown-item" href="../4/flatly/bootstrap.css">bootstrap.css</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../4/flatly/_variables.scss">_variables.scss</a>
                            <a class="dropdown-item" href="../4/flatly/_bootswatch.scss">_bootswatch.scss</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://builtwithbootstrap.com/" target="_blank">Built With Bootstrap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://wrapbootstrap.com/?ref=bsw" target="_blank">WrapBootstrap</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>


    <div class="container main-content">
		<!-- REST OF PAGE -->
