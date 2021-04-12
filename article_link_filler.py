import csv
from datetime import date

section1="""
              <!-- Article -->
              <div class="col mb-4">
                <!-- URL -->
                <a href=\""""
                
section2="""\" class="news-entry-link">
                  <div class="card h-100">
                    <div class="card-body">
                      <!-- Headline -->
                      <h3 class="card-title">"""
                      
section3="""</h3>
                      <!-- Description -->
                      <p>"""
                      
section4="""</p>
                    </div>
                    <div class="card-footer border-top border-danger">
                      <p class="news-byline">
                        <!-- Publish date -->
                        <span class="news-date">"""

section5="""</span>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- End article -->"""


with open('articles.csv', encoding="utf8", errors='ignore') as csvfile:
    reader = csv.DictReader(csvfile)
    for row in reader:
        if row['Year'] == '2004':
          prefix = '/news/'
          url = f"{prefix}{row['Year']}_{row['Article']}"
          publish_date = date(int(row['Year']), int(row['Month']), int(row['Day']))
          publish_date_str = publish_date.strftime("%B %-d, %Y")
          print(section1, end='')
          print(url, end='')
          print(section2, end='')
          print(row['Headline'], end='')
          print(section3, end='')
          print(section4, end='')
          print(publish_date_str, end='')
          print(section5, end='')
        else:
          continue
