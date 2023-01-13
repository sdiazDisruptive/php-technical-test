This is a PHP project to serve as the base of a technical test.

## Index settings

In the index file is the `$user_replica` varialbe used to generate the variable part of the register link.

Also the `$siteState` variable to set or disable the cooming soon page, if there is any.

There is no need to modify this file for the technical test.

## Pages

The pages of the site are in the `/pages` directory, they need a `.inc.php` extention to work properly.

To view inner pages you need to pass them as a variable in the url. For example, to view the `about.inc.php` page you need to add `?p=about`.

For the technical test you only need `home.inc.php` file.

## Includes

In the `/includes` directory you will find all the components that are used in the site.

# Info file

You will find the `info.php` file inside the `/includes` directory, here are most of the variables that are called for loops or static information of the site.

# Languages

In the `/includes/languages` directory are the files with the strings of all the languages of the site.

The file the controls the selection of the language and the default one is `languages.php`.

For each language you need a file with the name of it in lowercase eg:`spanish.php`.

For the technical test you only need to modify the `spanish.php` file.

## Images

Do not modify the directory structure inside `/images`.

## Documents

All files for downlaod must be inside the `/documents` directory.