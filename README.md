# _h5ai fork with File operations

## File-operations:
* Upload
* Delete
* Create Folder

## Original repo (https://github.com/lrsjng/h5ai)

Cloud Storage

Copy folder _h5ai to the document root directory of the web server: DOC_ROOT/_h5ai.

DOC_ROOT
 ├─ _h5ai
 ├─ your files
 └─ and folders

Initialization - 

Apache httpd 2.2/2.4: in httpd.conf or in the root directory's .htaccess file set for example:

DirectoryIndex  index.html  index.php  /_h5ai/public/index.php

lighttpd 1.4: in lighttpd.conf set for example:

index-file.names += ("index.html", "index.php", "/_h5ai/public/index.php")

nginx 1.2: in nginx.conf set for example:

index  index.html  index.php  /_h5ai/public/index.php;

Cherokee 1.2: in cherokee.conf set for example:

vserver!1!directory_index = index.html,index.php,/_h5ai/public/index.php
