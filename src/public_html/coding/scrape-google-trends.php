<?php
  define("HEADER_TYPE",'blogpost');
  define("BG_IMG_MD",'medium/SD__A7T3305_Web.jpg');
  define("BG_IMG_LG",'large/SD__A7T3305_Web_LG.jpg');
  define("SITE_TITLE",'How to Scrape Google Trends with Object-Oriented Python');
  define("SITE_SUBTITLE",'With exception handling feature');
  define("SITE_SUBSUBTITLE",'Posted on April 7, 2020');
?>
<!doctype html>
<?php
  include_once '../common/config.php';
  include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php'; ?>
  <title>How to Scrape Google Trends with Object-Oriented Python | Coding - Skyler Dong</title>
</head>
<body>
<?php
  include_once '../common/navbar.php'; 
  include_once '../common/header.php';
?>
<!-- Main Content -->
<div class="container maincontent">
  <div class="row">
    <div class="col-12 mx-auto col-md-10">
      <div class="toc_container mb-5">
        <p class="toc_title">Contents</p>
        <ul class="toc_list">
          <li><a href="#code-scrape">Scraping Google trends data</a></li>
        </ul>
      </div><!--TOC CONTAINER-->
      <div class="mb-3"><h2 id="code-scrape" class="anchor">Scraping Google trends data</h2>
        <p><a href="https://github.com/tangaw" target="_blank">Aaron Tang</a> and I wrote a piece of code in Python to scrape Google trends data in object-oriented style with exception handling.</p>
        <p>In the example below, we are interested in scraping Google trends data from January 2006 to March 2020 at a monthly resolution about Canon, Nikon and Sony cameras globally.</p>
        <p>We used the Pytrends module and our contribution is to construct a class object called Trend and introduced exception handling during data scraping, as Google may limit frequent data scraping in a short timeframe and throw an error. The exception handles the error and retries the data scraping after a short pause.</p>
        <pre><code class="language-python"># Import modules:
import pandas as pd
import pickle
import matplotlib.pyplot as plt
import time
from pytrends.request import TrendReq
pytrend = TrendReq()

##############################

class Trend:
# Trend class for scraped data

  # Required modules:
    # import pandas as pd
    # import pickle
    # import matplotlib.pyplot as plt
    # from pytrends.request import TrendReq
    # pytrend = TrendReq()
        
  def __init__(self, year, month, kwList):
    self.year = year
    self.month = month
    self.kwList = kwList # Keyword list

  def monthEndDate(self):
  # Return the number of days, given the month
    # Since Python does not have a switch-case statement, use a dictionary
    switcher = {
      1: 31,
      2: 28,
      3: 31,
      4: 30,
      5: 31,
      6: 30,
      7: 31,
      8: 31,
      9: 30,
      10: 31,
      11: 30,
      12: 31,
    }
    if ((self.year%4 == 0) and (self.month == 2)):
      switcher[2] = 29
      # Take care of the 29th day in Februaries in leap years
    return switcher.get(self.month)
    # Return the value

  def timeframe(self):
  # Construct string timeframe
    date_start = str(self.year) + '-' + str(self.month) + '-01'
    date_end = str(self.year) + '-' + str(self.month) \
      + "-" + str(self.monthEndDate())
    return date_start + ' ' + date_end

  def scrape(self):
  # Scrape Google trends
    pytrend.build_payload(self.kwList, timeframe=self.timeframe())
    self.trend = (pytrend.interest_by_region()).reset_index()
      
  def toPickle(self, keyword, path):
  # Serialize and export data with pickle module
    monthStr = '0' + str(self.month) if self.month < 10 else str(self.month)
    fileName = str(self.year) + '-' + monthStr + '-' + str(keyword)
    pathName = str(path) + '/' + fileName + '.pkl'
    with open(pathName, 'wb') as f:
      pickle.dump(self.trend, f)

  def preview(self):
  # Preview first and last 10 rows of the data
  # The data need to have >= 10 rows
  # (for now. We'll take care of other situations in the future)
    print("Head:")
    print(self.trend.head(10))
    print("..............................")
    print("Tail:")
    print(self.trend.tail(10))

  def hist(self):
  # Generate a histogram for data visualization
    plt.figure(figsize=(8,6))
    for i in range(1, len((self.trend).columns)):
      plt.hist((self.trend).iloc[:, i], range=(0,100), bins=10, \
        alpha=0.3, label=(self.trend).columns[i])
    plt.title(str(self.year) + '-' + str(self.month))
    plt.ylabel('Frequency')
    plt.legend()
    plt.show()
      
  def scatter(self):
  # Generate a scatter plot for data visualizaiton
    plt.figure(figsize=(8,6))
    for i in range(1, len((self.trend).columns)):
      plt.scatter(x=(self.trend).index, y=(self.trend).iloc[:, i], \
        s=4, alpha=0.5, label=(self.trend).columns[i])
    plt.title(str(self.year) + '-' + str(self.month))
    plt.ylim(0, 100)
    plt.ylabel('Trending index')
    plt.legend()
    plt.show()

##############################

kw_list = ['"Canon" "camera"', '"Nikon" "camera"', '"Sony" "camera"']
# Set keyword list as a list of strings

for y in range(2006, 2021):
# Scrape data froms year 2006 to 2020

  for m in range(1, 13):
  # Scrape data from months 1 to 12

    if (y == 2020 and m>3):
      break
    # Stop data scraping after March 2020, as this code was written in April 2020

    while True:
    # Exception handing. Google might limit frequent data scraping and throw errors

      try:
      # Scrape data using Trend class (defined in this code snippet)

        t = Trend(y, m, kw_list)
        # Trend class is defined in this code snippet

        t.scrape()
        # Scrape data

        t.toPickle('camera', 'data/raw/camera')
        # Serializing and exporting data using pickle module

        t.scatter()
        # Generate a simple scatter plot to preview the data

        print(str(y) + '-' + str(m) + ': DONE')
        # Print a confirmation message

        time.sleep(0.1)  # in seconds
        # Pause for 0.1 second before the next loop

        break
        # Break "while True" exception handler to continue the next for-loop

      except:
      # Handle errors if any

        print("Error catched. Going to pause for some duration...")
        # Print a message

        time.sleep(60)
        # Pause 60 seconds before next try</code></pre>
        <p>This is a work in progress. I'm currently writing this section.</p>
      </div>
    </div>
  </div><!--row-->
</div><!--maincontent-->
<?php include_once '../common/footer.php'; ?>
</body>
</html>
