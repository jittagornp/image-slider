<!DOCTYPE html>
<html>
	<head>
		<style>
			body{
				padding : 0;
				margin : 0;
				font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
				font-size: 10pt;
			}
		
			.sidebar{
				width : 200px;
				background-color : #f2f2f2;
				border-right : 1px solid #e5e5e5;
				position : fixed;
				top : 0;
				left : 0;
				bottom : 0;
			}
			
			.sidebar li{
				list-style-type : none;
			}
			
			.sidebar ul{
				padding : 0;
				margin : 0;
			}
			
			.sidebar li a{
				padding : 10px 20px;
				display : block;
				font-weight : bold;
				text-decoration : none;	
				color : #333;
				border-bottom : 1px solid #e5e5e5;
			}
			
			.sidebar li a:hover{
				background-color : #fff;
			}
			
			.sidebar li a.active{
				background-color : #fff;
				font-style : italic;	
			}
			
			.container{
				position : absolute;
				left : 201px;
				right : 0;
				top : 0;
				padding : 15px;
			}
			
			.wrapper > h1{
				text-align : center;
			}
		</style>
		<link rel="stylesheet" href="/image-slider/lib/jcarousel.basic.css"/>
		<script src="/image-slider/lib/jquery.min.js"></script>
		<script src="/image-slider/lib/jquery.jcarousel.min.js"></script>
		<script src="/image-slider/lib/jcarousel.basic.js"></script>
		<script>
			(function($){
				$(function(){
					
					function getHost(){
						return location.protocol + '//' + location.host;
					}
					
					function getCurrentUrl(){
						var href = location.href;
						var index = href.indexOf('#');
						if(index === -1){
							return href;
						}
						
						return href.substr(0, index);
					}
					
					function highlightMenu(){
						var $sidebar = $('.sidebar');
						$sidebar.find('li a').each(function(){
							var $link = $(this);
							if(getCurrentUrl() === (getHost() + $link.attr('href'))){
								$link.addClass('active');
							}
						});
					}
					
					highlightMenu();
				});
			})(jQuery);
		</script>
	</head>
	<body>
		<div class="sidebar">
			<ul>
				<li>
					<a href="/image-slider/">Home</a>
				</li>
				<li>
					<a href="/image-slider/Force/">Force</a>
				</li>
				<li>
					<a href="/image-slider/Warn/">Warn</a>
				</li>
				<li>
					<a href="/image-slider/Guide/">Guide</a>
				</li>
			</ul>
		</div>
		<div class="container">