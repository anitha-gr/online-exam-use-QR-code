<script type="text/javascript">
var h=0
var m=1
var s=59
function showtimer() {
document.getElementById("ddd").innerHTML=h+":"+m+":"+s
s--
if(s==0) {
m--
s=59
}
if(m==0) {
window.location="logout.php"
}
window.setTimeout("showtimer()","100")
}
</script>
<body onload="showtimer()">
<div id="ddd" align="right"></div>
</body>