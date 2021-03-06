<!doctype html>
<html ⚡>
<head>
    <meta charset="utf-8">
    <title>Jumbotron Template for Bootstrap</title>
    <link rel="canonical" href="https://uncompiled.github.io/amp-bootstrap/" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="Sample Bootstrap Site">
    <meta name="author" content="Web Developer">

    <!-- fav icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/images/favicon/') }}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/images/favicon/') }}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/images/favicon/') }}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/images/favicon/') }}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/images/favicon/') }}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/images/favicon/') }}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/images/favicon/') }}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/images/favicon/') }}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon/') }}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/images/favicon/') }}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/') }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/images/favicon/') }}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon/') }}/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('/images/favicon/') }}/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/images/favicon/') }}/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- AMP boilerplate -->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <!-- Bootstrap core CSS is replaced with amp-custom style tag -->
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <amp-analytics type="gtag" data-credentials="include">
        <script type="application/json">
        {
            "vars" : {
                "gtag_id": "UA-133319068-1",
                "config" : {
                    "UA-133319068-1": { "groups": "default" }
                }
            }
        }
		</script>
    </amp-analytics>
    <style amp-custom>/*!
* Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}details,footer,header,main,nav{display:block}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}h1{margin:.67em 0;font-size:2em}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}button{margin:0;font:inherit;color:inherit}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button;cursor:pointer}button[disabled]{cursor:default}button::-moz-focus-inner{padding:0;border:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,:after,:before{color:#000;text-shadow:none;background:0 0;-webkit-box-shadow:none;box-shadow:none}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}a[href^="#"]:after,a[href^="javascript:"]:after{content:""}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}}@font-face{font-family:'Glyphicons Halflings';src:url(../fonts/glyphicons-halflings-regular.eot);src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:transparent}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}[role=button]{cursor:pointer}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}.h4,.h5,.h6,h4,h5,h6{margin-top:10px;margin-bottom:10px}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:18px}.h5,h5{font-size:14px}.h6,h6{font-size:12px}p{margin:0 0 10px}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-right:-15px;margin-left:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn:active:focus,.btn:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn:focus,.btn:hover{color:#333;text-decoration:none}.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn[disabled]{cursor:not-allowed;-webkit-box-shadow:none;box-shadow:none;opacity:.65}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default:focus{color:#333;background-color:#e6e6e6;border-color:#8c8c8c}.btn-default:hover{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active:focus,.btn-default:active:hover{color:#333;background-color:#d4d4d4;border-color:#8c8c8c}.btn-default:active{background-image:none}.btn-default[disabled]:focus,.btn-default[disabled]:hover{background-color:#fff;border-color:#ccc}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary:focus{color:#fff;background-color:#286090;border-color:#122b40}.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active:focus,.btn-primary:active:hover{color:#fff;background-color:#204d74;border-color:#122b40}.btn-primary:active{background-image:none}.btn-primary[disabled]:focus,.btn-primary[disabled]:hover{background-color:#337ab7;border-color:#2e6da4}.btn-link{font-weight:400;color:#337ab7;border-radius:0}.btn-link,.btn-link:active,.btn-link[disabled]{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{border-color:transparent}.btn-link:focus,.btn-link:hover{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:focus,.btn-link[disabled]:hover{color:#777;text-decoration:none}.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.collapse{display:none}.nav{padding-left:0;margin-bottom:0;list-style:none}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block;height:auto;padding-bottom:0;overflow:visible}.navbar-fixed-top .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse{max-height:200px}}.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}@media (min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}@media (min-width:768px){.navbar-nav{float:left;margin:0}}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse{border-color:#e7e7e7}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:focus,.navbar-default .btn-link:hover{color:#333}.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse{border-color:#101010}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{color:#fff}.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover{color:#444}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;color:inherit;background-color:#eee}.jumbotron .h1,.jumbotron h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron{padding-right:15px;padding-left:15px;border-radius:6px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron{padding-right:60px;padding-left:60px}.jumbotron .h1,.jumbotron h1{font-size:63px}}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.container:after,.container:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.row:after,.row:before{display:table;content:" "}.container:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.row:after{clear:both}.hidden{display:none}.visible-lg,.visible-md{display:none}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block}}@media (min-width:1200px){.visible-lg{display:block}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none}}@media (min-width:1200px){.hidden-lg{display:none}}
        /* Custom CSS */
        @font-face {
            font-family: Atami;
            src: url("fonts/Atami-Regular.otf"); }
        body {
            width: 100%;
            font-family: Atami;
            color: #454545; }

        .body-content {
            min-width: 320px;
            min-height: 100vh;
            overflow: hidden;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column; }

        .row {
            margin-left: 0;
            margin-right: 0; }

        nav {
            width: 100%;
            background-color: #273126; }
        nav .nav-box {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            width: 1100px;
            height: 90px;
            margin: 0 auto;
            -webkit-box-pack: justify;
            justify-content: space-between; }
        nav .nav-box .nav-list {
            display: none;
            -webkit-box-align: center;
            align-items: center; }
        nav .nav-box .nav-list a {
            margin-left: 50px;
            font-size: 20px;
            text-align: right;
            color: #fff; }
        nav .nav-box .nav-list a:first-child::before {
            background: url("../../../images/savvygood/blog.png") no-repeat 50%/cover;
            width: 17px;
            height: 18px; }
        nav .nav-box .nav-list a:before {
            content: "";
            display: block;
            margin-right: 6px; }
        nav .nav-box .nav-list a:nth-child(2):before {
            background: url("../../../images/savvygood/coupon.png") no-repeat 50%/cover;
            width: 18px;
            height: 19px; }

        .body-content .store .store-content .top-background {
            height: 220px;
            background-color: #f5f5f5; }
        .body-content .store .store-content .top-background h2 {
            font-style: normal;
            font-stretch: normal;
            letter-spacing: normal;
            text-align: center;
            font-size: 20px;
            font-weight: 700;
            line-height: normal;
            color: #454545;
            padding: 30px 0 10px;
            margin: 0; }
        .body-content .store .store-content .top-background .breadcrumb {
            display: flex;
            text-align: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding: 0;
            margin: 0; }
        .body-content .store .store-content .top-background .breadcrumb a {
            color: #454545;
            text-decoration: none;
            font-size: 12px; }
        .body-content .store .store-content .coupon-area {
            width: 1200px;
            margin: 0 auto; }
        .body-content .store .store-content .coupon-area .coupon-col-area {
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: start;
            align-items: flex-start;
            box-sizing: border-box;
            width: 1200px;
            background-color: #fff;
            margin-top: -120px;
            padding: 20px 50px 0; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left {
            width: 800px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it {
            width: 100%;
            display: flex;
            min-height: 160px;
            box-shadow: 0 2px 4px 0 rgba(186, 186, 186, 0.5);
            background-color: #fff;
            margin-bottom: 20px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap {
            box-sizing: border-box;
            position: relative;
            padding: 20px 20px 0;
            width: 100%;
            display: flex; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box {
            display: flex;
            -webkit-box-align: stretch;
            align-items: stretch; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .off {
            background-color: #fff;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            width: 100px;
            height: 120px;
            -webkit-box-pack: justify;
            justify-content: space-between;
            margin-right: 30px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .off .brand-img {
            width: 90px;
            -webkit-box-flex: 1;
            flex: 1;
            -webkit-box-pack: center;
            justify-content: center;
            background-color: #fff;
            display: flex;
            -webkit-box-align: center;
            align-items: center; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .off .brand-img img {
            max-width: 68px;
            max-height: 48px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info {
            -webkit-box-flex: 1;
            flex: 1; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .tl-top {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            font-size: 14px;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            margin-bottom: 10px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .tl-top .off-box {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            margin-right: 10px;
            width: auto;
            padding: 3px 8px;
            height: 22px;
            border-radius: 11px;
            background-color: #ffc437;
            font-size: 14px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: center;
            color: #fff; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .tl-top .verify-tag {
            color: #39bdd0;
            margin-right: 20px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .tl-top .verify-tag img {
            width: 13px;
            margin-bottom: 3px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .tl-top .use-tag {
            color: #dc5b5b; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .tl-top .use-tag img {
            margin-bottom: 4px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .title {
            width: 450px;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            letter-spacing: normal;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 40px;
            font-size: 16px;
            line-height: 1.25;
            color: #454545;
            margin-bottom: 6px;
            -webkit-line-clamp: 2;
            max-height: none;
            min-height: auto; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .content {
            height: 17px;
            font-size: 14px;
            line-height: normal;
            color: #666;
            -webkit-line-clamp: 1;
            max-height: 17px;
            min-height: 17px;
            margin-bottom: 15px;
            width: 450px;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            letter-spacing: normal;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .operate {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-flex: 1;
            flex: 1;
            overflow: hidden;
            border-radius: 2px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .operate .t-btn {
            background-color: #25b08b; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .operate .h-btn {
            border: 1px dashed #25b08b;
            border-left: none; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .operate .h-btn p {
            width: 100%;
            height: 0;
            margin: 0 auto;
            border-left: 0 solid transparent;
            border-right: 14px solid transparent;
            border-top: 36px solid #25b08b;
            position: relative;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .operate .h-btn p span {
            margin-top: -36px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .operate .btn {
            width: 150px;
            height: 36px;
            font-size: 16px;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.25;
            letter-spacing: normal;
            text-align: center;
            color: #fff;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            border-radius: 0;
            padding: 0; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .operate .btn p {
            margin: 0; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right {
            width: 220px;
            border-radius: 2px;
            padding: 20px 10px 10px;
            background-color: #fff; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .coupon-top {
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .coupon-top .brand-poster {
            margin: 0 auto;
            width: 100%;
            height: 100px;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            margin-bottom: 40px;
            display: flex; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .coupon-top .brand-poster .brand-poster-img {
            max-width: 140px;
            max-height: 68px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .about-section {
            width: 100%;
            margin-bottom: 40px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .about-section .xx_coupons {
            font-size: 16px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #454545;
            margin-bottom: 20px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .about-section .about-merchant-stats {
            width: 100%;
            margin-top: 20px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .about-section .about-merchant-stats tbody tr {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            justify-content: space-between;
            padding: 0;
            width: 100%;
            height: 24px;
            margin-bottom: 20px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .about-section .about-merchant-stats tbody tr td {
            font-size: 13px;
            line-height: 1;
            text-align: left;
            color: #666;
            padding: 0; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .filters {
            width: 100%;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .filters .filter {
            margin-bottom: 20px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .filters .filter .filter-name {
            font-size: 16px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #454545;
            margin-bottom: 20px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .filters .filter .l .filter-item {
            color: #666;
            margin-bottom: 20px;
            line-height: 14px;
            cursor: pointer;
            display: flex;
            -webkit-box-align: center;
            align-items: center; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .filters .filter .l .filter-item .check {
            display: block;
            width: 14px;
            height: 14px;
            border: 1px solid #d8d8d8;
            border-radius: 2px;
            float: left;
            margin-right: 10px;
            cursor: pointer; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .filters .filter .l .filter-item div {
            font-size: 13px;
            line-height: 14px; }
        .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right .filters .filter:last-of-type {
            margin-bottom: 0; }
        .body-content .store .store-content .index-pop .m-w {
            width: 1200px;
            margin: 0 auto; }
        .body-content .store .store-content .index-pop .m-w h3 {
            font-size: 24px;
            font-weight: 400;
            line-height: 1.25;
            color: #273126;
            font-style: normal;
            font-stretch: normal;
            letter-spacing: normal;
            text-align: center; }
        .body-content .store .store-content .index-pop .m-w h3:before, .body-content .store .store-content .index-pop .m-w h3:after {
            display: inline-block;
            content: "";
            position: relative;
            width: 12px;
            height: 12px;
            background-color: #ffc437; }
        .body-content .store .store-content .index-pop .m-w h3:before {
            left: -20px; }
        .body-content .store .store-content .index-pop .m-w h3:after {
            right: -20px; }
        .body-content .store .store-content .index-pop .m-w .table .title {
            display: flex;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: normal;
            color: #666;
            margin-top: 40px;
            padding-bottom: 14px;
            border-bottom: 1px solid #888; }
        .body-content .store .store-content .index-pop .m-w .table .title .t-time {
            box-sizing: border-box;
            width: 259px;
            padding-left: 20px;
            margin: 0; }
        .body-content .store .store-content .index-pop .m-w .table .title .t-cd {
            width: 548px;
            padding-right: 20px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            overflow: hidden;
            max-height: none;
            min-height: auto;
            box-sizing: border-box;
            margin: 0; }
        .body-content .store .store-content .index-pop .m-w .table .title .t-code {
            margin: 0; }
        .body-content .store .store-content .index-pop .m-w .table ul {
            padding: 0;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0;
            color: #888;
            display: flex;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            list-style: none; }
        .body-content .store .store-content .index-pop .m-w .table ul .t-time {
            box-sizing: border-box;
            width: 259px;
            padding-left: 20px; }
        .body-content .store .store-content .index-pop .m-w .table ul .t-time p {
            padding: 15px 0;
            margin: 0; }
        .body-content .store .store-content .index-pop .m-w .table ul .t-cd {
            width: 548px;
            padding-right: 20px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            overflow: hidden;
            max-height: none;
            min-height: auto;
            box-sizing: border-box; }
        .body-content .store .store-content .index-pop .m-w .table ul .t-cd p {
            padding: 15px 0;
            margin: 0; }
        .body-content .store .store-content .index-pop .m-w .table ul .t-code p {
            padding: 15px 0;
            margin: 0; }

        footer {
            height: 50px;
            background-color: #273126; }
        footer .box {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            width: 1100px;
            margin: 0 auto;
            height: 100%;
            -webkit-box-pack: justify;
            justify-content: space-between; }
        footer .box .copyright {
            font-size: 13px;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #fff;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            margin: 0; }
        footer .box .copyright img {
            margin-left: 5px; }

        @media screen and (max-width: 1100px) {
            .body-content .store .store-content .coupon-area .coupon-col-area, .body-content .store .store-content .coupon-area {
                width: 768px; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left {
                width: 100%; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-right {
                display: none; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .off {
                margin-right: 20px;
                width: 80px; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .title, .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .content {
                width: 345px; }

            .body-content .store .store-content .index-pop .m-w {
                width: 768px; }

            .body-content .store .store-content .index-pop .m-w .table .title .t-time, .body-content .store .store-content .index-pop .m-w .table ul .t-time {
                width: 190px; }

            .body-content .store .store-content .index-pop .m-w .table .title .t-cd, .body-content .store .store-content .index-pop .m-w .table ul .t-cd {
                width: 440px; }

            footer {
                padding: 10px 0; }

            footer .box {
                width: 768px; }

            nav .nav-box {
                width: 768px; } }
        @media screen and (max-width: 768px) {
            nav .nav-box {
                width: 100%;
                height: 50px;
                padding: 10px; }

            nav .nav-box .logo a {
                display: flex;
                -webkit-box-align: center;
                align-items: center; }

            nav .nav-box .logo img {
                max-height: 20px; }

            nav .nav-box .nav-list {
                display: none;
                -webkit-box-pack: justify;
                justify-content: space-between;
                padding: 0 10px; }

            nav .nav-box .nav-list a {
                margin-left: 20px;
                font-size: 14px; }

            nav .nav-box .nav-list a:first-child::before {
                width: 13px;
                height: 14px; }

            nav .nav-box .nav-list a:nth-child(2):before {
                width: 14px;
                height: 15px; }

            header {
                width: 100%;
                height: 50px;
                padding: 10px; }

            .body-content .store .store-content .top-background h2 {
                font-size: 18px;
                padding: 10px 0; }

            .body-content .store .store-content .top-background {
                height: auto; }

            .body-content .store .store-content .coupon-area {
                width: 100%;
                padding: 0 5px; }

            .body-content .store .store-content .coupon-area .coupon-col-area {
                width: 100%;
                padding: 0;
                margin: 0; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left {
                width: 100%; }

            .body-content .store .store-content .top-background .breadcrumb {
                padding-bottom: 10px; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it {
                padding: 10px; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                flex-direction: column;
                -webkit-box-pack: justify;
                justify-content: space-between;
                padding: 0; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .off {
                position: absolute;
                bottom: 0;
                left: 0;
                margin-right: 0;
                border: none;
                width: auto;
                height: auto; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .off .brand-img {
                width: 80px;
                height: 34px;
                -webkit-box-pack: start;
                justify-content: flex-start; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .off .brand-img img {
                max-width: 68px;
                max-height: 30px; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info {
                padding: 5px 0 10px; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .tl-top {
                font-size: 12px;
                margin-bottom: 8px; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .tl-top .verify-tag {
                margin-right: 10px; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .title {
                font-size: 16px;
                margin-bottom: 8px;
                width: 100%; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .wrap-box .info .content {
                width: 100%;
                margin-bottom: 8px; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .operate {
                position: static;
                width: 120px;
                height: 34px;
                border-radius: 2px;
                margin-left: auto; }

            .body-content .store .store-content .coupon-area .coupon-col-area .coupon-c-a-left .coupon-right-list .coupon-right-list-top .coupon-list .row-it .wrap .operate .btn {
                font-size: 16px;
                height: 34px; }

            .index-pop {
                display: none; }

            .footer {
                padding: 10px 0; }

            footer .box {
                width: 100%;
                padding: 10px;
                -webkit-box-pack: center;
                justify-content: center;
                -webkit-box-align: stretch;
                align-items: stretch; }

            footer .box .copyright {
                width: 100%;
                text-align: center;
                -webkit-box-pack: center;
                justify-content: center;
                font-size: 12px; } }
        @media screen and (max-width: 767px) {
            header {
                height: unset; }
            header .logo-headers {
                text-align: center; }
            header .logo-headers .header-left a {
                display: unset; } }

        /*# sourceMappingURL=app.css.map */



        @yield('css')
    </style>
</head>
<body>
@include('elements.header-amp')
<div class="body-content">
    @yield('content')
</div>
@include('elements.footer')
</body>
</html>