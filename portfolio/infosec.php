<!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-115626803-1', 'auto');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->

<div class="left">
  <h1>Information Security</h1>
  <p>
    3rd year Information Security assignment to emulate a RansomWare style program using 3 of the classic text encryption algorithms in a product cipher, that encrypts the files on the hard disk and presents a ransom note asking for money to decrypt them. Decryption method is also included.
  </p>
  <p>
    The program will encrypt a variety of text-based files such as *.java, *.html, *.csv etc. It will ignore those files which it cannot encrypt such as binary files. A selection of files is included with the program for testing purposes. These are the files that will be encrypted if the path (in main_program.py) is not changed. Each file that is encrypted is renamed to add the .encrypted extension. For each directory that contains encrypted files, another file is added called hacked.htm which contains instructions to the victim on how to get their files back. The program also launches the browser to display hacked.htm. Information about which files have been encrypted is displayed in the terminal output. If the initial command to start the program is given the wrong options, a message is shown indicating correct usage.
  </p>
  <a data-fancybox="gallery" href="images/terminal_output.png" onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'image', 'eventAction':'image-infosec-terminal-output'});">
    <img class="enc_output" src="images/terminal_output.png" />
  </a>
  <a data-fancybox="gallery" href="images/encrypted.png" onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'image', 'eventAction':'image-infosec-encrypted-files'});">
    <img class="enc_output" src="images/encrypted.png" />
  </a>
  <p>
    When decrypting, the program outputs to the terminal information about each file that is being decrypted. It will decrypt all supported files, restoring them to their original state. If the decrypt function is used on unencrypted files, you can use the encrypt function to restore their contents but the filenames will be different. Decrypted files have the .encrypted extension removed. The hacked.htm file is removed from all directories where it is present.
  </p>
  <p>
    The program will work without either product_cipher_encrypt.py or product_cipher_decrypt.py present provided the correct option is given for the file that is present. If decrypt is selected but the decrypt module is not present, the program will display hacked.htm in the browser and quit.
  </p>
  <p>
    While encrypting, the program generates a log containing a list of all the filenames of encrypted files. While decrypting, the filenames are removed from the log. In this way the program could potentially survive a system restart.
  </p>
  <p>
    A copy of the assignment report, which contains information about the workings of various ransomware programs that are currently infecting computers, and some information about the program designed for this assignment including a flow diagram of the program's methods:
    <br /><br />
    <a href="documents/infosys-assignment-report.pdf" target="_blank"
      onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'PDF document', 'eventAction':'assignment-report-InfoSec'});">
      <b>Assignment Report</b>
    </a>
  </p>
  <p>
    <a href="https://github.com/markbellingham/CryptoRansomware" target="_blank"
        onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'code', 'eventAction':'GitHub-InfoSec'});">
      <b>Program source code</b>
    </a>
  </p>
</div> <!-- ends left -->
<div class="right">
  <a data-fancybox="gallery" href="images/program_design.png" onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'image', 'eventAction':'image-infosec-program-design'});">
    <img id="enc_design" src="images/program_design_sm.png" />
  </a>
</div> <!-- ends right -->

<div id="netsec">
  <h1>Network Security</h1>
  <p>
    With the first part of the year based around information security, the second part of the year was more about network security. Topics covered in this unit included:
  </p>
  <table style="width:100%">
    <tr>
      <td>
        <ul>
          <li>Authentication: basics</li>
          <li>Authentication: Kerberos</li>
          <li>Access Control</li>
          <li>TLS/SSL</li>
          <li>IPSEC and VPN</li>
        </ul>
      </td>
      <td>
        <ul>
          <li>Firewall</li>
          <li>Intrusion Detection</li>
          <li>Wireless Networkds Security</li>
          <ul>
            <li>IEEE 802.11 vulnerabilities</li>
            <li>WEP and WPA2</li>
          </ul>
        </ul>
      </td>
    </tr>
  </table>
  <p>
    For the assignment we were required to identify the security vulnerabilities in a fictuous company network and suggest security solutions.
  </p>
  <p>
    <a href="documents/Network-Security-Assignment.pdf" target="_blank"
        onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'PDF document', 'eventAction':'assignment-report-NetSec'});">
      <b>The assignment report can be found here</b>
    </a>
  </p>
</div> <!-- ends netsec -->
