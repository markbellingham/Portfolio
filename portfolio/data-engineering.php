<!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-115626803-1', 'auto');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->

<h1>Data Engineering</h1>
<p>
  3rd year Data Engineering assignment that consisted of taking a dataset in CSV format, perform basic data-mining techniques on it and produce a report that would show the likelihood of a particular set of attributes predicting a given output.
</p>
<p>
  The dataset for this assignment was a bank loan dataset that contained personal information about 2000 bank customers, such as their name and address, age, gender, how long they have lived at their address, their employment status, any current debt, whether they own their home, if they have any CCJs against them, how much they wanted to borrow and whether or not they defaulted on the loan.
</p>
<p>
  The aim of the assignment was to analyse this data and see whether the outcome prediction could be improved. This analysis took a number of forms.
</p>
<p>
  <strong>Data Summary</strong><br />
  First step was to list the data in the dataset, for each attribute describe whether it is nominal or numeric, continuous or discrete, and whether or not it would be useful in building the solution.
</p>
<p>
  <strong>Data Mining Algorithm Selection</strong><br />
  Select and describe two different types of data mining algorithms that would be appropriate for solving the problem. The description included the theoretical algorithm and its core features, including methodology, and pros and cons.
</p>
<p>
  <strong>Data Preparation</strong><br />
  Prepare the data by identifying and dealing with noise and outliers, in order that a cleaner dataset would give more reliable results.
</p>
<p>
  <strong>Modelling Results and Discussion</strong><br />
  In this section the dataset is run through a series of experiments, using different testing strategies such as 50:50 and 10 fold cross validation. The parameters for the different strategies are changed one at a time, with the best result being carried forward.
</p>
<p>
  The program used to analyse the data was <a href="http://www.cs.waikato.ac.nz/ml/weka/" target="_blank"><b>Weka 3: Data Mining Software in Java</b></a>
  <br />
  The final report for this assignment can be found here: <a href="documents/data-engineering-assignment.pdf" target="_blank"
    onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'PDF document', 'eventAction':'assignment-report-data-engineering'});">
    <b>Assignment Report</b>
  </a>
  <br />
  The dataset used for the assignment was the <a href="dataset.php"><b>Loan Dataset</b></a>
</p>
