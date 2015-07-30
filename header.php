<!doctype html>

<!--[if lt IE 7]>
    <html class='no-js lt-ie9 lt-ie8 lt-ie7'>
<![endif]-->
<!--[if IE 7]>
    <html class='no-js lt-ie9 lt-ie8'>
<![endif]-->
<!--[if IE 8]>
    <html class='no-js lt-ie9'>
<![endif]-->
<!--[if gt IE 8]>
    <!--> <html class='no-js pt'>
<!--<![endif]-->

<head>

    <!-- Meta Data -->
    <?php include('_meta.php') ?>

    <!-- Libs Head -->
    <?php include('_script_head.php') ?>

    <!-- Main CSS -->
    <link rel='stylesheet' href='assets/css/style.css'>
    
    <!-- Modernizr  -->
    <script type='text/javascript' src='assets/libs/modernizr/modernizr.js'></script>

    <!-- HTML5 Shiv -->
    <script type='text/javascript' src='assets/libs/html5shiv/html5shiv.min.js'></script>

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600,900' rel='stylesheet' type='text/css'>

<!-- start Mixpanel -->
<script type="text/javascript">(function (e, b) {
    if (!b.__SV) {
        var a, f, i, g; window.mixpanel = b; a = e.createElement("script"); a.type = "text/javascript"; a.async = !0; a.src = ("https:" === e.location.protocol ? "https:" : "http:") + '//cdn.mxpnl.com/libs/mixpanel-2.2.min.js'; f = e.getElementsByTagName("script")[0]; f.parentNode.insertBefore(a, f); b._i = []; b.init = function (a, e, d) {
            function f(b, h) { var a = h.split("."); 2 == a.length && (b = b[a[0]], h = a[1]); b[h] = function () { b.push([h].concat(Array.prototype.slice.call(arguments, 0))) } } var c = b; "undefined" !==
            typeof d ? c = b[d] = [] : d = "mixpanel"; c.people = c.people || []; c.toString = function (b) { var a = "mixpanel"; "mixpanel" !== d && (a += "." + d); b || (a += " (stub)"); return a }; c.people.toString = function () { return c.toString(1) + ".people (stub)" }; i = "disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" "); for (g = 0; g < i.length; g++) f(c, i[g]);
            b._i.push([a, e, d])
        }; b.__SV = 1.2
    }
})(document, window.mixpanel || []);
        mixpanel.init("15be8803faf10246ab8c948f0ab6e5cb");</script>
<!-- end Mixpanel -->

</head>

<body>
