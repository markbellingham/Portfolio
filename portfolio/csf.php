<!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-115626803-1', 'auto');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->

<div class="left">
  <h1>First year Computer Systems Fundamentals assignment</h1>
  <p>
    This assignment consisted of two parts. First I had to create a circuit that  would show the numbers 0 - 9 on a seven-segment display, using just four inputs. This was done by creating a truth table for the 4 inputs and 7 outputs. A Karnaugh map was then created for each of the 7 outputs, and any AND gates which were repeated were noted so that they could be re-used in the circuit.
  </p>
  <p>
    <a href="documents/csf-assignment-report.pdf" target="_blank"
      onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'PDF document', 'eventAction':'assignment-report-CSF'});">
      <b>A document detailing this procedure as well as screenshots for all of the required outputs can be found here.</b>
    </a>
  </p>
</div> <!-- ends left -->
<div class="right">
  <center><a data-fancybox="gallery" href="images/logism_circuit_sm.gif"
      onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'image', 'eventAction':'image-logism-circuit'});">
      <img id="logism" src="images/logism_circuit_sm.gif"/></a></center>
</div> <!-- ends right -->
<br style="clear: both"/>
<div class="left">
  <p>
    The second part to the assignment was to create a program using the MIPS assembly language that would accept two numbers as input, then calculate various functions on them.
  </p>
  <p>
    Here is a screenshot of the output from that program. First it displays a list of the available options. In this example, option 1 and option 2 have previously been chosen, to put 2 numbers into the system. The user then chose option 11, which is to display the prime numbers between Number 1 and Number 2. The program outputs the answer then displays the list of options again, ready for a new selection.
  </p>
</div> <!-- ends left -->
<div class="right">
  <center><a data-fancybox="gallery" href="images/Assembly_Program_Output.png"
      onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'image', 'eventAction':'image-assembly-output'});"><img id="assembly" src="images/Assembly_Program_Output.png"/></a></center>
</div> <!-- ends right -->
<br />
<div class="left">
  <p>
    The files containing the circuit and method for designing the first part, as well as the code for the MIPS program and links to download the programs that run these files can be found here:
  </p>
  <p>
    <a href="https://github.com/markbellingham/Year1_CSF_Assignment" onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'code', 'eventAction':'GitHub-CSF'});">
      <b>https://github.com/markbellingham/Year1_CSF_Assignment</b>
    </a>
  </p>
</div> <!-- ends left -->
