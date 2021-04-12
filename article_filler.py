import csv
from datetime import date

section1 = """<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- @import "../head.kit" -->
    <!-- Put article headline here to title the page -->
    <title>"""

section2 = """</title>
    <!-- Put description here for search engine listings -->
    <meta name="description" content="" />
"""

section3 = """
    <!-- Put canonical URL here for Facebook -->
    <meta property="og:url" content=\""""

section4 = """\" />
    <!-- Put article headline here for Facebook -->
    <meta property="og:title" content=\""""

section5 = """\" />
    <!-- Put description here for Facebook -->
    <meta property="og:description" content="" />
    <!-- Put preview image URL here for Facebook -->
    <meta property="og:image" content="https://colts.org/img/news/Colts_News_Image_Facebook_Card.png" />
    <!-- Leave this unchanged -->
    <meta property="og:type" content="article" />
    <!-- Leave this unchanged-->
    <meta name="twitter:card" content="summary_large_image" />
    <!-- Leave this unchanged, unless we change our Twitter username -->
    <meta name="twitter:site" content="@dcicolts" />
    <!-- Put article headline here for Twitter -->
    <meta name="twitter:title" content=\""""

section6 = """\" />
    <!-- Put description here for Twitter -->
    <meta name="twitter:description" content="" />
    <!-- Put preview image URL here for Twitter -->
    <meta name="twitter:image" content="https://colts.org/img/news/Colts_News_Image_Twitter_Card.png" />
  </head>

  <body>
    <!-- @import "../navbar.kit" -->
    <main>
      <!-- Container -->
      <div class="container-fluid">
        <div class="row pt-3 pt-md-5 px-md-3 px-lg-5">
          <div class="col-12">
            <!-- Headline -->
            <h1>"""

section7 = """</h1>
            <!-- Publish date -->
            <p><i>"""

section8 = """</i></p>
            <!-- Article content -->
"""

section9 = """
            <!-- End article content -->
            <!-- Return to Colts News -->
            <p>
              <i>Return to <a href="/news">Colts News.</a></i>
            </p>
          </div>
        </div>
      </div>
      <!-- End container -->
    </main>

    <!-- @import "../footer.kit" -->
    <!-- @import "../scripts.kit" -->
  </body>
</html>
"""

with open('articles.csv', encoding="utf8", errors='ignore') as csvfile:
    reader = csv.DictReader(csvfile)
    for row in reader:
        prefix = 'source/news/'
        url = f"{prefix}{row['Year']}_{row['Article']}.kit"
        publish_date = date(int(row['Year']), int(row['Month']), int(row['Day']))
        publish_date_str = publish_date.strftime("%B %-d, %Y")
        with open(url, 'w') as article:

            article.write(section1)
            article.write(row['Headline'])
            article.write(section2)
            article.write(section3)
            article.write(f"https://colts.org/{url[7:-3]}html")
            article.write(section4)
            article.write(row['Headline'])
            article.write(section5)
            article.write(row['Headline'])
            article.write(section6)
            article.write(row['Headline'].replace(':', '<span style="font-weight: 400;">:</span>'))
            article.write(section7)
            article.write(publish_date_str)
            article.write(section8)
            article.write(row['Content'])
            article.write(section9)
