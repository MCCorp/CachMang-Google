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
h1 {
  font-size: 20px;
  color: #1a0dab;
  margin-top: 0; }

h3 {
  font-size: 18px;
  margin-top: 0;
  margin-bottom: 0; }
  h3 a {
    color: #1a0dab;
    font-weight: normal; }

.related-keywords a {
  color: #1a0dab; }

.npd-lr {
  padding-left: 0;
  padding-right: 0; }

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  left: 10px;
  right: 10px;
  top: 100px; }

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4; }

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; }

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important;
  color: #ffffff; }

.result-title {
  margin-bottom: 0; }
  .result-title a {
    color: #1a0dab;
    font-size: 18px; }

.result-url {
  width: 100%;
  margin-bottom: 0;
  color: #006621;
  font-size: 14px; }

.ad {
  margin-right: 7px;
  background-color: #fff;
  border-radius: 3px;
  color: #006621;
  display: inline-block;
  font-size: 11px;
  border: 1px solid #006621;
  padding: 1px 3px 0 2px;
  line-height: 11px;
  vertical-align: baseline; }

.box-result {
  margin-bottom: 26px; }

.trim-text {
  display: inline-block;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis; }

header {
  border-bottom: 2px solid transparent;
  border-bottom-color: #f2f2f2;
  background-color: #fff;
  padding-top: 2px;
  font-size: 12px; }

.main {
  max-width: 1140px;
  margin: auto;
  padding: 1rem; }

.menu-t {
  margin-right: 0; }
  .menu-t ul {
    margin-top: 7px;
    margin-bottom: 9px; }
    .menu-t ul li {
      display: inline;
      margin: auto;
      color: black; }

.menu-t-right {
  float: right;
  padding-right: 40px; }
  .menu-t-right li {
    padding-left: 10px; }

.m-t-r-l {
  padding-left: 10px; }

.search-form {
  margin-top: 3rem;
  margin-bottom: 25px; }

.middle-me {
  position: fixed;
  top: 30%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%); }

.logo-search {
  text-align: center;
  position: relative;
  height: 110px; }
  .logo-search img {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100%;
    padding-bottom: 5px; }

.find-jobs-button {
  text-align: center; }
  .find-jobs-button button {
    margin-top: 57px;
    background-color: #085ff7 !important;
    border-color: #085ff7 !important;
    color: white;
    border-radius: 20px;
    height: 42px;
    width: 120px;
    border: solid 1px;
    font-size: 15px;
    font-weight: bold; }

.p-what, .p-where {
  font-size: 20px;
  letter-spacing: -.1px;
  font-weight: 700;
  color: #000;
  display: block;
  margin-bottom: 0; }

.p-what-des, .p-where-des {
  font-size: 12px;
  font-weight: 400;
  color: #767676;
  display: block;
  margin-bottom: 0; }

.what-search label, .where-search label {
  padding-left: 10px; }

.inp-what-wrapper input, .inp-where-wrapper input {
  width: 100%;
  height: 44px;
  border-radius: 8px;
  border-color: #ccc !important;
  border: solid 2px; }

.col-search {
  padding: 10px; }

.ads-c-cv {
  text-align: center;
  font-size: 16px; }

.ads-p-job {
  text-align: center;
  font-size: 16px; }
  .ads-p-job span {
    color: #5a38d6;
    font-weight: bold; }

.ads-c-cv span {
  color: #5a38d6;
  font-weight: bold; }

