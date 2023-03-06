<?php
require "common/include.php";
startPage();
?>

<span id="bright">Research Themes</span>

<p>This page attempts to clusters my research contributions into broader categories than the paper-by-paper list on my <a href="academic.php">academic info</a> page. Not every paper is represented here and the list includes projects that are in-progress.</p>

<table border="0" cellspacing="0" cellpadding="0">

<!-- % % % % % % % % % % % % % % % % % % % -->
<tr><td colspan="3" height="20"><hr/></td></tr>
<tr><td align="center" valign="center" width=200>
<img src="images/projects/ssl.gif" border=0><br/>
</td><td width=25><br/></td>
<td>
<p><span id="bright">SSL/TLS</span><br/>
The online trust model built around SSL/TLS has exhibited many weakenesses. <a href="papers/2013_sp.pdf">Our work</a> surveys the cryptographic and protocol-level attacks on SSL/TLS, as well as the certificate issuing process, the weaknesses of relying on hundreds of certificate authorities, the lack of reliable revocation, and the inherent limitiations of relying on non-expert humans to make security decisions. We also systemize a large number of proposed tools for improving the trust model (e.g., DANE, Convergence, HSTS, etc.).</p>

</td></tr><tr><td colspan="3" height="20"><hr/></td></tr>
<!-- % % % % % % % % % % % % % % % % % % % -->

<!-- % % % % % % % % % % % % % % % % % % % -->

<tr><td align="center" valign="center" width=200>
<img src="images/projects/android.png" border=0>
</td><td width=25><br/></td>
<td>
<p><span id="bright">Smartphone Security</span><br/>
In order to protect the integrity of the app installation process on mobile devices, OSes like Android use policies built on code signing to allow/deny updates, assign UIDs, and grant certian permissions. We <a href="papers/2012_spsm.pdf">consider this process</a>, highlighting shortcomings and proposing new mechanisms to allow great flexiblity for app developers while preserving security. Given the number of people who carry a smartphone with them, we are also interested in novel techniques, such as <a href="papers/2012_acsac.pdf">Tapas</a>, for using a smartphone for authentication.</p>

</td></tr><tr><td colspan="3" height="20"><hr/></td></tr>
<!-- % % % % % % % % % % % % % % % % % % % -->

<!-- % % % % % % % % % % % % % % % % % % % -->
<tr><td align="center" valign="center" width=200>
<img src="images/projects/bitcoin.png" border=0>
</td><td width=25><br/></td>
<td>
<p><span id="bright">Bitcoin</span><br/>
Bitcoin is a peer-to-peer electronic cash system that uses cryptographic techniques to protect a holder's coins, mint new coins, and ensure there is no double-spending. We are interested in ways that Bitcoin's network can be extended to do other interesting things. One application is <a href="projects/commitcoin/">CommitCoin</a>, which allows anyone to obtain a timestamp on a message; a timestamp that can be verified without trusting any third party. Also see my <a href="biblio.html">Bitcoin bibliography</a>.</p>

</td></tr><tr><td colspan="3" height="20"><hr/></td></tr>
<!-- % % % % % % % % % % % % % % % % % % % -->

<!-- % % % % % % % % % % % % % % % % % % % -->
<tr><td align="center" valign="center" width=200>
<img src="images/projects/selections.jpg" border=0 style="vertical-align:text-top;"><br/>
</td><td width=25><br/></td>
<td>
<p><span id="bright">Internet Voting</span><br/>
Security researchers worry about internet voting for <a href="http://security.stackexchange.com/questions/5769/secure-internet-polling/5798#5798">two main reasons</a>: (1) voters' computers cannot be assumed to be secure and (b) someone can watch how you vote (or vote on your behalf). Our internet voting system <a href="papers/2011_fc.pdf">Selections</a> addresses the second issue by giving users panic passwords that they can use. If a vote is cast with a panic password, no one other than the voter can tell and it is verifiably descarded before producing the final tally. See my <a href="biblio.html">bibliography</a> of other approaches to the second issue. We are currently investigating how to solve the first issue, the untrusted platform problem, using techniques like code voting. <a href="https://scantegrity.org/blog/2011/11/05/remotegrity-first-voter-verifiable-internet-voting-for-public-office/">Remotegrity</a> is one approach. </p>

</td></tr><tr><td colspan="3" height="20"><hr/></td></tr>
<!-- % % % % % % % % % % % % % % % % % % % -->

<!-- % % % % % % % % % % % % % % % % % % % -->
<tr><td align="center" valign="center" width=200>
<img src="images/projects/scantegrity.jpg" border=0 style="vertical-align:text-top;"><br/>
</td><td width=25><br/></td>
<td>
<p><span id="bright">Scantegrity</span><br/>
In traditional elections, once your vote is in the box and you walk away, you have no way of knowing if your vote counted. <a href="papers/2008_evt.pdf">Scantegrity</a> is a security enhancement for optical scan electronic voting that lets voters verify that all votes were counted correctly, including their own (this is called end-to-end verifiability or E2E). Voters mark a ballot exactly the same way as in traditional optical scan, except with Scantegrity, a short 3 digit code will appear in the oval. Voters wanting verifiability can copy this code down and later confirm it online. Additionally, using cryptographic techniques, the candidates, stakeholders, or any interested person can check that codes were correctly translated back into votes without revealing how anyone voted. This is done with a small piece of software. Scantegrity <a href="papers/2010_usenix.pdf">was used</a> by the municipality of Takoma Park for their 2009 and 2011 elections. Scantegrity has generated <a href="http://scantegrity.org/wiki/index.php/Scantegrity_Press">media interest</a>.</p>

