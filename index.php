<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$document.ready(function(){
function ajaxMain() {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.body.innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "calendar.php", true);
  xhttp.send();
}
});

</script>
</head>
<body>

</body>
</html>