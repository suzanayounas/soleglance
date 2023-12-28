import tweepy
import re
import configparser
import nltk
nltk.download('stopwords')
nltk.download('punkt')
from nltk.corpus import stopwords

# read Configs
config=configparser.ConfigParser()
config.read('config.ini')

api_key=config ['Twitter'] ['api_key']
api_key_secret=config ['Twitter'] ['api_key_secret']
Access_Token=config ['Twitter'] ['Access_Token']
Access_Token_Secret=config ['Twitter'] ['Access_Token_Secret']

# authentification
auth=tweepy.OAuthHandler(api_key,api_key_secret)
auth.set_access_token(Access_Token,Access_Token_Secret)

api=tweepy.API(auth)

# Collect tweets with political hashtags
hashtags = ['#PTI', '#PMLN', '#PPP', '#PDM','#PPP','#Army','#SupremeCourt','#ElectionCommission']
tweets = []
for hashtag in hashtags:
    results = api.search_tweets(q=hashtag, lang='en', count=100)
    for result in results:
        tweets.append(result)

# Preprocess tweets
stop_words = set(stopwords.words('english'))
clean_tweets = []
for tweet in tweets:
    text = re.sub(r'http\S+', '', tweet.text) # Remove URLs
    text = re.sub(r'@\w+', '', text) # Remove mentions
    text = re.sub(r'[^\w\s]', '', text) # Remove special characters
    words = nltk.word_tokenize(text.lower())
    words = [w for w in words if w not in stop_words]
    clean_tweets.append(' '.join(words))

# Extract hashtags
political_hashtags = []
for tweet in clean_tweets:
    hashtags = re.findall(r'#\w+', tweet)
    political_hashtags.extend(hashtags)

# Assign categories to hashtags
category_dict = {'PTI': ['#ImranKhan', '#ZamanPark','#ReleaseWaqasAmjad'], 
                 'PMLN': ['#Registrar','#NawazSharif' '#IrfanQadir'], 
                 'PDM': ['#elections', '#voting'], 
                 'PPP': ['#elections', '#voting','#SalamBhutto','#NabilGabol'],
                 'Army': ['#elections', '#voting'],
                 'SupremeCourt': ['#elections','#StandingWithConstitution','#WeRejectOneManShow'],
                 'ElectionCommission': ['#elections', '#Munshi'],
                 'other': []}

for hashtag in political_hashtags:
    found_category = False
    for category, category_hashtags in category_dict.items():
        if hashtag in category_hashtags:
            category_dict[category].append(hashtag)
            found_category = True
            break
    if not found_category:
        category_dict['other'].append(hashtag)

# Categorize tweets
category_counts = {'PTI': 0, 'PMLN': 0, 'PDM':0,'PPP': 0, 'Army:':0,'SupremeCourt':0,'ElectionCommission':0,'other': 0}
for tweet in clean_tweets:
    tweet_categories = []
    hashtags = re.findall(r'#\w+', tweet)
    for hashtag in hashtags:
        for category, category_hashtags in category_dict.items():
            if hashtag in category_hashtags:
                tweet_categories.append(category)
                break
    if len(tweet_categories) == 0:
        category_counts['other'] += 1
    else:
        for category in tweet_categories:
            category_counts[category] += 1

print(category_counts) # Output:
