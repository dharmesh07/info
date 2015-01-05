
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>A grouped pure CSS parallax demo by Keith Clark</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript">
</script>

</head>

<body>
  <link rel='stylesheet' type='text/css' href='parallax.css' />
  <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
  <div class="demo__info">
   <div class="nav">
      <ul id="nav">
        <li class="home"><a href="#group2" title="Next Section" alt="Link">Home</a></li>
        <li class="tutorials"><a class="active" href="#group3" title="Next Section" alt="Link">Tutorials</a></li>
        <li class="about"><a href="#group4" title="Next Section" alt="Link">About</a></li>
      </ul>
    </div>
  </div>

  <div class="parallax">
    <div id="group2" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--back">
        <div class="title"></div>
      </div>
    </div>
    <div id="group3" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--back">
        <div class="title"></div>
      </div>
      <div class="parallax__layer parallax__layer--deep">
        <div class="title"></div>
      </div>
    </div>
    <div id="group4" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--back">
        <div class="title"></div>
      </div>
    </div>
  </div>

</body>
</html>