// Twit
var Twit = require('twit');
var config = require('./twit_config');
var T = new Twit(config);
//var tweetOne;

// Forward slash means every page is visit on the url, the following
// function is performed
//app.get("/", function(req, res) {
//    res.status(200).send("Hello from Heinrich");
//})

//var server = app.listen(process.env.PORT || "8080", function() {
//    console.log("App listening on port %s", server.address().port);
//    console.log("Press Ctrl+C to quit");
//})
//
//function getData(err, data, response) {
//	var tweets = data.statuses;
//  	for (var i = 0; i < tweets.length; i++) {
//  		//console.log(tweets[i].text);
//        tweets[i].text = tweetOne;
//        console.log(tweets[i].text);
//  	}
//}
//
//function loadTweets() {
//    var params = {
//        q: "unicorn",
//        count: 10
//    };
//    
//    T.get('search/tweets', params, getData);
//    
//    //document.getElementById("tweet_one").innerHTML = tweetOne;
//    console.log("Loading tweets");
//}; 
//
//loadTweets();

T.get('search/tweets', { q: 'banana since:2011-07-11', count: 1 }, function(err, data, response) {
  console.log(data.statuses[0].text)
});
