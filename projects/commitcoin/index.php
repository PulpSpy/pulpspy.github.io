<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>CommitCoin</title>
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
      <td><img align="left" src="../../images/logo.gif"></td>
     </tr>
    </table>
  </div>
 
  <div class="links">
    <ul>
      <li><a href="../..">Home</a></li>
    </ul>
  </div>

  
 <div class="content">
 
 <!-- Content % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % --> 

<p><span id="bright">CommitCoin</span><br/>
<span id="bright2">By Jeremy Clark & Aleks Essex</span></p>

Our paper has been accepted to Financial Cryptography 2012.

<ul>
<li><a href="../../papers/2012_fc.pdf">CommitCoin: Carbon Dating Commitments with Bitcoin</a>. Extended abstract.</li>
<li><a href="http://eprint.iacr.org/2011/677.pdf">CommitCoin: Carbon Dating Commitments with Bitcoin</a>. Technical report.</li>
<li><a href="../../press/2012_newscientist.pdf">Bitcoin online currency gets new job in web security</a>. Article in <i>New Scientist</i>.</li>
</ul>

<p><span id="bright">Frequently Asked Questions</span></p>

<p><font color=#003366>Does CommitCoin fork the blockchain?</font></p>

<p>No. It uses the same blockchain as Bitcoin.</p>

<p><font color=#003366>Does CommitCoin burn money?</font></p>

<p>No. CommitCoin is carefully designed to not burn money. Instead of doing the obvious thing, substituting a message for a public key fingerprint and sending coins to it, we propose substituting the message in for the private signing key of a new account. You then compute the resulting public key and public key fingerprint, and sending 2 small amounts of bitcoins (for example the minimum transaction) to the new account. </p>

<p>Then using the new account, we send the 2 amounts of bitcoins back to the original account one at a time. This does a few things: (1) it introduces the actual public key (not just fingerprint) into the transcript, (2) by sending the money back, nothing gets burned, and (3) we use a crypto trick: for the second transaction, we use the same randomness in the ECDSA signature as we did for the first signature. This causes the private key to leak: you can compute it by inspecting the values in the block chain. Since the private key is actually the message, you can thus compute the message. </p>

<p><font color=#003366>Is this safe to do?</font></p>

<p>It is not exactly riskless. First you have to make sure that the message has enough randomness to function as a private key. We sidestep this issue by only putting "commitments" (which are randomized) into the block chain. </p>

<p>The first transaction sending the money back to the original account is safe. </p>

<p>The earliest peers to receive the second transaction can compute the private key, and thus create a different transaction (signed with the right key, which they just learned) sending the amount to themselves for instance. If they rebroadcast their fraudulent competing transaction fast enough, or include it in a block that they themselves solve, it may get put into the block chain instead the real one.</p>

<p>This still doesn't burn money (no impact on inflation) but users of CommitCoin should be prepared to "pay" a small amount if the nodes are dishonest.</p>

<font color=#003366>How do you build a voting system from this?</font></p>

<p>The verifiable voting example is 95% <a href="http://en.wikipedia.org/wiki/Scantegrity">Scantegrity</a> and only 5% CommitCoin. We are only adding a small amount of additional verification for a particular corner case in Scantegrity.</p>

<p>Scantegrity is an electronic optical scan voting system. You vote on paper and the paper is collected, but it is also scanned electronically (the tallies from both should match and this is standard optical scan). But even if someone were able to modify both the paper ballots and hack the database, Scantegrity will be able to detect it; it uses an additional layer of verification based on crypto.</p>

<p>CommitCoin is used only once in the election. It is used to commit to some election auditing data that must have been generated before the election starts for the audit to be valid. Since CommitCoin allows you to "carbon date" messages, you can come along after the election and be sure the election data was fixed prior to the voting period.</p>

<p>It is not the case that every voter is sending their votes into the block chain (although this could be an <a href="http://bitcoin.stackexchange.com/questions/1517/has-anyone-attempted-to-make-a-working-voting-system-using-a-bitcoin-based-syste">interesting modification</a>).</p>

<p><font color=#003366>Can you have both secret ballots and verifiable results?</font></p>

