<!DOCTYPE html>
<html>
<body>
<script>
function light(sw) {
  var pic;
  if (sw == 0) {
    pic = "./assets/img/off.gif"
  } else {
    pic = "./assets/img/on.gif"
  }
  document.getElementById('myImage').src = pic;
}
<script src="script.js"></script>
</script>
</body>
</html>
