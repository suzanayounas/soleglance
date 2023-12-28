import tweepy
import configparser
import pandas as pdf
import pandas as pd


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

# public_tweets=api.home_timeline()
# columns=['Time','User','Tweet']
# data=[]
# for tweet in public_tweets:
#  data.append([tweet.created_at,tweet.user.screen_name,tweet.text])
# df= pdf.DataFrame(data,columns=columns)
# df.to_csv('tweets.csv')

# User Tweets

# user= 'imrankhanpti'
# limit=10
# tweets= tweepy.Cursor (api.user_timeline,
# screen_name= user,count=200,
# tweet_mode='extended').items(limit)

# Search Tweets
keywords='#بغل_بچے' # we can type hashtags, usernames etc to search tweets
limit=10
tweets= tweepy.Cursor (api.search_tweets,
q=keywords,count=50,
tweet_mode='extended').items(limit)



# Create DataFrame

columns=['User','Tweet']
data=[]
for tweet in tweets:
 data.append([tweet.user.screen_name,tweet.full_text])
df= pd.DataFrame(data,columns=columns)
print (df)


