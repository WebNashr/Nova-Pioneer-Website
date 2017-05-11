
# Nova-Pioneer-Website

# README #

Simple wordpress installation  see https://github.com/WordPress/WordPress/blob/master/readme.html


### How do I get set up? ###

* Clone repo
* copy DB from RDS [usually named  same as project suffixed by either "_uat" or "_live"] always use the live version unless otherwise always suffixed by "_live"
* Database configuration --> https://codex.wordpress.org/Editing_wp-config.php
* There's a secondary config file at the root, simply copy the "site-config-example.php" to "site-config.php". This file is used to configure the shared assets of the Nova schools and handle redirects 
* Site uses twig https://twig.sensiolabs.org/  sure twig can write to its cache folder
* Run `npm install` from the root folder
* Run `bower install` from the root folder
* Run `gulp default` to generate JS and CSS assets
* Make sure to have a `.htaccess` file in both the `kenya` and `sa` folder with permalink redirects setup
* The `novapioneer` themes directory needs to be writable in both `kenya` and `sa` for `twig` to create the `cache` folder.
Either 777 or 757 should do i.e. `chmod 757 kenya/wp-content/themes/novapioneer`

### Virtual Host Settings

An example of virtual host settings:

    <VirtualHost *:80>
        ServerName nova.local
        DocumentRoot "/Users/winter/www/nova"
    
        <Directory "/Users/winter/www/nova">
            Options All
            AllowOverride All
            Require all granted
        </Directory>
    
        <IfModule dir_module>
            DirectoryIndex index.php
        </IfModule>
    
        <Files ".ht*">
            Order deny,allow
            Deny from all
        </Files>
    </VirtualHost>
    
### wp-config

Both the `kenya` and `sa` folders have their own `wp-config.php` files, in which you'll have to specify the base_url of the site 
(as per your virtual host settings) as well as the home_url and site_url

