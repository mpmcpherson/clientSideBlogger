
# clientSideBlogger
A client side blogging platform saving tinyMCE formatted DOM to strings in order to output it online or store it in a database
Well, I *was* doing this: 

> Building a pure-vanilla JS, HTML, CSS web template, mostly for giggles. I can already tell it's going to turn into its own JS framework at the very least, and I'm looking forward to the insight that's going to give me working with other frameworks. In all likelihood, after I've built this out to my satisfaction, I'll fork it and start doing other JS framework versions of the same.
> Basically a code-kata for ground-up design.

Except that it turned into:

> huh. I bet that if I integrate the TinyMCE editor into the main panel,I can probably POST the output to a file, or to a SQL database.

and then: 

> wait, if I'm posting this to a SQL database, I can then use https://jgthms.com/wysiwyg.css/ to style the results on a blog, for example. And just like that, I've got that flat-file blogging platform without a whole bunch of nonsense that I've wanted for ages.

So...I guess that's what I'm doing. The current code is just supporting the user-side UI. 

>Well, this turned into a further: well, SQL is a stupid way to accommodate arbitrary length text. I should do this in noSQL, so that I can have dynamic lengths without worrying about having to split it across some number of SQL rows. 

Which I did. And then I got to learn about CouchDB after mongo turned out to be a HUGE pain in the butt.

>And then, hey, I should write a REST API separately, then integrate it.

So I started https://github.com/mpmcpherson/phpInsecureREST/ and as it turned out, that wasn't super easy either! But I built it, and I built it on top of a base class that handles all the database interation (although I can already see places where I'm going to need to extend it to stay true to correct REST practice).

> And wouldn't you just know it, basic authentication (user/pass) is "okay", but...not great. And doing it like that means that not only do I have to have each user as a user on the database who can perform DB operations (eugh), but if someone successfully MITMs my users, well, they're hosed, their data is hosed, and possibly my database is hosed, depending how how well Eve can pop shells. 

Which means I need better authentication. Like...OAuth. Like...https://oauth.net/2/jwt/. Which, of course, is how I started https://github.com/mpmcpherson/home_rolled_JWT

And like it says: I'm rolling my own cryptography, because I, clearly, am an idiot.