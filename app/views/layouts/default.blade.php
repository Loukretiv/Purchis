<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
        <!-- Apple devices fullscreen -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Apple devices fullscreen -->
        <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <title>{{ $title }}</title>
        <!-- linked files -->
        <link rel="shortcut icon" href="img/favicon.ico" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/Typography.css"/>
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
        <link rel="stylesheet" href="css/grid.css" />
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="//use.typekit.net/xir2zpp.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <script type="text/javascript">
			window.heap=window.heap||[],heap.load=function(t,e){window.heap.appid=t,window.heap.config=e;var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=("https:"===document.location.protocol?"https:":"http:")+"//cdn.heapanalytics.com/js/heap.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(t){return function(){heap.push([t].concat(Array.prototype.slice.call(arguments,0)))}},p=["identify","track"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
			heap.load("3165722497");
		</script>
    </head>
	@if(isset($bodyClass))
		<body class={{ $bodyClass }}>
	@else
		<body>
	@endif
		@yield('content')
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</body>
</html>