<p>Yes. Crypto can do seemingly impossible things. One of those things is having a voting system where ballot is anonymous (you can't prove how you voted) and yet you can make sure that your ballot is included unmodified in the final tally!  Crypto voting systems are often called <a href="http://jeremyclark.wordpress.com/2011/11/01/quick-guide-to-e2e-verifiable-internet-voting/">E2E or end-to-end verifiable</a>. Scantegrity is one, there are others. Scantegrity is the only one that has been used in an actual governmental election (two municipal elections in Takoma Park, Maryland, USA). </p>

<p><font color=#003366>Is carbon dating just a fancy way of saying timestamping?</font></p>

<p>No, carbon dating is a different concept. The block chain does both timestamping and carbon dating. Transactions are time-stamped and other nodes do some general vetting of the timestamp before accepting it for inclusion into the block chain. So if you generally trust the bitcoin network, the timestamp is enough.</p>

<p>But let's say you didn't trust the network at all (even in the extreme case of a 51% attack). If I show that we've put a commitment into block 145535 (which we did), there have been tens of thousands of blocks created since then. Even if I controlled the network, there is no way I could actually compute all those blocks in any time less than a certain amount of time (based on how much computational power you think I have). It would take on the order of months. </p>

<p>The accumulation of blocks after something is inserted is akin to the accumulation of carbon on a physical object. You have a sense of the rate of accumulation (and this can't be arbitrarily changed), you know how much accumulation there has been, and so you can estimate a date. It will be fuzzy. But its enough to distinguish, for example, something that happened a month before an election from something that happened a day after the election (if you are making the decision a few days after the election).</p>

<p><span id="bright">A Demonstration of (Simplified) CommitCoin</span></p>

As a demonstration of a <i>simplified version</i> of CommitCoin, we commited to a PDF of the 
<a href="demo/abstract.pdf">abstract</a> of our paper on the <a href="http://fc12.ifca.ai/">FC12</a> submission deadline (09/15/11).

<p>But don't take our word for it!<p>

First we ran,
<p>
<font face="courier">
openssl rand -out random.dat 20<br>
</font>
<p>

creating a file containing a 20 byte <a href="demo/random.dat">random factor</a>.

<p>Then we concatinated the randomness to the end of the file and hashed it using <font face="courier">RIPEMD-160</font>,
<p>
<font face="courier">
cat abstract.pdf random.dat > preimage.dat<br>
openssl dgst -ripemd160 preimage.dat<br>
</font>
<p>
giving us the result:
<p>
<font face=courier>135e3712334428d4061efe4e5ffd5ff817aeb817</font>
<p>
We called an online <a href="http://blockexplorer.com/q/hashtoaddress/135e3712334428d4061efe4e5ffd5ff817aeb817">tool</a> 
to convert this hash into a valid <a href="https://en.bitcoin.it/wiki/Address">Bitcoin address</a> giving us:
<p>
<font face=courier>12mQhpvGYdBrvDJq6sFGwEe3GETaqEM4Jk</font>
<p>
Finally, we used the <a href="https://freebitcoins.appspot.com/">Bitcoin Faucet</a> to send BTC0.005 to this address.
<p>
This transaction ostensibly appeared in the Bitcoin blockchain on <font face="courier">2011-09-16 00:24:32</font> which can be seen in <a href="http://blockexplorer.com/tx/2993c284f0b6838386ddd286af415384560d93cc4e27d25087fd6534f8e0d276">blockexplorer</a>.
<p>
However it may be the case that we actually committed to our abstract long after <font face="courier">2011-09-16 00:24:32</font> and colluded with blockexplorer or the Bitcoin network to display the wrong timestamp. How can you really be sure?
<p>
By the time you are reading this page, many more blocks will have been added to the blockchain. Each block that is added is actually a solution to a moderately hard problem. Say we actually committed to the abstract yesterday. That means we would have had to forge the entire chain from <a href="http://blockexplorer.com/b/145535">Block 145535</a> to the <a href="http://blockexplorer.com/q/getblockcount">current block</a>. Given each block takes on average 10 minutes for the entire Bitcoin network to solve, could we have solved that many blocks in a single day (even if we controlled the whole network)?
<p>
Why is this a simplified version? First, by substituting our commitment value for a public key fingerprint, the BTC sent to the address in unrecoverable. In the proper CommitCoin protocol, we set the commitment value to the private key which allows us to recover the money. Second, CommitCoin should use a standard commitment function: the hash-based approach used here imposes non-standard assumptions on the hash function. This demonstration is intended as an easy-to-follow proof of concept for embedding values into the block chain using available tools. 


 <!-- Content % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % % --> 

</div>
</div>
</body>
</html>
