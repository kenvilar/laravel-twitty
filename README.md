# laravel-twitty
![Powered By Ken Vilar](https://img.shields.io/badge/Powered%20by-Ken%20Vilar-blue.svg)  
[![Twitter](https://img.shields.io/twitter/url/https/github.com/kenvilar/laravel-twitty/.svg?style=social)](https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2Fkenvilar%2Flaravel-twitty%2F) 

## Features
> * Fetch the recent tweets with limit 10
> * Display tweets on the homepage
> * Count the likes and retweet for each tweet
> * Compose new tweet form
> * Can upload multiple images

### Instructions
Go to https://apps.twitter.com/ and create your own application

Copy the `.env.example` file and name it as `.env`

Copy all secret keys and access tokens to your .env file.
For example,        
```sh
TWITTER_CONSUMER_KEY=<your_own_twitter_consumer_key>    
TWITTER_CONSUMER_SECRET=<your_own_twitter_consumer_secret>  
TWITTER_ACCESS_TOKEN=<your_own_twitter_access_token>    
TWITTER_ACCESS_TOKEN_SECRET=<your_own_twitter_access_token_secret>
``` 
Do not touch the `config/ttwitter.php` file for security reasons.
