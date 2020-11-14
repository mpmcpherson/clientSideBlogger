# clientSideBlogger
A client side blogging platform saving tinyMCE formatted DOM to strings in order to output it online or store it in a database
Well, I *was* doing this: 

> Building a pure-vanilla JS, HTML, CSS web template, mostly for giggles. I can already tell it's going to turn into its own JS framework at the very least, and I'm looking forward to the insight that's going to give me working with other frameworks. In all likelihood, after I've built this out to my satisfaction, I'll fork it and start doing other JS framework versions of the same.
> Basically a code-kata for ground-up design.

Except that it turned:

> huh. I bet that if I integrate the TinyMCE editor into the main panel,I can probably POST the output to a file, or to a SQL database.

and then: 

> wait, if I'm posting this to a SQL database, I can then use https://jgthms.com/wysiwyg.css/ to style the results on a blog, for example. And just like that, I've got that flat-file blogging platform without a whole bunch of nonsense that I've wanted for ages.

So...I guess that's what I'm doing. The current code is just supporting the user-side UI, so:

TODO 
. Swap from boilerplate entries for things like title and header to variables, so this is actually viable for other people to use
. Create a configuration file to allow users to target a specific database when they're setting up
. Whoops, a setup wizard would probably be a good idea too.
. a display UI that lets you see previous blog posts to the same server
. a simple multi-server configurator, so that you can manage multiple blogs from one user interface