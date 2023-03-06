<?php
function startPage(){
?>
<!doctype html>
<html lang="en">
<head>
  <title>Jeremy Clark</title>
  <style>
  @import url(common/style.css);
  </style>
  <meta name="google-site-verification" content="UvbGp2fR_PsOu3cS1DcCyvOaTdsiqqivzU8YelUOLrY" />
</head>

<body>

<div class="container">

  <div class="title">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
     <tr>
      <!--<td><img align="left" src="images/uni.jpg"></td>-->
      <td><img align="left" src="images/logo2.gif"></td>
     </tr>
    </table>
  </div>
 
  <div class="links">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="academic.php">Papers</a></li>
      <li><a href="talks.php">Talks</a></li>
      <li><a href="students.php">Students</a></li>
      <li><a href="hiring.php">Hiring</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="biblio.php">Bibliographies</a></li>
      <li><a href="resources.php">Resources</a></li>
    </ul>
  </div>
  
  <div class="content">
  
<!--  
<div style="border: 2px solid black; padding: 5px; margin: 0px 15px 10px 15px; background-color: #ffddf4;">
🔥 Currenly hiring part-time researchers: <a href="hiring.php">click here</a>.</div>
-->

<?php
}

function endPage()
{
?>
</div>
</div>
</body>
</html>
<?php
}
?>
