import pandas as df
import pandas as pd
import matplotlib.pyplot as plt
from textblob import TextBlob
import configparser
import tweepy

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


# Prompt the user for input
hashtag = input("Enter a hashtag to search for: ")
#hashtag = "#ظلِ_شاہ"
tweets = tweepy.Cursor(api.search_tweets, q=hashtag, lang="en", since_id=0).items(100)

tweet_data = [[tweet.user.screen_name, tweet.created_at, tweet.text] for tweet in tweets]
df = pd.DataFrame(data=tweet_data, columns=["User", "Date", "Text"])

# Calculate the sentiment score for each tweet
sentiment_scores = df["Text"].apply(lambda x: TextBlob(x).sentiment.polarity)

# Plot a histogram of the sentiment scores
plt.hist(sentiment_scores, bins=20)
plt.title("Sentiment of tweets")
plt.xlabel("Sentiment score")
plt.ylabel("Number of tweets")
plt.show()

