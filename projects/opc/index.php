<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Certificate Authority Report Card</title>
  <style>
  @import url(common/style.css);
  </style>
</head>

<body>

<div class="container">

  <div class="title">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
     <tr>
      <td><img align="left" src="logo.png"></td>
     </tr>
    </table>
  </div>
  
  <div class="links">
    <ul>
      <li><a href="index.html">CA Report Card</a></li>
      <li><a href="../index.html">Madiba</a></li>
      <!--<li><a href="proxy.html">Proxy CAs</a></li> -->
    </ul>
  </div>

 <div class="content">

 <!-- Content % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % -->
 
<hr>
<img src="img/opc.png" height="80"> <img src="img/nserc.jpg" height="80">
<hr>

<span id="bright">Killed by Proxy</span><br/>
<span id="bright2">Analyzing Client-end TLS Interception Software</span></p>

<p>By <a href="https://xavier2dc.fr">Xavier de Carné de Carnavalet</a> and <a href="http://www.ciise.concordia.ca/~mmannan">Mohammad Mannan</a></p>



<ul>

<li><b>NDSS 2016:</b> Killed by Proxy
<br/><a href="https://users.encs.concordia.ca/~mmannan/publications/ssl-interception-ndss2016.pdf">Paper</a>, <a href="https://www.internetsociety.org/sites/default/files/01_3-ndss2016-slides.pdf">Slides</a>
</li><br/>

<li><b>Security.nl:</b> Virus scanners undermine the security of encrypted connections
<br/><a href="https://www.security.nl/posting/456126/Virusscanners+ondermijnen+veiligheid+versleutelde+verbindingen">Original</a>, <a href="https://translate.google.ca/translate?hl=en&sl=nl&u=https://www.security.nl/posting/456126/Virusscanners%2Bondermijnen%2Bveiligheid%2Bversleutelde%2Bverbindingen&prev=search">Translated</a>
</li><br/>

</ul>

<p>To filter SSL-protected traffic, some antivirus and parental-control
applications interpose a SSL proxy in the middle of the host's communications.
Covering existing and new attack vectors on SSL engines, we design a
comprehensive framework to analyze such client-end TLS proxies. Using the
framework, we perform a thorough analysis of eight antivirus and four
parental-control applications that act as TLS proxies, along with two additional
products that only import a root certificate; these products are possibly used
by millions of users. Our systematic analysis uncovered that some of these
security enhancing tools severely affect SSL security on their host machines. In
particular, we found that four products are vulnerable to full server
impersonation under an active man-in-the-middle (MITM) attack out-of-the-box,
and two more if SSL filtering is enabled. Several tools also mislead browsers
into believing that an SSL connection is more secure than it actually is, by
e.g., artificially upgrading a server's SSL version at the client.</p>

<img src="img/companies.png" width="900">

<p>As the most used interface to web, browser manufacturers in the recent years
have taken a more pro-active role in improving online security than simply
faithfully implementing the TLS specifications, e.g., deploying
optional/experimental extensions to TLS, such as HSTS and key pinning; blocking
malware and phishing sites; and restricting misbehaving CAs, such as CNNIC
and TURKTRUST. We thus expect browser manufacturers to force companies
behind the most offending CCAs to fix obvious vulnerabilities, by blocking
connections when a known, broken proxy is involved. There are possible research
opportunities in this direction.</p>

<img src="img/chart.png" width="900">


<p>During July/August of 2015, we have contacted all companies involving
the products we analyzed. Most accepted our findings, and are fixing their
products.  However, some problems as we found are more fundamental to client-end
SSL proxying, and cannot be fixed without significant changes in the proxy
design.  We made our results available in mid December (2015), including some
guidelines for safer implementation.</p>



<!-------------------->

<hr>


<span id="bright">Rethinking Certificate Authorities:</span><br/>
<span id="bright2">Past, Present and Future</span></p>

<p>By <a href="https://users.encs.concordia.ca/~seye_moo/">Mahsa Moosavi</a> and <a href="http://www.ciise.concordia.ca/~clark">Jeremy Clark</a></p>

<li><b>Thesis:</b> Understanding domain validation
<br/><a href="https://users.encs.concordia.ca/~clark/projects/opc/main.pdf">Report</a>, <a href="https://users.encs.concordia.ca/~seye_moo/Resources/Dissertation/Moosavi_MASc_S2018.pdf">Full Thesis</a>
</li><br/>

<li><b>WTSC 2018:</b> Ghazal: Toward Truly Authoritative Web Certificates Using Ethereum
<br/><a href="https://users.encs.concordia.ca/~seye_moo/Resources/Papers/2018_wtsc_ghazal.pdf">Paper</a>
</li><br/>

<p>We developed a complete enumeration of all the existing certificate authorities. We then surveyed the procedures these CAs enforce in order to validate domain name ownership during the certificate issuing processes. It has been discovered that while domain validation methods seem promising, they are not completely secure in practice and can be compromised by malicious parties on the web. As a result, attackers are able to deceive and/or compromise the CAs to sign invalid certificates on behalf of them. We also discussed the major issue with the the current certification system is that the entities that issue a certificates for domain names (CAs) are not the actual domain's owners. We believe that certificate authorities are not special and any entity that owns a domain can be a CA and issue a certificate for that domain. In fact, Verisign is not more authoritative than anyone else in the case of validating domain names. </p>

<img src="https://users.encs.concordia.ca/~clark/projects/opc/attacksonDCV.png" width="900">

<p>As discussed in the report, these third parties (CAs) are vulnerable to a vast group of vulnerabilities that if compromised, an adversary obtains a certificate for a domain that does not belong to him. This issue can be addressed by designing a system in which the domain owner can issue and manage certificates without having to rely on any third party. By removing the CAs from this infrastructure and make entities authoritative over their domain names and certificates, we can eliminate single point of failures and their prominent consequences from the public key infrastructure. </p>

<p>As a follow-up to the OPC project, we built a new CA system called Ghazal that leverages blockchain technology.</p>


<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/B742sW2_d4w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>
</div>
</body>
</html>
