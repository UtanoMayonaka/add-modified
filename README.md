# Add Modified Date Plugin

The **Add Modified Date** Plugin is designed for [Grav CMS](http://github.com/getgrav/grav) and automatically adds the current date to frontmatter when saving a page via the Admin plugin. 

## Description

There's not much to this plugin, simply install it and whenever you create a new page and saving a page via the admin plugin, the current date will be inserted in the frontmatter of the page and show up in the **Options** -> **Publishing** Tab.  The format of the date is dependent upon the value set in `system.yaml` under `pages: dateformat: default` and if not set will use `H:i d-m-Y` as the date format.

## Installation

To install this plugin, just download the zip version of this repository and unzip it under /your/site/grav/user/plugins. Then, rename the folder to `add-modified`.

You should now have all the plugin files under

/your/site/grav/user/plugins/add-modified