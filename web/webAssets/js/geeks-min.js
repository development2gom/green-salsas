function resetForm(e){for(var t=e.getElementsByTagName("input"),n=0;n<t.length;n++)switch(t[n].type){case"text":$(t[n]).val("");break;case"radio":case"checkbox":t[n].checked=!1}for(var a=e.getElementsByTagName("select"),n=0;n<a.length;n++)a[n].selectedIndex=0;for(var o=e.getElementsByTagName("textarea"),n=0;n<o.length;n++)o[n].innerHTML="";return!1}$(document).ready(function(){$("#form-ajax .ladda-button").on("click",function(e){Ladda.create(this).start(),$("#form-ajax").submit()}),setTimeout(function(){"0"==$("body").css("opacity")&&$("body").animsition("in")},800),$("#form-ajax").on("ajaxComplete",function(e,t,n){return Ladda.create($("#form-ajax button[type=submit]").get(0)).stop(),!0}),$(".input-number").keypress(function(e){if(8!=e.which&&0!=e.which&&(e.which<48||e.which>57))return!1})}),window.onbeforeunload=function(e){console.log(e),$(".animsition").animsition("out",$(".animsition"),"")};