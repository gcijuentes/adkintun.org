<html>
<body>
<IMG id="myImage" SRC='http://190.196.158.234:8081/cam_1.cgi'>

<input type="button" id="save" value="Save to PNG"> 

<script type="text/javascript">
document.getElementById('save').onclick = function () {

var c = document.createElement('canvas');
var img = document.getElementById('myImage');
c.width = img.width;
c.height = img.height;
var ctx = c.getContext('2d');


ctx.drawImage(img, 0, 0);
//window.location = c.toDataURL('image/png');
window.open(c.toDataURL('image/png'))
};

</script>

</body>
</html>


