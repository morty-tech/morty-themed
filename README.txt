=== Morty Wordpress Theme  ===

generate css w/ `gulp scss` or `gulp` to watch
to properly generate minified versions of things for prod run `webpack`

## Updating the theme
After updating the changes to this theme in this repo they must be pulled onto the Wordpress host in Dreamhost. 
The details for accessing the host can be found in the [Dreamhost Control Panel](https://panel.dreamhost.com/index.cgi?tree=wordpress.dreampress#!/site/blog.morty.com/hosting)

Once you are able to login you can run the following alias `pull_theme` which will run the following commands `eval $(ssh-agent) && ssh-add ~/.ssh/github_rsa && cd ~/morty-themed && git pull`
