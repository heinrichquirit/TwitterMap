console.log('Twit is starting');

var Twit = require('twit');

var config = require('./twit_config');
var T = new Twit(config);

var params = { 
		// Provide query term
		q: 'soulja', 
		// How many tweets to return
		count: 10
}; 

function getData(err, data, response) {
	var tweets = data.statuses;
  	for (var i = 0; i < tweets.length; i++) {
  		console.log(tweets[i].text);
  	}
}

//
//  search twitter for all tweets containing the word 'banana' since July 11, 2011
//
//T.get('search/tweets', params, getData);

var tweet = {
	status: 'hello world from js code!'
}

function tweeted(err, data, response) {
	console.log(data);
}

//
//  tweet 'hello world!'
//
T.post('statuses/update', tweet, tweeted);