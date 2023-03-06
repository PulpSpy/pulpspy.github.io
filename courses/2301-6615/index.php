<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>INSE 6615: Blockchain Technology</title>
  <style>
  @import url(../../common/style.css);
  </style>
</head>

<body>

<div class="container">

  <div class="title">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
     <tr>
      <td><img align="left" src="../../images/uni.jpg"></td>
      <td><img align="left" src="logo.png"></td>
     </tr>
    </table>
  </div>

 <div class="content">

 <!-- Obsolete % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % -->

<!--
<div style="border: 2px solid black; padding: 5px; margin: 0px 15px 10px 15px">
This course is now completed and the website is maintained for archival purposes only. For the most recent offering of this course, please <a href="../../courses.php">click here</a>.</div>
-->


 <!-- Content % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % -->

<!-- Obsolete % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % -->


<p><span id="bright">INSE 6615: Blockchain Technology (Winter 2023)</span><br/>
<span id="bright2">Blended course with online lectures</span></br>
<span id="bright2">Occasional in-person sessions: Tues, 13h15m, Hall Building 670</span></p>

<ul>
 <li> Instructor: <a href="http://users.encs.concordia.ca/~clark">Jeremy Clark</a> </li>
 <li> Office Hours: Thursdays 14h00, Virtual [<a href="https://concordia-ca.zoom.us/j/81770801591?pwd=aDdTTG9vUVE4aXpsVmsrZEQyRWlVUT09">Zoom Link</a>] </li>
 <!--<li> Office Hours (during exams): Mon Dec 12, 1-3pm</li>-->
 <li> Marker: TBD </li>
</ul>

<p><span id="bright2">Course Outline</span></p>

<p>The offical course outline is <a href="outline.pdf">available here</a>.</p>

<p><span id="bright2">Prerequisites</span></p>

<p>This course has no formal prerequisites. It will involve a little cryptography, which will be taught as if you have not taken 6110, and a little programming of short smart contracts (10s of lines of code). Students from quality engineering or other departments welcome.</p>

<p><span id="bright2">Textbook</span></p>

<p>The lectures are based, in part, on the following textbook. It is not required but may be useful for further reading. Exams and assignments will be based on what is presented during the lectures, with the textbooks providing additional detail and formalization.</p>

<ul>
 <li><a href="http://bitcoinbook.cs.princeton.edu">Bitcoin and Cryptocurrency Technology (Narayanan et al):</a> Free pre-print (as PDF) is available from the book website. Hardcopies are available in the Concordia bookstore or from Amazon</li>
</ul>

<p><span id="bright2">Assignments and Exams</span></p>

<p>Assignments are to be submitted <a href="https://fis.encs.concordia.ca/eas/">via EAS</a>. Please ensure you have an <a href="https://www.concordia.ca/ginacody/aits/support/faq/new_encs_account.html">ENCS user account</a>. See the assignment itself for the late policy. A previous <a href="assign/midterm.pdf">midterm exam</a> and <a href="assign/final.pdf">final exam</a> are available. Note the questions will be completely different (not variations on these). Finally, two previous class projects became published papers available (in final form) <a href="https://arxiv.org/pdf/1803.02887">here</a> and <a href="https://eprint.iacr.org/2018/704.pdf">here</a>.</p>

<ul>
 <li><b>Midterm Test (15%):</b> February 21</li>
 <li><b>Assignment 1 (5%):</b> March 7 [<a href="assign/a1.pdf">A1</a>]</li>
 <li><b>Assignment 2 (5%):</b> March 28 [<a href="assign/a2.pdf">A2</a>]</li>
 <li><b>Project (35%):</b> April 11  <!--(Accepted without penalty until April 22]--> [<a href="assign/project.pdf">Project</a>]</li>
 <li><b>Final Exam (40%):</b> See GCS [<a href="https://www.concordia.ca/ginacody/students/academic-services/graduate.html">Link</a>] for exam schedule.*</li>
</ul>

<p>* The time and date of the final exam is selected by the university (not by me). The date cannot be moved due to travel plans; I recommend you do not make travel plans until the date is finalized.</p>

<hr/>

<p><span id="bright2">Lectures</span></p>

<p>A lecture marked by a star will include an in-person session (at 13h15m) in Hall Building 670. The lecture notes (as a single PDF) can be <a href="scribe/combined.pdf">downloaded here</a>. A list of errors in the course notes <a href="scribe/errata.txt">is here</a>. The SimpleStorage contract code from Lecture 24 can be <a href="scribe/SimpleStorage.sol">downloaded here</a>.</p>

<ul>

<li><b>January 10 [*]:</b> Course Outline & Requirements <br/>
Classroom Meeting: <a href="https://www.youtube.com/playlist?list=PLnD_TI73e88fbEq_vnkn-gj6e8tPPJ0tW">Video</a><br/>
</li><br/>

<li><b>January 17:</b> Crypto I: Hash Functions <br/>
<a href="https://youtu.be/1PbNloeZJeo">Lecture 00</a>, <a href="https://youtu.be/TwkrJtTL-wc">01</a>, <a href="https://youtu.be/CIvdtlQPUf4">02</a>, <a href="https://youtu.be/DjZZz70BJ_o">03</a><br/>
</li><br/>