.job-news {
  text-align: center;
  font-size: 15px;
  border-top: 2px solid #f6f6f6;
  border-bottom: 4px solid #ff6c40; }
  .job-news span {
    color: #5a38d6; }
  .job-news p:first-child {
    margin-bottom: 0; }

.job-news-row {
  padding-top: 60px;
  padding-bottom: 10px; }

.footer-text {
  text-align: center;
  font-size: 14px;
  padding-top: 20px; }

.fr-mg {
  margin: auto; }

.ft-right p {
  float: right; }

.ft-t {
  margin-right: 0; }

.inp-p-what, .inp-p-where {
  font-size: 20px;
  padding-left: 15px;
  padding-right: 15px; }

@media screen and (max-width: 1199px) {
  .logo-search {
    height: 100px; } }
@media screen and (max-width: 991px) {
  .logo-search {
    height: 95px; }

  .main {
    max-width: 480px;
    margin: auto; }

  .find-jobs-button button {
    width: 100%;
    margin-top: 53px; }

  .search-form {
    margin-top: 0;
    padding-left: 0;
    padding-right: 0; } }
@media screen and (max-width: 767px) {
  .con-results {
    padding-left: 5px;
    padding-right: 5px; }

  .logo-search img {
    position: relative;
    margin: 0 auto;
    height: 100%;
    width: auto;
	}
	.find-jobs-button button {
    margin-top: 15px;
	}	
}
@media screen and (max-width: 479px) {
  .logo-search img {
    width: 100%;
    height: auto; }

  .container {
    padding-left: 5px;
    padding-right: 5px; }

  .fr-mg {
    text-align: center; }

  .ft-right p {
    float: none; } }
h3.text-primary {
	padding:8px
}
/*# sourceMappingURL=app.css.map */


		@yield('css')
</style>
</head>
<body>
<div class="col-xs-12 body-content">
@if(ENABLE_SEARCH_BOX)
<div class="search-form col-xs-12" style="margin-top: 10px;margin-bottom: 10px">
        <form id="frmSearch" autocomplete="off" action="{{ url('/query') }}">
            {{--<div class="col-sm-2 col-xs-12 logo-search">
			<a href="{{ url('/') }}">
                    <img src="{{ asset('/images/logo/'. DOMAIN_HOST . '.png') }}" alt="" class="img-logo-search">
			</a>
            </div>--}}
            <div class="col-sm-4 col-xs-12 col-search">
                <div class="what-search">
                    <label class="p-what">what</label>
                    <label class="p-what-des">jobs title, keyworks or company</label>
                    <div class="inp-what-wrapper">
                        <input type="text" class="inp-p-what" id="q" name="q">
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 col-search">
                <div class="where-search">
                    <label class="p-where">where</label>
                    <label class="p-where-des">city or province</label> 
					<div class="inp-where-wrapper">
                        <input type="text" class="inp-p-where" value="{{ CITY }}" id="where">
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12 find-jobs-button">
                <button type="submit" class="btn-find-jobs" id="btnSearch">Find Jobs</button>
            </div>
        </form>
    </div>
@endif
    <div class="col-xs-12">
        <h1 class="home-h1">
            Holidays And Occasions Coupon Code and Promotions Search {{ date("F j, Y") }}
        </h1>
    </div>
    <?php $_keyword = env('KEYWORD') ? '-'.env('KEYWORD'):''; ?>
    <div class="col-xs-12 npd-lr popular-kws">
        <div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @foreach($holiday[1] as $k => $v)
                        <a href='{{ url('/') . '/' . str_slug($v) . $_keyword }}' class='list-group-item' title='{{ $v }}'> > {{ $v }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @foreach($holiday[2] as $k => $v)
                        <a href='{{ url('/'). '/' . str_slug($v) . $_keyword }}' class='list-group-item' title='{{ $v }}'> > {{ $v }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @foreach($holiday[3] as $k => $v)
                        <a href='{{ url('/'). '/'  . str_slug($v) . $_keyword }}' class='list-group-item' title='{{ $v }}'> > {{ $v }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @foreach($holiday[4] as $k => $v)
                        <a href='{{ url('/'). '/'  . str_slug($v) . $_keyword }}' class='list-group-item' title='{{ $v }}'> > {{ $v }}</a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <div class="col-xs-12">
        <h1 class="home-h1-blue">
            Top Trending Search {{ date("F j, Y") }}
        </h1>
        <div class="col-xs-12 top-trending-search">
            <div class="col-lg-3 col-md-3 col-sm-6">
                @foreach($trendingSearch[1] as $k => $v)
                    <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                    <p>
                        <span> > </span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                    </p>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                @foreach($trendingSearch[2] as $k => $v)
                    <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                    <p>
                        <span> > </span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                    </p>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                @foreach($trendingSearch[3] as $k => $v)
                    <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                    <p>
                        <span> > </span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                    </p>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                @foreach($trendingSearch[4] as $k => $v)
                    <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                    <p>
                        <span> > </span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                    </p>
                @endforeach
            </div>

            {{--<div class="col-xs-12 page-nav">
                <span>
                    <a href="#1" class="page">1</a>
                </span>
                <span>
                    <a href="#2" class="page">2</a>
                </span>
                <span>
                    <a href="#3" class="page">3</a>
                </span>
            </div>--}}

        </div>
    </div>
</div>
<div style="position: fixed;bottom:0;width:100%">
@include('elements.footer')
</div>
</body>
</html>