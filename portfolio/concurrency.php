<div class="left">
  <h1>Concurrency</h1>
  <p>
    Demonstrating concurrency with synchronised threads
  </p>
  <p>
    This program simulates a bank account to which more than one card has access. The aim is to prevent a race condition caused by two cards trying to access the account at precisely the same time, which can lead to unpredictable results and subtle program bugs. Each access card is implemented as a separate thread and will have 20 transactions with the account. Thus if you create 5 cards, you will have 100 transactions. The account must always have a positive balance and if a card/thread tries to withdraw when there is not enough money in the account, it will be forced to wait. This could potentially lead to deadlock if the account balance is low and all cards try to withdraw. For this assignment we were not required to implement deadlock prevention.
  </p>
  <p>
    When all threads have completed, the program will first display the balance of transactions for each thread - the sum of withdrawals minus deposits. It will then output a statement of each transaction, showing the transaction number, the thread number (in brackets), either the deposit or withdrawal amount and the running balance.
  </p>
  <p>
    The program takes two arguments, the first being how many cards you want to grant access and the second is the opening balance. If you don't provide two arguments, the program will quit with an error message.
  </p>
  <p>
    The program output is displayed in the image on the right.
  </p>
  <p>
    <a href="https://github.com/markbellingham/Concurrency" target="_blank" onclick="ga(‘send’, 'event', 'External link', 'Github - Concurrency');">
      <b>If you want to run the program, source code as well as instructions can be found on my GitHub page.</b>
    </a>
  </p>
</div> <!-- ends left -->
<div class="right">
  <center>
    <a data-fancybox="gallery" href="images/concurrency_program_output.png" onclick="ga(‘send’, 'event', 'image', 'View', 'Image - Concurrency');">
      <img id="concurrency" src="images/concurrency_program_output.png"/>
    </a>
  </center>
</div> <!-- ends right -->
