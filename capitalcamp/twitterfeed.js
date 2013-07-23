// JQuery Twitter Feed. Coded by www.webdevdoor.com (2012) and modified from https://twitter.com/javascripts/blogger.js
$(document).ready(function () {
 
    var displaylimit = 100;
    var twitterprofile = "saforian";
    var screenname = "saforian";
    var showdirecttweets = true;
    var showretweets = false;
    var showtweetlinks = true;
    var showprofilepic = false;
 
    var headerHTML = '';
    var loadingHTML = 'Loading Tweets';
    
    $('#capital-feed').html(headerHTML + loadingHTML);
 
    $.getJSON('get-tweets.php',
        function(feeds) {
            //alert(feeds);
            var feedHTML = '';
            var displayCounter = 1;
            



            for (var i=0; i<feeds.statuses.length; i++) {

                
                var tweetscreenname = feeds.statuses[i].user.name;
                var tweetusername = feeds.statuses[i].user.screen_name;
                var tweetuserprofileurl = 'http://twitter.com/@' + tweetusername;
                var profileimage = feeds.statuses[i].user.profile_image_url_https;
                var status = feeds.statuses[i].text;
                var isaretweet = false;
                var isdirect = false;
                var tweetid = feeds.statuses[i].id_str;

 
 
                //If the tweet has been retweeted, get the profile pic of the tweeter
              
                if(typeof feeds.statuses[i].retweeted_status != 'undefined'){
                   profileimage = feeds.statuses[i].retweeted_status.user.profile_image_url_https;
                   tweetscreenname = feeds.statuses[i].retweeted_status.user.name;
                   tweetusername = feeds.statuses[i].retweeted_status.user.screen_name;
                   tweetid = feeds.statuses[i].retweeted_status.id_str
                   isaretweet = true;
                 };
                 

                 //Check to see if the tweet is a direct message

                 if (feeds.statuses[i].text.substr(0,1) == "@") {
                     isdirect = true;
                 }

 
                //console.log(feeds[i]);
 

                 if (((showretweets == true) || ((isaretweet == false) && (showretweets == false))) && ((showdirecttweets == true) || ((showdirecttweets == false) && (isdirect == false)))) {
                    if ((feeds.statuses[i].text.length > 1) && (displayCounter <= displaylimit)) {
                        if (showtweetlinks == true) {
                            status = addlinks(status);
                        }
 
                        if (displayCounter == 1) {
                        //    feedHTML += headerHTML;
                        }
                        feedHTML += '<article><p><p><a href="'+tweetuserprofileurl+'">'+tweetscreenname+'</a> @'+tweetusername+'</p><br/>'+status+'</p><p class="time-stamp"><a href="'+tweetuserprofileurl+'/status/'+tweetid+'">'+relative_time(feeds.statuses[i].created_at)+'</a></p></article></div>';
                        displayCounter++;
                    }
                 }
            }

            $('#capital-feed').html(feedHTML);
                      
    });
 
    //Function modified from Stack Overflow
    function addlinks(data) {
        //Add link to all http:// links within tweets
        data = data.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
            return '<a href="'+url+'" >'+url+'</a>';
        });
 
        //Add link to @usernames used within tweets
        data = data.replace(/\B@([_a-z0-9]+)/ig, function(reply) {
            return '<a href="http://twitter.com/'+reply.substring(1)+'" style="font-weight:lighter;" >'+reply.charAt(0)+reply.substring(1)+'</a>';
        });
        return data;
    }
 
    function relative_time(time_value) {
      var values = time_value.split(" ");
      time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
      var parsed_date = Date.parse(time_value);
      var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
      var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
      var shortdate = time_value.substr(4,2) + " " + time_value.substr(0,3);
      delta = delta + (relative_to.getTimezoneOffset() * 60);
 
      if (delta < 60) {
        return '1 minute ago';
      } else if(delta < 120) {
        return '1 minute ago';
      } else if(delta < (60*60)) {
        return (parseInt(delta / 60)).toString() + ' minutes ago';
      } else if(delta < (120*60)) {
        return '1 hour ago';
      } else if(delta < (24*60*60)) {
        return (parseInt(delta / 3600)).toString() + ' hours ago';
      } else if(delta < (48*60*60)) {
        //return '1 day';
        return shortdate;
      } else {
        return shortdate;
      }
    }
 
});