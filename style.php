<style>
.menu {
	margin:0px 0px 0px 0px;
	width:1900px;
	padding:0px;
}
#cssmenu ul,
#cssmenu li,
#cssmenu span,
#cssmenu a {
  margin: 0;
  padding: 0;
  position: relative;
}
#cssmenu:after,
#cssmenu ul:after {
  content: '';
  display: block;
  clear: both;
}
#cssmenu a {
  color: #333333;
  display: inline-block;
  font-family:alex-brush;
  font-weight:bold;
  font-size: 15px;
  min-width: 35px;
  text-align: center;
  text-decoration: none;
  text-shadow: 0 -1px 0 #eeeeee;
}
#cssmenu ul {
  list-style: none;
}
#cssmenu > ul > li {
  float: left;
  width:271.40px;
}
#cssmenu > ul > li.active > a {
  background: #d9d9d9 url(Img/grad_light.png) repeat-x left bottom;
  background: -moz-linear-gradient(top, #d9d9d9 0%, #bfbfbf 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #d9d9d9), color-stop(100%, #bfbfbf));
  background: -webkit-linear-gradient(top, #d9d9d9 0%, #bfbfbf 100%);
  background: -o-linear-gradient(top, #d9d9d9 0%, #bfbfbf 100%);
  background: -ms-linear-gradient(top, #d9d9d9 0%, #bfbfbf 100%);
  background: linear-gradient(to bottom, #d9d9d9 0%, #bfbfbf 100%);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#d9d9d9', endColorstr='#bfbfbf', GradientType=0);
  box-shadow: inset 0 0 10px #979797, inset 0 10px 10px #979797;
  -moz-box-shadow: inset 0 0 10px #979797, inset 0 10px 10px #979797;
  -webkit-box-shadow: inset 0 0 10px #979797, inset 0 10px 10px #979797;
  filter: none;
}
#cssmenu > ul > li.active a:hover {
  background: -moz-linear-gradient(top, #d9d9d9 0%, #bfbfbf 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #d9d9d9), color-stop(100%, #bfbfbf));
  background: -webkit-linear-gradient(top, #d9d9d9 0%, #bfbfbf 100%);
  background: -o-linear-gradient(top, #d9d9d9 0%, #bfbfbf 100%);
  background: -ms-linear-gradient(top, #d9d9d9 0%, #bfbfbf 100%);
  background: linear-gradient(to bottom, #d9d9d9 0%, #bfbfbf 100%);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#d9d9d9', endColorstr='#bfbfbf', GradientType=0);
  filter: none;
}
#cssmenu > ul > li a {
  box-shadow: inset 0 0 0 1px #ffffff;
  -moz-box-shadow: inset 0 0 0 1px #ffffff;
  -webkit-box-shadow: inset 0 0 0 1px #ffffff;
  background: #bfbfbf url(Img/grad_light.png) repeat-x left top;
  background: -moz-linear-gradient(top, #ffffff 0%, #e5e5e5 50%, #d7d7d7 51%, #ededed 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(50%, #e5e5e5), color-stop(51%, #d7d7d7), color-stop(100%, #ededed));
  background: -webkit-linear-gradient(top, #ffffff 0%, #e5e5e5 50%, #d7d7d7 51%, #ededed 100%);
  background: -o-linear-gradient(top, #ffffff 0%, #e5e5e5 50%, #d7d7d7 51%, #ededed 100%);
  background: -ms-linear-gradient(top, #ffffff 0%, #e5e5e5 50%, #d7d7d7 51%, #ededed 100%);
  background: linear-gradient(to bottom, #ffffff 0%, #e5e5e5 50%, #d7d7d7 51%, #ededed 100%);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed', GradientType=0);
  border-bottom: 1px solid #d2d2d2;
  border-top: 1px solid #d2d2d2;
  border-right: 1px solid #d2d2d2;
  line-height: 64px;
  padding: 0 35px;
  filter: none;
  display:block;
  font-size:18px;
  background-image:url(Img/grad_light2.png);
}
#cssmenu > ul > li a:hover {
  background: #ffffff url(images/grad_light.png) repeat-x left bottom;
  background: -moz-linear-gradient(top, #d9d9d9 0%, #bfbfbf 50%, #b0b0b0 51%, #c7c7c7 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #d9d9d9), color-stop(50%, #bfbfbf), color-stop(51%, #b0b0b0), color-stop(100%, #c7c7c7));
  background: -webkit-linear-gradient(top, #d9d9d9 0%, #bfbfbf 50%, #b0b0b0 51%, #c7c7c7 100%);
  background: -o-linear-gradient(top, #d9d9d9 0%, #bfbfbf 50%, #b0b0b0 51%, #c7c7c7 100%);
  background: -ms-linear-gradient(top, #d9d9d9 0%, #bfbfbf 50%, #b0b0b0 51%, #c7c7c7 100%);
  background: linear-gradient(to bottom, #d9d9d9 0%, #bfbfbf 50%, #b0b0b0 51%, #c7c7c7 100%);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed', GradientType=0);
  filter: none;
   background-image:url(Img/grad_light.png);
   font-size:24px;
}

body {
	margin:0px;
	padding:0px;
	background-color:#FFCCAA;
}
.center {
	margin:0px;
	padding:0px;
	background-color:#FFCCAA;
}
.img {
	width:1900px;
	padding:0px;
	margin:0px;
}
.footer{
		  clear:both;
		  text-align:center;
		  background: -webkit-linear-gradient(right, black, #F76868,#F76868); 
          background: -o-linear-gradient(right, black, #F76868,#F76868); 
          background: -moz-linear-gradient(right, black, #F76868,#F76868); 
          background: linear-gradient(to right, black, #F76868,#F76868); 
		  color:#FFFFFF;
	      height:200px;
		  font-family:euphoria-script Gotham, "Helvetica Neue", Helvetica, Arial,          sans-serif;
	      font-size:larger;
	      text-align:justify;
	      text-align:center;
	      padding-top:40px;
	}

</style>