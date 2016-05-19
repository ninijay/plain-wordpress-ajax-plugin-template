# plain-wordpress-ajax-plugin-template
A template to build a Wordpress- Plugin with an AJAX call. Just rename "myplugin" and "slug" add your logic, and you're good to go :)

# How To
* Fill in Header Information
* You have to rename every "slug" and "myplugin" piece in this template (in JS and PHP File)
* Add the logic, you want to pre processed in the function **function slug_process_ajax()**
* If needed process the response in the js file

# What it does
It creates a Plugin, which you can access via the admin-main-menu in wordpress. The Plugin- Site in Wordpress has just a Button.

When you press the button it executes your logic via an ajax call.

**You can change the form, but you have to change also the js- file accordingly**
