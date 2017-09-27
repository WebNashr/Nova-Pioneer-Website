
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





===================================
that up there is way too loose
===================================

Nova Pioneer Website
====================

A lightweight base Gulp workflow.
---------------------------------


# Setup assumes you have installed node, npm, git, bower and gulp on your machine
### Once you've cloned the Nova Pioneer Website repository, in your command line tool...

1. Run `sudo npm install -g gulp`

2. Run `sudo npm install -g bower` and agree with all the wizard configurations.

3. Run `bower init` and agree with all the wizard configurations.

4. Run `sudo npm init` and agree with all the wizard configurations.

5. Run `bower install` to install third-party dependencies.

6. Run `sudo npm install` to install all the Gulp task dependencies.

7. Run `sudo npm install -g bower-update-all` to istall a Bower package updates installer utility globally.

8. Run `sudo npm install -g npm-check-updates` to istall an NPM package updates installer utility globally.

9. Run `bower-update-all` to update any old dependencies.

10. Run `npm-check-updates` or `ncu` to check if any dependencies are out of date.

11. Run `sudo npm-check-updates -u` or `sudo ncu -u` to update any old packages.

12. Run `sudo gulp build` to regenerate the project's files (.html, .css, .js, and .jpg/.jpeg/.png/.gif/.svg).



### Tasks

Task running is split into partial tasks, with most tasks cascading from basic jobs like compile, delete and watch file activity. Below are the main tasks:

1. `gulp` generates the project .html and creates folders for, and compiles, .css, .js and .jpg/.jpeg/.png/.gif/.svg files to the distribution folder, **_dist_** at root

2. `gulp build` compiles all project .html, .css, .js and .jpg/.jpeg/.png/.gif/.svg files directly into the project root, and organizes the files into **_css_**, **_js_** and **_img_** folders. This is useful for local development and testing.

3. `gulp clean` deletes compiled files compiled to the project root, as well as the distribution folder.

4. `gulp watch` listens in on changes to .html, .css/.scss, .js and .jpg/.jpeg/.png/.gif/.svg files inside the project's **_source_** folder. When changes are made (write/delete), the affected file is re-compiled to the relevant project root folder.



### Other tasks

Here are some other useful tasks, but you can look through the **_tasks_** folder at the project root to find some of the more obscure sub-tasks.

1. `gulp html` re-compiles **_source_** .html files to the project root.

2. `gulp css` re-compiles **_source_** .css/.scss files to the **_css_** folder at root.

3. `gulp js` re-compiles **_source_** .js files to the **_js_** folder at root.

4. `gulp img` re-compiles **_source_** .jpg/.jpeg/.png/.gif/.svg files to the **_img_** folder at root.



### HTML task

1. Find all .html files in project 'root' folder.
2. Minify them.
3. Save to 'dist' folder.
4. Reload project page in the browser.
5. 'Task complete' message.

### CSS task

1. Find all .scss files in project 'css' folder, and it's child folders.
2. Autoprefix them with browser prefixes where necessary.
3. Compile .scss and save to 'css' folder.
4. Reload project page in the browser.
5. Minify the project stylesheet.
6. Save to 'dist/css' folder.
7. 'Task complete' message.

### JS task

1. Find all .js files in project 'js' folder, and it's child folders.
2. Concatenate them.
3. Save to 'js' folder.
4. Reload project page in the browser.
5. Minify the project scripts.
6. Save to 'dist/js' folder.
7. 'Task complete' message.

### IMG task

1. Find all image files in project 'img' folder, and it's child folders.
2. Minify them.
3. Save to 'dist/js' folder.
4. Reload project page in the browser.
5. 'Task complete' message.

### Cleanup task

1. Set which folders to "flush" from the 'dist' folder.

### Default task

1. Delete 'dist' folder contents.
2. Run 'html', 'css', 'js' and 'img' tasks.

### Watch task

1. Listen in on changes to files in the project 'root' folders (css, js and img), and the .html files.
2. Run the default tasks.

What next?
----------

Pick and choose what kind of project you think this workflow is best suited for :)

Good luck!