</td></tr><tr><td colspan="3" height="20"><hr/></td></tr>
<!-- % % % % % % % % % % % % % % % % % % % -->

<!-- % % % % % % % % % % % % % % % % % % % -->
<tr><td align="center" valign="center" width=200>
<img src="images/projects/punchscan.jpg" border=0 style="vertical-align:text-top;"><br/>
</td><td width=25><br/></td>
<td>
<p><span id="bright">Democracy Enhancing Technologies</span><br/>
In addition to <a href="papers/2011_fc.pdf">Selections</a> and <a href="">Scantegrity</a>, we have done other work on end-to-end verifiable (E2E) elections. In many systems, auditing the cryptographic aspects of an election involves a strong understanding of mathematics and custom code. <a href="papers/2010_evt_eperio.pdf">Eperio</a> is a very simple backend that can be audited with just a spreadsheet. Eperio can actually be run without computers at all: <a href="papers/2008_wote.pdf">Aperio</a> is its fully paper-based sibling, suitable for developing countries. Scantegrity was based on an earlier system called <a href="papers/2007_vocomp_report.pdf">Punchscan</a>. Punchscan was used in a <a href="papers/2007_wote_case.pdf">student election</a> and won the top award at VoComp. Punchscan has generated <a href="http://scantegrity.org/wiki/index.php/Scantegrity_Press">media interest</a>.</p> </p>

</td></tr><tr><td colspan="3" height="20"><hr/></td></tr>
<!-- % % % % % % % % % % % % % % % % % % % -->

<!-- % % % % % % % % % % % % % % % % % % % -->
<tr><td align="center" valign="center" width=200>
<img src="images/projects/beacon.png" border=0 style="vertical-align:text-top;"><br/>
</td><td width=25><br/></td>
<td>
<p><span id="bright">Random Numbers from Financial Data</span><br/>
Sometimes we'd like to know people are actually doing what they claim to be. Random audits are one way to acheive this in the real world, and random challenges are used in a similar way in cryptographic protocols. Random challenges should be unpredictable: if the scrutinized party knows what the challenge will be, they can fake correct behaviour. If you see that a particular challenge was issued in the past, can you be convinced it was unpredictable at the time? Is there a public source of randomness that we can all agree is high quality, unpredictable, and has an accessible history of past values? <a href="papers/2010_evt_full.pdf">We claim</a> that financial markets are suitable. We use tools from computational finance to determine that stocks in the S&P 500 have between 6 and 9 bits of entropy per trading day.</p>

</td></tr><tr><td colspan="3" height="20"><hr/></td></tr>
<!-- % % % % % % % % % % % % % % % % % % % -->



<!-- % % % % % % % % % % % % % % % % % % % -->
<tr><td align="center" valign="center" width=200>
<img src="images/projects/panic.png" border=0 style="vertical-align:text-top;"><br/>
</td><td width=25><br/></td>
<td>
<p><span id="bright">Panic Passwords</span><br/>
Have you ever wished you could have a second special password for when you are with someone else and want your service to change what is displayed in some way? Such panic passwords or duress codes have many security applications but hadn't been looked at closely. <a href="papers/2008_hotsec.pdf">We show</a> that the well-known model of giving a user two passwords, a ‘regular’ and a ‘panic’ password, is susceptible to attack if an adversary (who knows the system) simply asks you to authenticate twice using different passwords. We introduce several new panic password systems thnat get around this and other attacks. Panic passwords can be deployed in a wide variety of real-world applications: email, Facebook, internet voting, and search & seizures.</p>
</td></tr><tr><td colspan="3" height="20"><hr/></td></tr>
<!-- % % % % % % % % % % % % % % % % % % % -->



<!-- % % % % % % % % % % % % % % % % % % % -->
<tr><td align="center" valign="center" width=200>
<img src="images/projects/tor.png" border=0 style="vertical-align:text-top;"><br/>
</td><td width=25><br/></td>
<td>
<p><span id="bright">Tor</span><br/>
Tor is a popular privacy tool designed to help achieve online anonymity by anonymising web traffic. <a href="papers/2007_soups.pdf">We evaluate</a> four competing methods of deploying Tor clients, and a
number of software tools designed to be used in conjunction with Tor: Vidalia, Privoxy, Torbutton, and FoxyProxy. We also considered a standalone anonymous browser that no longer uses Tor. Our results show that none of the deployment options are fully satisfactory from a usability perspective, but we offer suggestions on how to incorporate the best aspects of each tool. Our research was done over five years ago and the Tor project has made seemlingly good improvements to Tor configuration.</p>
</td></tr><tr><td colspan="3" height="20"><hr/></td></tr>
<!-- % % % % % % % % % % % % % % % % % % % -->

</table>

<?
endPage();
?>
