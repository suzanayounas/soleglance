import re 

import numpy as np

import tweepy 

from tweepy import OAuthHandler 

from textblob import TextBlob 

import matplotlib.pyplot as plt

import pandas as pd
import configparser
import profanity
import nltk
from nltk.tokenize import word_tokenize
from collections import Counter

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

hashtag = "#ظلِ_شاہ"
tweets = tweepy.Cursor(api.search_tweets, q=hashtag, lang="en", since_id=0).items(100)

tweet_data = [[tweet.user.screen_name, tweet.created_at, tweet.text] for tweet in tweets]
df = pd.DataFrame(data=tweet_data, columns=["User", "Date", "Text"])

# Convert the Date column to a datetime object
df["Date"] = pd.to_datetime(df["Date"]).dt.date

# Group the tweets by date and count the number of tweets per day
tweets_per_day = df.groupby("Date").count()["Text"]

# Plot the data
plt.plot(tweets_per_day)
plt.title("Number of tweets per day")
plt.xlabel("Date")
plt.ylabel("Number of tweets")
plt.show()



