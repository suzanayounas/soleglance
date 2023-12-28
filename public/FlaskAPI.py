from flask import Flask, request, jsonify
from SentimentAnalysis import perform_sentiment_analysis

app = Flask(__name__)

@app.route('/sentiment-analysis', methods=['POST'])
def sentiment_analysis():
    data = request.get_json()
    tweets = data['tweets']
    results = perform_sentiment_analysis(tweets)  # Call your sentiment analysis function
    return jsonify(results)

if __name__ == '__main__':
    app.run()