<li><b>January 24 [*]:</b> Crypto II: Digital Signatures and Commitments <br/>
<a href="https://youtu.be/OLl9Y-SvmhU">Lecture 04</a>, <a href="https://youtu.be/uEYEh9QLGdU">05</a>, <a href="https://youtu.be/IvHj1bKfuhg">06</a>, <a href="https://youtu.be/1B5-jWmV_HY">07</a><br/>
Classroom Meeting: <a href="https://www.youtube.com/playlist?list=PLnD_TI73e88fbEq_vnkn-gj6e8tPPJ0tW">Video</a><br/>
</li><br/>

<li><b>January 31:</b> Crypto III: Accumulators, Merkle Trees, Linked Timestamping, Proof of Work <br/>
<a href="https://youtu.be/fI8M9xV90Ho">Lecture 08</a>, <a href="https://youtu.be/KKgBxV7-h9w">09</a>, <a href="https://youtu.be/pkSxIdsynqQ">10</a>, <a href="https://youtu.be/ehO-TKhuAro">11</a>, <a href="https://youtu.be/p4-5W5d3KHo">12</a> <br/>
</li><br/>

<li><b>February 07 [*]:</b> Bitcoin Details I <br/>
<a href="https://youtu.be/B7O5yDY4_N0">Lecture 13</a>, <a href="https://youtu.be/4CeK_-mIVwQ">14</a>, <a href="https://youtu.be/xJurSyKJBG4">15</a><br/>
Classroom Meeting: <a href="https://www.youtube.com/playlist?list=PLnD_TI73e88fbEq_vnkn-gj6e8tPPJ0tW">Video</a><br/>
</li><br/>

<li><b>February 14 [*]:</b> Bitcoin Details II  <br/>
<a href="https://youtu.be/0bW3TWKzBE4">Lecture 16</a>, <a href="https://youtu.be/r1jKsrlICv0">17</a><br/>
</li><br/>

<li><b>February 21 [*]:</b> Midterm Test <br/>
<a href="https://users.encs.concordia.ca/~clark/courses/1803-6630/assign/midterm.pdf">Sample Midterm</a>
</li><br/>

<li><b>February 28:</b> Reading Week </li><br/>

<li><b> March 07 [*]:</b> Bitcoin Details III <br/>
<a href="https://youtu.be/P5w6atvfI7M">18</a>, <a href="https://youtu.be/azWeY3TJ4jY">19</a>, <a href="https://youtu.be/H1ggjWDKBWA"> 20</a><br/>
</li><br/>

<li><b> March 14:</b> Ethereum & Solidity <br/>
<a href="https://youtu.be/4YKNkL-14_0">21</a>, <a href="https://youtu.be/76JcHW6Yu1M">22</a>, <a href="https://youtu.be/U2Xe9nlmXPo">23</a><br/>
</li><br/>

<li><b> March 21 [*]:</b> Ethereum & Solidity II <br/>
<a href="https://youtu.be/1PEXw5tvi0o">Lecture 24</a>, <a href="https://youtu.be/54x_ce01N1g">25</a>, <a href="https://youtu.be/e6i57COO-qY">26</a>, <a href="https://youtu.be/U0gADi0fynI">27</a>, <a href="https://youtu.be/Tc8mwiLyCrw">28</a><br/>
</li><br/>

<li><b>March 28:</b> Ethereum & Solidity III <br/>
<a href="https://youtu.be/e49o2v-ZRAA">Lecture 29</a>, <a href="https://youtu.be/TkGbWhmhRqw">30</a>, <a href="https://youtu.be/S_hcIDz6rNU">31</a>, <a href="https://youtu.be/KDH1gf6Jtis">32</a>
</li><br/>
 
<li><b>April 04 [*]:</b> Currency, Stablecoins and CBDCs <br/>
<a href="https://youtu.be/MSfh6nIEnpA">Lecture 33</a>, <a href="https://youtu.be/tq4vL-N5osY">34</a>, <a href="https://youtu.be/1JLFB91AXvg">35</a><br/>
</li><br/>

<li><b>April 11 [*]:</b> DeFi <br/>
<a href="https://www.youtube.com/watch?v=I6zqJPMvxn0&list=PLnD_TI73e88dsiKwQ3XDqXPBMwQjVt_TB&index=34">DeFi Talk</a> (<a href="scribe/defi.pdf">Slides</a>), <a href="https://www.youtube.com/watch?v=bsR47l0WoOc&list=PLnD_TI73e88dsiKwQ3XDqXPBMwQjVt_TB&index=35">Front-Running Talk</a> (<a href="scribe/frontrunning.pdf">Slides</a>), <a href="https://www.youtube.com/watch?v=yxkz3c7N5Ho&list=PLnD_TI73e88dsiKwQ3XDqXPBMwQjVt_TB&index=36">Oracles Talk</a> (<a href="scribe/oracles.pdf">Slides</a>)<br/>
</li><br/>






</ul>
<!--












</ul>

-->

</div>
</div>
</body>
</html>
