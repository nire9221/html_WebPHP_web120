<!-- footer Start-->
</div>
<footer>
  <h1>Follow Me</h1>
  <div class ="social">
  <a href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  </div>

  <p style="font-size:13px;"> &copy; <?php echo date("Y");?>, All Rights Reserved, <a href="http://validator.w3.org/check?uri=referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></p>

  
  <div style="position:relative;bottom:100px;z-index:1;" class="gototop">
    <span>Go To Top</span>   
    <a href="#myPage"><span>
    <i class="fa fa-chevron-circle-up" style="color:white; margin-left:5px;"></i></span></a>
  </div>
</footer>

<script>

var header = document.getElementByclassName("nav");
var btns = header.getElementsByClassName("menu");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}

function myFunction() {
        var x = document.getElementById("myNav");
        if (x.className === "nav") {
            x.className += " responsive";
        } else {
            x.className = "nav";
        }
    }

</script>

</body>
</html>

