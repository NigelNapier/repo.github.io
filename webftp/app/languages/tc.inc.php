<?php

//   -------------------------------------------------------------------------------
//  |                  net2ftp: a web based FTP client                              |
//  |              Copyright (c) 2003-2009 by David Gartner                         |
//  |                                                                               |
//  | This program is free software; you can redistribute it and/or                 |
//  | modify it under the terms of the GNU General Public License                   |
//  | as published by the Free Software Foundation; either version 2                |
//  | of the License, or (at your option) any later version.                        |
//  |                                                                               |
//   -------------------------------------------------------------------------------

//   -------------------------------------------------------------------------------
//  | For credits, see the credits.txt file                                         |
//   -------------------------------------------------------------------------------
//  |                                                                               |
//  |                              INSTRUCTIONS                                     |
//  |                                                                               |
//  |  The messages to translate are listed below.                                  |
//  |  The structure of each line is like this:                                     |
//  |     $message["Hello world!"] = "Hello world!";                                |
//  |                                                                               |
//  |  Keep the text between square brackets [] as it is.                           |
//  |  Translate the 2nd part, keeping the same punctuation and HTML tags.          |
//  |                                                                               |
//  |  The English message, for example                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is written in PHP!";    |
//  |  should become after translation:                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp est ecrit en PHP!";     |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is geschreven in PHP!"; |
//  |                                                                               |
//  |  Note that the variable starts with a dollar sign $, that the value is        |
//  |  enclosed in double quotes " and that the line ends with a semi-colon ;       |
//  |  Be careful when editing this file, do not erase those special characters.    |
//  |                                                                               |
//  |  Some messages also contain one or more variables which start with a percent  |
//  |  sign, for example %1\$s or %2\$s. The English message, for example           |
//  |     $messages[...] = ["The file %1\$s was copied to %2\$s "]                  |
//  |  should becomes after translation:                                            |
//  |     $messages[...] = ["Le fichier %1\$s a ?t? copi? vers %2\$s "]             |
//  |                                                                               |
//  |  When a real percent sign % is needed in the text it is entered as %%         |
//  |  otherwise it is interpreted as a variable. So no, it's not a mistake.        |
//  |                                                                               |
//  |  Between the messages to translate there is additional PHP code, for example: |
//  |      if ($net2ftp_globals["state2"] == "rename") {           // <-- PHP code  |
//  |          $net2ftp_messages["Rename file"] = "Rename file";   // <-- message   |
//  |      }                                                       // <-- PHP code  |
//  |  This code is needed to load the messages only when they are actually needed. |
//  |  There is no need to change or delete any of that PHP code; translate only    |
//  |  the message.                                                                 |
//  |                                                                               |
//  |  Thanks in advance to all the translators!                                    |
//  |  David.                                                                       |
//  |                                                                               |
//   -------------------------------------------------------------------------------


// -------------------------------------------------------------------------
// Language settings
// -------------------------------------------------------------------------

// HTML lang attribute
$net2ftp_messages["en"] = "zh-TW";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "left";
$net2ftp_messages["right"] = "right";

// Encoding
$net2ftp_messages["iso-8859-1"] = "big5";


// -------------------------------------------------------------------------
// Status messages
// -------------------------------------------------------------------------

// When translating these messages, keep in mind that the text should not be too long
// It should fit in the status textbox

$net2ftp_messages["Connecting to the FTP server"] = "?s???? FTP ???A??";
$net2ftp_messages["Logging into the FTP server"] = "Logging into the FTP server";
$net2ftp_messages["Setting the passive mode"] = "Setting the passive mode";
$net2ftp_messages["Getting the FTP system type"] = "Getting the FTP system type";
$net2ftp_messages["Changing the directory"] = "Changing the directory";
$net2ftp_messages["Getting the current directory"] = "Getting the current directory";
$net2ftp_messages["Getting the list of directories and files"] = "???o?????????????C??...";
$net2ftp_messages["Parsing the list of directories and files"] = "Parsing the list of directories and files";
$net2ftp_messages["Logging out of the FTP server"] = "Logging out of the FTP server";
$net2ftp_messages["Getting the list of directories and files"] = "???o?????????????C??...";
$net2ftp_messages["Printing the list of directories and files"] = "?C?X?????????????C??...";
$net2ftp_messages["Processing the entries"] = "?B?z???J????...";
$net2ftp_messages["Processing entry %1\$s"] = "Processing entry %1\$s";
$net2ftp_messages["Checking files"] = "???d????...";
$net2ftp_messages["Transferring files to the FTP server"] = "???e?? FTP ???A??...";
$net2ftp_messages["Decompressing archives and transferring files"] = "?????????e????...";
$net2ftp_messages["Searching the files..."] = "?j??????...";
$net2ftp_messages["Uploading new file"] = "?W???s????...";
$net2ftp_messages["Reading the file"] = "Reading the file";
$net2ftp_messages["Parsing the file"] = "Parsing the file";
$net2ftp_messages["Reading the new file"] = "?????s????...";
$net2ftp_messages["Reading the old file"] = "??????????...";
$net2ftp_messages["Comparing the 2 files"] = "???? 2 ??????...";
$net2ftp_messages["Printing the comparison"] = "?C?X???????G...";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "Sending FTP command %1\$s of %2\$s";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Getting archive %1\$s of %2\$s from the FTP server";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "Creating a temporary directory on the FTP server";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Setting the permissions of the temporary directory";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "Copying the net2ftp installer script to the FTP server";
$net2ftp_messages["Script finished in %1\$s seconds"] = "?B??????: %1\$s ??";
$net2ftp_messages["Script halted"] = "?B??????";

// Used on various screens
$net2ftp_messages["Please wait..."] = "???y?J...";


// -------------------------------------------------------------------------
// index.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "Unexpected state string: %1\$s. Exiting.";
$net2ftp_messages["This beta function is not activated on this server."] = "?????A???|???????? BETA ?\??.";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "This function has been disabled by the Administrator of this website.";


// -------------------------------------------------------------------------
// /includes/browse.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Your root directory <b>%1\$s</b> does not exist or could not be selected.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist.";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted.";
$net2ftp_messages["Execute %1\$s in a new window"] = "?b?s?????}?? %1\$s";


// -------------------------------------------------------------------------
// /includes/main.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Please select at least one directory or file!"] = "???????????@??????????????!";


// -------------------------------------------------------------------------
// /includes/authorizations.inc.php
// -------------------------------------------------------------------------

// checkAuthorization()
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "FTP ???A?? <b>%1\$s</b> ???b???\?s?u?C????.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "FTP ???A?? <b>%1\$s</b> ?b?Q?T?s?u?C????.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "FTP ???A???s???? %1\$s ?i????????.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Your IP address (%1\$s) is not in the list of allowed IP addresses.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "?A?? IP (%1\$s) ?b?Q?T?s?u?C????.";

// isAuthorizedDirectory()
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "Table net2ftp_users contains duplicate rows.";

// logAccess(), logLogin(), logError()
$net2ftp_messages["Unable to execute the SQL query."] = "Unable to execute the SQL query.";
$net2ftp_messages["Unable to open the system log."] = "Unable to open the system log.";
$net2ftp_messages["Unable to write a message to the system log."] = "Unable to write a message to the system log.";

// checkAdminUsernamePassword()
$net2ftp_messages["You did not enter your Administrator username or password."] = "You did not enter your Administrator username or password.";
$net2ftp_messages["Wrong username or password. Please try again."] = "Wrong username or password. Please try again.";


// -------------------------------------------------------------------------
// /includes/consumption.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to determine your IP address."] = "Unable to determine your IP address.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "Table net2ftp_log_consumption_ipaddress contains duplicate rows.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "Table net2ftp_log_consumption_ftpserver contains duplicate rows.";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "The variable <b>consumption_ipaddress_datatransfer</b> is not numeric.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "Table net2ftp_log_consumption_ipaddress could not be updated.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "Table net2ftp_log_consumption_ipaddress contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "Table net2ftp_log_consumption_ftpserver could not be updated.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "Table net2ftp_log_consumption_ftpserver contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "Table net2ftp_log_access could not be updated.";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "Table net2ftp_log_access contains duplicate entries.";


// -------------------------------------------------------------------------
// /includes/database.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";


// -------------------------------------------------------------------------
// /includes/errorhandling.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["An error has occured"] = "???~";
$net2ftp_messages["Go back"] = "???^";
$net2ftp_messages["Go to the login page"] = "?????n?J????";


// -------------------------------------------------------------------------
// /includes/filesystem.inc.php
// -------------------------------------------------------------------------

// ftp_openconnection()
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a><br />"] = "PHP ??<a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP ????</a> ?????w??.<br /><br /> ???p?????A?????z?????w????????. ?????w???????b <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "?????s?? FTP ???A?? <b>%1\$s</b>, ?s???? <b>%2\$s</b>.<br /><br />???T?w FTP ???A???a?}???T. ?j?????P HTTP (web) ???A?????P. ???p?????A?????z???o??????????.<br />";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "?????n?J FTP ???A?? <b>%1\$s</b> ???????W?? <b>%2\$s</b> ?i?????~.<br /><br />???T?w?????W?????K?X???T. ???p?????A?????z???o??????????.<br />";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "?L?k?????Q???s?u????(PASV MODE)?s???? <b>%1\$s</b>.";

// ftp_openconnection2()
$net2ftp_messages["Unable to connect to the second (target) FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the second (target) FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "?????s?????? FTP ???A?? <b>%1\$s</b>, ?s???? <b>%2\$s</b>.<br /><br />???T?w???? FTP ???A???a?}???T. ?j?????P HTTP (web) ???A?????P. ???p?????A?????z???o??????????.<br />";
$net2ftp_messages["Unable to login to the second (target) FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "?????n?J???? FTP ???A?? <b>%1\$s</b> ???????W?? <b>%2\$s</b> ?i?????~.<br /><br />???T?w?????W?????K?X???T. ???p?????A?????z???o??????????.<br />";
$net2ftp_messages["Unable to switch to the passive mode on the second (target) FTP server <b>%1\$s</b>."] = "?L?k?????Q???s?u????(PASV MODE)?s???? <b>%1\$s</b>.";

// ftp_myrename()
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "?L?k?b?????? <b>%2\$s</b> ?????????? <b>%1\$s</b> ???W??";

// ftp_mychmod()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "?L?k?????R?O?? <b>%1\$s</b>. ?`?N: ????(CHMOD) ???O?u?A???? Unix FTP ???A??, ???A???? WINDOWS FTP ???A??.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "?????? <b>%1\$s</b> ???\?????????? <b>%2\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Processing entries within directory <b>%1\$s</b>:";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "???? <b>%1\$s</b> ???\?????????? <b>%2\$s</b>";
$net2ftp_messages["All the selected directories and files have been processed."] = "???????????????????????w?g?B?z.";

// ftp_rmdir2()
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "?L?k?R???????? <b>%1\$s</b>";

// ftp_delete2()
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Unable to delete the file <b>%1\$s</b>";

// ftp_newdirectory()
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "?L?k?????????? <b>%1\$s</b>";

// ftp_readfile()
$net2ftp_messages["Unable to create the temporary file"] = "?L?k???????s????";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "?L?k?q FTP ???A?????o???? <b>%1\$s</b> ???x?s?????s???? <b>%2\$s</b>.<br />?????d?????? %3\$s ?????? .<br />";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "?L?k?}?????s????. ?????d?????? %1\$s ??????.";
$net2ftp_messages["Unable to read the temporary file"] = "?L?k???????s????";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "?L?k???????s???????B?z";
$net2ftp_messages["Unable to delete the temporary file"] = "?L?k?R?????s????";

// ftp_writefile()
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "?L?k???????s????. ?????d?????? %1\$s ??????.";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "?L?k?}?????s????. ?????d?????? %1\$s ??????.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "?L?k?g?J?r???????s???? <b>%1\$s</b>.<br />?????d?????? %2\$s ??????.";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "?L?k???????s???????B?z";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "?L?k?W?????????????? <b>%1\$s</b>.<br />?A?i???S?????v??.";
$net2ftp_messages["Unable to delete the temporary file"] = "?L?k?R?????s????";

// ftp_copymovedelete()
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "?B?z?????? <b>%1\$s</b>";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "?????????? <b>%1\$s</b> ?M?l???????????????? <b>%2\$s</b> ?@??, ???H?N?|???L";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The directory <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "?L?k?????????? <b>%1\$s</b>. ?i???w?s?b. ?~?????s/???????@...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created target subdirectory <b>%1\$s</b>";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "The directory <b>%1\$s</b> could not be selected, so this directory will be skipped";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "?L?k?R???????? <b>%1\$s</b> - ?i????????????";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "?w?R???????? <b>%1\$s</b>";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "?????? <b>%1\$s</b> ???@????";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "?????????? <b>%1\$s</b> ?M?????????@??, ???????N???L";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The file <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "The file <b>%1\$s</b> is too big to be copied, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "The file <b>%1\$s</b> is too big to be moved, aborting the move";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "?L?k???s???? <b>%1\$s</b>";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Unable to move the file <b>%1\$s</b>, aborting the move";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "?w???????? <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Unable to delete the file <b>%1\$s</b>";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "?w?R?????? <b>%1\$s</b>";
$net2ftp_messages["All the selected directories and files have been processed."] = "???????????????????????w?g?B?z.";

// ftp_processfiles()

// ftp_getfile()
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "?L?k???? FTP ???? <b>%2\$s</b> ???s???????? <b>%1\$s</b> ?????a????";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "?L?k?R?????? <b>%1\$s</b>";

// ftp_putfile()
$net2ftp_messages["The file is too big to be transferred"] = "The file is too big to be transferred";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "Daily limit reached: the file <b>%1\$s</b> will not be transferred";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "?L?k???? FTP ???? <b>%2\$s</b> ???s???a???? <b>%1\$s</b> ??????????";
$net2ftp_messages["Unable to delete the local file"] = "?L?k?R?????a????";

// ftp_downloadfile()
$net2ftp_messages["Unable to delete the temporary file"] = "?L?k?R?????s????";
$net2ftp_messages["Unable to send the file to the browser"] = "Unable to send the file to the browser";

// ftp_zip()
$net2ftp_messages["Unable to create the temporary file"] = "?L?k???????s????";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "???Y???? <b>%1\$s</b> ?w?g?b FTP ???A??????";
$net2ftp_messages["Requested files"] = "?Q???D????";

$net2ftp_messages["Dear,"] = "???R??,";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "???H?n?D?????????????e?? email ?b?? (%1\$s).";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "?p?G?A?????H?o???H???????D???????e, ???n?}???????????Y?R?????l??.";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "?`?N: ?p?G?A?S???}??????, ???A???q???O?S???l?`??.";
$net2ftp_messages["Information about the sender: "] = "???e??????: ";
$net2ftp_messages["IP address: "] = "IP ?a?}: ";
$net2ftp_messages["Time of sending: "] = "???e????: ";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "?g ?? net2ftp ?{?????e: ";
$net2ftp_messages["Webmaster's email: "] = "?????q?l: ";
$net2ftp_messages["Message of the sender: "] = "???e?????[?T??: ";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com.";

$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "?????Y?????w?g???e?? <b>%1\$s</b>.";

// acceptFiles()
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "???? <b>%1\$s</b> ???j. ?N???|?Q?W??.";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded.";
$net2ftp_messages["Could not generate a temporary file."] = "?L?k???????s????.";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "???? <b>%1\$s</b> ?L?k????";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "???? <b>%1\$s</b> ?S?????D";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "?L?k?????W?????????????s??????.<br /><br />???????????z?????n <b>chmod 777</b> net2ftp ?? ?????? /temp.";
$net2ftp_messages["You did not provide any file to upload."] = "?A?S???????????W????????.";

// ftp_transferfiles()
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "???? <b>%1\$s</b> ?L?k???e?? FTP ???A??";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "???? <b>%1\$s</b> ?w?g???\???? FTP mode <b>%2\$s</b> ?W???? FTP ???A??. ";
$net2ftp_messages["Transferring files to the FTP server"] = "???e?? FTP ???A??...";

// ftp_unziptransferfiles()
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "?B?z???Y???? nr %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "?????????W????, ???Y???? <b>%1\$s</b> ?????B?z. ?{???q?u???? zip, tar, tgz and gz ????.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Unable to extract the files and directories from the archive";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Archive contains filenames with ../ or ..\\ - aborting the extraction";
$net2ftp_messages["Created directory %1\$s"] = "Created directory %1\$s";
$net2ftp_messages["Could not create directory %1\$s"] = "Could not create directory %1\$s";
$net2ftp_messages["Copied file %1\$s"] = "Copied file %1\$s";
$net2ftp_messages["Could not copy file %1\$s"] = "Could not copy file %1\$s";
$net2ftp_messages["Unable to delete the temporary directory"] = "Unable to delete the temporary directory";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Unable to delete the temporary file %1\$s";

// ftp_mysite()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "?L?k?????R?O?? <b>%1\$s</b>";

// shutdown()
$net2ftp_messages["Your task was stopped"] = "?u?@????";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "?u?@?????W?L?F???w?? %1\$s ??, ???H?u?@????.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "?????????@?U???????????????h.";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "???????u?@?????????p???u?@: ??????????????, ?????????n?????j??????.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "?p?G?A???? net2ftp ?i?B?z?j???u?@, ?i?? net2ftp ?w?????A???q??.";

// SendMail()
$net2ftp_messages["You did not provide any text to send by email!"] = "?A?S???b email ???????????r!";
$net2ftp_messages["You did not supply a From address."] = "?A?S?????? From ?a?}.";
$net2ftp_messages["You did not supply a To address."] = "?A?S?????? To ?a?}.";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "???????N?????D, ?q?l <b>%1\$s</b> ?L?k?e?X.";


// -------------------------------------------------------------------------
// /includes/registerglobals.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Please enter your username and password for FTP server "] = "Please enter your username and password for FTP server ";
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below.";
$net2ftp_messages["Access to the net2ftp Admin panel is disabled, because no password has been set in the file settings.inc.php. Enter a password in that file, and reload this page."] = "Access to the net2ftp Admin panel is disabled, because no password has been set in the file settings.inc.php. Enter a password in that file, and reload this page.";
$net2ftp_messages["Please enter your Admin username and password"] = "Please enter your Admin username and password"; 
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below.";
$net2ftp_messages["Wrong username or password for the net2ftp Admin panel. The username and password can be set in the file settings.inc.php."] = "Wrong username or password for the net2ftp Admin panel. The username and password can be set in the file settings.inc.php.";


// -------------------------------------------------------------------------
// /skins/skins.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Blue"] = "????????";
$net2ftp_messages["Grey"] = "????????";
$net2ftp_messages["Black"] = "????????";
$net2ftp_messages["Yellow"] = "????????";
$net2ftp_messages["Pastel"] = "Pastel";

// getMime()
$net2ftp_messages["Directory"] = "??????";
$net2ftp_messages["Symlink"] = "Symlink";
$net2ftp_messages["ASP script"] = "ASP ????";
$net2ftp_messages["Cascading Style Sheet"] = "CSS ?d??????";
$net2ftp_messages["HTML file"] = "HTML ????";
$net2ftp_messages["Java source file"] = "Java source ????";
$net2ftp_messages["JavaScript file"] = "JavaScript ????";
$net2ftp_messages["PHP Source"] = "PHP source ????";
$net2ftp_messages["PHP script"] = "PHP script ????";
$net2ftp_messages["Text file"] = "???r????";
$net2ftp_messages["Bitmap file"] = "Bitmap ??????";
$net2ftp_messages["GIF file"] = "GIF ??????";
$net2ftp_messages["JPEG file"] = "JPEG ??????";
$net2ftp_messages["PNG file"] = "PNG ??????";
$net2ftp_messages["TIF file"] = "TIF ??????";
$net2ftp_messages["GIMP file"] = "GIMP ??????";
$net2ftp_messages["Executable"] = "?i????????";
$net2ftp_messages["Shell script"] = "Shell script";
$net2ftp_messages["MS Office - Word document"] = "MS Office - Word ????";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - Excel ????";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - PowerPoint ????";
$net2ftp_messages["MS Office - Access database"] = "MS Office - Access ?????w";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - Visio drawing";
$net2ftp_messages["MS Office - Project file"] = "MS Office - Project ????";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - Writer 6.0 ????";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - Writer 6.0 ????????";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - Calc 6.0 ????";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - Calc 6.0 ????????";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - Draw 6.0 ????";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - Draw 6.0 ????????";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - Impress 6.0 ????";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - Impress 6.0 ????????";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - Writer 6.0 global ????";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - Math 6.0 ????";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - StarWriter 5.x ????";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - StarWriter 5.x global ????";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - StarCalc 5.x ????";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - StarDraw 5.x ????";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - StarImpress 5.x ????";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - StarImpress Packed 5.x ????";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - StarMath 5.x ????";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - StarChart 5.x ????";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - StarMail 5.x mail ????";
$net2ftp_messages["Adobe Acrobat document"] = "Adobe Acrobat ????";
$net2ftp_messages["ARC archive"] = "ARC ???Y??";
$net2ftp_messages["ARJ archive"] = "ARJ ???Y??";
$net2ftp_messages["RPM"] = "RPM";
$net2ftp_messages["GZ archive"] = "GZ ???Y??";
$net2ftp_messages["TAR archive"] = "TAR ???Y??";
$net2ftp_messages["Zip archive"] = "Zip ???Y??";
$net2ftp_messages["MOV movie file"] = "MOV ?v????";
$net2ftp_messages["MPEG movie file"] = "MPEG ?v????";
$net2ftp_messages["Real movie file"] = "Real ?v????";
$net2ftp_messages["Quicktime movie file"] = "Quicktime ?v????";
$net2ftp_messages["Shockwave flash file"] = "Shockwave flash ????";
$net2ftp_messages["Shockwave file"] = "Shockwave ????";
$net2ftp_messages["WAV sound file"] = "WAV ??????";
$net2ftp_messages["Font file"] = "Font ????";
$net2ftp_messages["%1\$s File"] = "%1\$s ????";
$net2ftp_messages["File"] = "????";

// getAction()
$net2ftp_messages["Back"] = "Back";
$net2ftp_messages["Submit"] = "Submit";
$net2ftp_messages["Refresh"] = "Refresh";
$net2ftp_messages["Details"] = "Details";
$net2ftp_messages["Icons"] = "Icons";
$net2ftp_messages["List"] = "List";
$net2ftp_messages["Logout"] = "Logout";
$net2ftp_messages["Help"] = "Help";
$net2ftp_messages["Bookmark"] = "Bookmark";
$net2ftp_messages["Save"] = "Save";
$net2ftp_messages["Default"] = "Default";


// -------------------------------------------------------------------------
// /skins/[skin]/footer.template.php and statusbar.template.php
// -------------------------------------------------------------------------
$net2ftp_messages["Help Guide"] = "Help Guide";
$net2ftp_messages["Forums"] = "Forums";
$net2ftp_messages["License"] = "License";
$net2ftp_messages["Powered by"] = "Powered by";
$net2ftp_messages["You are now taken to the net2ftp forums. These forums are for net2ftp related topics only - not for generic webhosting questions."] = "You are now taken to the net2ftp forums. These forums are for net2ftp related topics only - not for generic webhosting questions.";


// -------------------------------------------------------------------------
// Admin module
if ($net2ftp_globals["state"] == "admin") {
// -------------------------------------------------------------------------

// /modules/admin/admin.inc.php
$net2ftp_messages["Admin functions"] = "Admin functions";

// /skins/[skin]/admin1.template.php
$net2ftp_messages["Version information"] = "Version information";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "This version of net2ftp is up-to-date.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server.";
$net2ftp_messages["Logging"] = "Logging";
$net2ftp_messages["Date from:"] = "Date from:";
$net2ftp_messages["to:"] = "to:";
$net2ftp_messages["Empty logs"] = "Empty";
$net2ftp_messages["View logs"] = "View logs";
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Setup MySQL tables"] = "Setup MySQL tables";
$net2ftp_messages["Create the MySQL database tables"] = "Create the MySQL database tables";

} // end admin

// -------------------------------------------------------------------------
// Admin_createtables module
if ($net2ftp_globals["state"] == "admin_createtables") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_createtables.inc.php
$net2ftp_messages["Admin functions"] = "Admin functions";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "The handle of file %1\$s could not be opened.";
$net2ftp_messages["The file %1\$s could not be opened."] = "The file %1\$s could not be opened.";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "The handle of file %1\$s could not be closed.";
$net2ftp_messages["The connection to the server <b>%1\$s</b> could not be set up. Please check the database settings you've entered."] = "The connection to the server <b>%1\$s</b> could not be set up. Please check the database settings you've entered.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Unable to select the database <b>%1\$s</b>.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "The SQL query nr <b>%1\$s</b> could not be executed.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "The SQL query nr <b>%1\$s</b> was executed successfully.";

// /skins/[skin]/admin_createtables1.template.php
$net2ftp_messages["Please enter your MySQL settings:"] = "Please enter your MySQL settings:";
$net2ftp_messages["MySQL username"] = "MySQL username";
$net2ftp_messages["MySQL password"] = "MySQL password";
$net2ftp_messages["MySQL database"] = "MySQL database";
$net2ftp_messages["MySQL server"] = "MySQL server";
$net2ftp_messages["This SQL query is going to be executed:"] = "This SQL query is going to be executed:";
$net2ftp_messages["Execute"] = "????";

// /skins/[skin]/admin_createtables2.template.php
$net2ftp_messages["Settings used:"] = "Settings used:";
$net2ftp_messages["MySQL password length"] = "MySQL password length";
$net2ftp_messages["Results:"] = "Results:";

} // end admin_createtables


// -------------------------------------------------------------------------
// Admin_viewlogs module
if ($net2ftp_globals["state"] == "admin_viewlogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_viewlogs.inc.php
$net2ftp_messages["Admin functions"] = "Admin functions";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Unable to execute the SQL query <b>%1\$s</b>.";
$net2ftp_messages["No data"] = "No data";

} // end admin_viewlogs


// -------------------------------------------------------------------------
// Admin_emptylogs module
if ($net2ftp_globals["state"] == "admin_emptylogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_emptylogs.inc.php
$net2ftp_messages["Admin functions"] = "Admin functions";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "The table <b>%1\$s</b> was emptied successfully.";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "The table <b>%1\$s</b> could not be emptied.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "The table <b>%1\$s</b> was optimized successfully.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "The table <b>%1\$s</b> could not be optimized.";

} // end admin_emptylogs


// -------------------------------------------------------------------------
// Advanced module
if ($net2ftp_globals["state"] == "advanced") {
// -------------------------------------------------------------------------

// /modules/advanced/advanced.inc.php
$net2ftp_messages["Advanced functions"] = "?i???\??";

// /skins/[skin]/advanced1.template.php
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Disabled"] = "Disabled";
$net2ftp_messages["Advanced FTP functions"] = "Advanced FTP functions";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "Send arbitrary FTP commands to the FTP server";
$net2ftp_messages["This function is available on PHP 5 only"] = "This function is available on PHP 5 only";
$net2ftp_messages["Troubleshooting functions"] = "Troubleshooting functions";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "???A???? net2ftp ????????";
$net2ftp_messages["Troubleshoot an FTP server"] = "FTP ???A??????????";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Test the net2ftp list parsing rules";
$net2ftp_messages["Translation functions"] = "Translation functions";
$net2ftp_messages["Introduction to the translation functions"] = "Introduction to the translation functions";
$net2ftp_messages["Extract messages to translate from code files"] = "Extract messages to translate from code files";
$net2ftp_messages["Check if there are new or obsolete messages"] = "Check if there are new or obsolete messages";

$net2ftp_messages["Beta functions"] = "Beta functions";
$net2ftp_messages["Send a site command to the FTP server"] = "Send a site command to the FTP server";
$net2ftp_messages["Apache: password-protect a directory, create custom error pages"] = "Apache: password-protect a directory, create custom error pages";
$net2ftp_messages["MySQL: execute an SQL query"] = "MySQL: execute an SQL query";


// advanced()
$net2ftp_messages["The site command functions are not available on this webserver."] = "???A?????????B???\??.";
$net2ftp_messages["The Apache functions are not available on this webserver."] = "???A?????????? Apache ?\??.";
$net2ftp_messages["The MySQL functions are not available on this webserver."] = "???A?????????? MYSQL ?\??.";
$net2ftp_messages["Unexpected state2 string. Exiting."] = "???i?w?p?????A 2 ?r??. ?{????????...";

} // end advanced


// -------------------------------------------------------------------------
// Advanced_ftpserver module
if ($net2ftp_globals["state"] == "advanced_ftpserver") {
// -------------------------------------------------------------------------

// /modules/advanced_ftpserver/advanced_ftpserver.inc.php
$net2ftp_messages["Troubleshoot an FTP server"] = "FTP ???A??????????";

// /skins/[skin]/advanced_ftpserver1.template.php
$net2ftp_messages["Connection settings:"] = "?s?u?]?w:";
$net2ftp_messages["FTP server"] = "FTP ???A??";
$net2ftp_messages["FTP server port"] = "FTP ???A???s????";
$net2ftp_messages["Username"] = "?????W??";
$net2ftp_messages["Password"] = "?????K?X";
$net2ftp_messages["Password length"] = "?K?X????";
$net2ftp_messages["Passive mode"] = "?Q???s?u(Passive mode)";
$net2ftp_messages["Directory"] = "??????";
$net2ftp_messages["Printing the result"] = "Printing the result";

// /skins/[skin]/advanced_ftpserver2.template.php
$net2ftp_messages["Connecting to the FTP server: "] = "?s?? FTP ???A??: ";
$net2ftp_messages["Logging into the FTP server: "] = "?n?J?? FTP ???A??: ";
$net2ftp_messages["Setting the passive mode: "] = "?]?w?Q???s??????(PASV):";
$net2ftp_messages["Getting the FTP server system type: "] = "Getting the FTP server system type: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "???????????? %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "FTP ???A???????????O: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "???o???l?????????????C??: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "???????o???l?????????????C??: ";
$net2ftp_messages["Closing the connection: "] = "?????s?u: ";
$net2ftp_messages["Raw list of directories and files:"] = "???l?????????????C??:";
$net2ftp_messages["Parsed list of directories and files:"] = "???R?????????????C??:";

$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "not OK";

} // end advanced_ftpserver


// -------------------------------------------------------------------------
// Advanced_parsing module
if ($net2ftp_globals["state"] == "advanced_parsing") {
// -------------------------------------------------------------------------

$net2ftp_messages["Test the net2ftp list parsing rules"] = "Test the net2ftp list parsing rules";
$net2ftp_messages["Sample input"] = "Sample input";
$net2ftp_messages["Parsed output"] = "Parsed output";

} // end advanced_parsing


// -------------------------------------------------------------------------
// Advanced_webserver module
if ($net2ftp_globals["state"] == "advanced_webserver") {
// -------------------------------------------------------------------------

$net2ftp_messages["Troubleshoot your net2ftp installation"] = "net2ftp ?w???{??????????";
$net2ftp_messages["Printing the result"] = "Printing the result";

$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "???d?O?_???T?w???F PHP ?? FTP ????: ";
$net2ftp_messages["yes"] = "?O";
$net2ftp_messages["no - please install it!"] = "?_ - ?????w??!";

$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "???d????????????: ?@???p?????|?g?J /TEMP ???????M???R??.";
$net2ftp_messages["Creating filename: "] = "?????????W??: ";
$net2ftp_messages["OK. Filename: %1\$s"] = "???\\. ?????W??: %tempfilename";
$net2ftp_messages["not OK"] = "not OK";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "????. ?????d %1\$s ????????????";
$net2ftp_messages["Opening the file in write mode: "] = "Opening the file in write mode: ";
$net2ftp_messages["Writing some text to the file: "] = "?g?J???r??: ";
$net2ftp_messages["Closing the file: "] = "????????: ";
$net2ftp_messages["Deleting the file: "] = "?R??????: ";

$net2ftp_messages["Testing the FTP functions"] = "Testing the FTP functions";
$net2ftp_messages["Connecting to a test FTP server: "] = "Connecting to a test FTP server: ";
$net2ftp_messages["Connecting to the FTP server: "] = "?s?? FTP ???A??: ";
$net2ftp_messages["Logging into the FTP server: "] = "?n?J?? FTP ???A??: ";
$net2ftp_messages["Setting the passive mode: "] = "?]?w?Q???s??????(PASV):";
$net2ftp_messages["Getting the FTP server system type: "] = "Getting the FTP server system type: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "???????????? %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "FTP ???A???????????O: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "???o???l?????????????C??: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "???????o???l?????????????C??: ";
$net2ftp_messages["Closing the connection: "] = "?????s?u: ";
$net2ftp_messages["Raw list of directories and files:"] = "???l?????????????C??:";
$net2ftp_messages["Parsed list of directories and files:"] = "???R?????????????C??:";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "not OK";

} // end advanced_webserver


// -------------------------------------------------------------------------
// Bookmark module
if ($net2ftp_globals["state"] == "bookmark") {
// -------------------------------------------------------------------------
$net2ftp_messages["Add this link to your bookmarks:"] = "?[?J???????R:";
$net2ftp_messages["Internet Explorer: right-click on the link and choose \"Add to Favorites...\""] = "Internet Explorer: ?b?s???W???????k???????? \"?[?????????R...\"";
$net2ftp_messages["Netscape, Mozilla, Firefox: right-click on the link and choose \"Bookmark This Link...\""] = "Netscape, Mozilla, Firefox: ?b?s???W???????k???????? \"Bookmark This Link...\"";
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "?`?N: ???A????????????, ?N?|???@???u?X?????????A???K?X.";

} // end bookmark


// -------------------------------------------------------------------------
// Browse module
if ($net2ftp_globals["state"] == "browse") {
// -------------------------------------------------------------------------

// /modules/browse/browse.inc.php
$net2ftp_messages["Choose a directory"] = "????????????";
$net2ftp_messages["Please wait..."] = "???y?J...";

// browse()
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "???????W???]?t \' ?N?L?k???T????. ?u?i?R??. ?????^?????t?@???l??????.";

$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Daily limit reached: you will not be able to transfer data";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "If you need unlimited usage, please install net2ftp on your own web server.";

// printdirfilelist()
// Keep this short, it must fit in a small button!
$net2ftp_messages["New dir"] = "?[?J?s??????";
$net2ftp_messages["New file"] = "?[?J?s????";
$net2ftp_messages["HTML templates"] = "HTML templates";
$net2ftp_messages["Upload"] = "?W??????";
$net2ftp_messages["Java Upload"] = "Java ?W??????";
$net2ftp_messages["Flash Upload"] = "Flash Upload";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Advanced"] = "?i??????";
$net2ftp_messages["Copy"] = "???s";
$net2ftp_messages["Move"] = "????";
$net2ftp_messages["Delete"] = "?R??";
$net2ftp_messages["Rename"] = "???s?R?W";
$net2ftp_messages["Chmod"] = "????(CHOMD)";
$net2ftp_messages["Download"] = "?U??";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Zip"] = "???Y";
$net2ftp_messages["Size"] = "?p???j?p";
$net2ftp_messages["Search"] = "?j??";
$net2ftp_messages["Go to the parent directory"] = "Go to the parent directory";
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Transform selected entries: "] = "???@????: ";
$net2ftp_messages["Transform selected entry: "] = "Transform selected entry: ";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "?b %1\$s ?????@???s?l??????";
$net2ftp_messages["Create a new file in directory %1\$s"] = "?b %1\$s ???????????@???s????";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Create a website easily using ready-made templates";
$net2ftp_messages["Upload new files in directory %1\$s"] = "?b %1\$s ???????W???s????";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload directories and files using a Java applet";
$net2ftp_messages["Upload files using a Flash applet"] = "Upload files using a Flash applet";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Install software packages (requires PHP on web server)";
$net2ftp_messages["Go to the advanced functions"] = "?????i???\??";
$net2ftp_messages["Copy the selected entries"] = "???s??????????????????";
$net2ftp_messages["Move the selected entries"] = "??????????????????????";
$net2ftp_messages["Delete the selected entries"] = "?R????????????????????";
$net2ftp_messages["Rename the selected entries"] = "???s?R?W??????????????????";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "???????????????????????????? (?u?A???? Unix/Linux/BSD ???A??)";
$net2ftp_messages["Download a zip file containing all selected entries"] = "???Y?U????????????????????";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Unzip the selected archives on the FTP server";
$net2ftp_messages["Zip the selected entries to save or email them"] = "???Y???????????????????@?x?s?????e?l??";
$net2ftp_messages["Calculate the size of the selected entries"] = "?p???????????????????????j?p";
$net2ftp_messages["Find files which contain a particular word"] = "?????????r?j??????";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "%1\$s ???????C";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "%1\$s ???????C";
$net2ftp_messages["Ascending order"] = "???????C";
$net2ftp_messages["Descending order"] = "???????C";
$net2ftp_messages["Upload files"] = "Upload files";
$net2ftp_messages["Up"] = "?W????????";
$net2ftp_messages["Click to check or uncheck all rows"] = "Click to check or uncheck all rows";
$net2ftp_messages["All"] = "All";
$net2ftp_messages["Name"] = "?W??";
$net2ftp_messages["Type"] = "????";
//$net2ftp_messages["Size"] = "Size";
$net2ftp_messages["Owner"] = "??????";
$net2ftp_messages["Group"] = "?s??";
$net2ftp_messages["Perms"] = "????";
$net2ftp_messages["Mod Time"] = "????????????";
$net2ftp_messages["Actions"] = "???@";
$net2ftp_messages["Select the directory %1\$s"] = "Select the directory %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "Select the file %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "Select the symlink %1\$s";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Go to the subdirectory %1\$s";
$net2ftp_messages["Download the file %1\$s"] = "Download the file %1\$s";
$net2ftp_messages["Follow symlink %1\$s"] = "Follow symlink %1\$s";
$net2ftp_messages["View"] = "?d??";
$net2ftp_messages["Edit"] = "?s??";
$net2ftp_messages["Update"] = "???s";
$net2ftp_messages["Open"] = "?}??";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "???G???? %1\$s ?????????l?X";
$net2ftp_messages["Edit the source code of file %1\$s"] = "?s?? %1\$s ?????????l?X";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "?W?????s?????? %1\$s ???X??????";
$net2ftp_messages["View image %1\$s"] = "?d?????? %1\$s";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "?q HTTP ???A???d?????? %1\$s";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(?`?N: ?p?G?A?S?????v?????W, ???s???i?????~.)";
$net2ftp_messages["This folder is empty"] = "?????????O????";

// printSeparatorRow()
$net2ftp_messages["Directories"] = "??????";
$net2ftp_messages["Files"] = "????";
$net2ftp_messages["Symlinks"] = "?s??";
$net2ftp_messages["Unrecognized FTP output"] = "?L?k?T?{?? FTP ???X";
$net2ftp_messages["Number"] = "Number";
$net2ftp_messages["Size"] = "?p???j?p";
$net2ftp_messages["Skipped"] = "Skipped";
$net2ftp_messages["Data transferred from this IP address today"] = "Data transferred from this IP address today";
$net2ftp_messages["Data transferred to this FTP server today"] = "Data transferred to this FTP server today";

// printLocationActions()
$net2ftp_messages["Language:"] = "?y??:";
$net2ftp_messages["Skin:"] = "????:";
$net2ftp_messages["View mode:"] = "????????:";
$net2ftp_messages["Directory Tree"] = "?????????m";

// ftp2http()
$net2ftp_messages["Execute %1\$s in a new window"] = "?b?s?????}?? %1\$s";
$net2ftp_messages["This file is not accessible from the web"] = "This file is not accessible from the web";

// printDirectorySelect()
$net2ftp_messages["Double-click to go to a subdirectory:"] = "?????????i?J?l??????:";
$net2ftp_messages["Choose"] = "????";
$net2ftp_messages["Up"] = "?W????????";

} // end browse


// -------------------------------------------------------------------------
// Calculate size module
if ($net2ftp_globals["state"] == "calculatesize") {
// -------------------------------------------------------------------------
$net2ftp_messages["Size of selected directories and files"] = "???????????????????j?p";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "???????????????????`?j?p??:";
$net2ftp_messages["The number of files which were skipped is:"] = "The number of files which were skipped is:";

} // end calculatesize


// -------------------------------------------------------------------------
// Chmod module
if ($net2ftp_globals["state"] == "chmod") {
// -------------------------------------------------------------------------
$net2ftp_messages["Chmod directories and files"] = "??????????????????????";
$net2ftp_messages["Set all permissions"] = "?????v??";
$net2ftp_messages["Read"] = "????";
$net2ftp_messages["Write"] = "?g?J";
$net2ftp_messages["Execute"] = "????";
$net2ftp_messages["Owner"] = "??????";
$net2ftp_messages["Group"] = "?s??";
$net2ftp_messages["Everyone"] = "?????H";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "?p?n?]?w?????v???@??, ?b?W?????J?v?????? \"?????v??\"";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "?]?w?????? <b>%1\$s</b> ????????: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "?]?w???? <b>%1\$s</b> ????????: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "?]?w symlink <b>%1\$s</b> ????????: ";
$net2ftp_messages["Chmod value"] = "Chmod ????";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "???]?w???????????t???????l??????";
$net2ftp_messages["Chmod also the files within this directory"] = "???]?w???????????t??????????";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "???????? <b>%1\$s</b> ?????b 0-777 ????.";

} // end chmod


// -------------------------------------------------------------------------
// Clear cookies module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// Copy/Move/Delete module
if ($net2ftp_globals["state"] == "copymovedelete") {
// -------------------------------------------------------------------------
$net2ftp_messages["Choose a directory"] = "????????????";
$net2ftp_messages["Copy directories and files"] = "???s????????????";
$net2ftp_messages["Move directories and files"] = "????????????????";
$net2ftp_messages["Delete directories and files"] = "?R??????????????";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "?O?_?T?w?n?R?????????????????????";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "???????t???l???????????????|?@???R??!";
$net2ftp_messages["Set all targetdirectories"] = "?]?w?@?P??????????";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "?]?w?@?P????????????, ???b?W???????r?????g???????????W?????? \"?]?w?@?P??????????\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "?`?N: ???s?????e, ???T?w???????????????s?b.";
$net2ftp_messages["Different target FTP server:"] = "???? FTP ???A??:";
$net2ftp_messages["Username"] = "?????W??";
$net2ftp_messages["Password"] = "?????K?X";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "?p?G???s?????? FTP ???A??, ???????g.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "?p?G?A???????s???????t?@?? FTP ???A??, ?????g?n?J????.";
$net2ftp_messages["Leave empty if you want to move the files to the same FTP server."] = "?p?G?????????? FTP ???A??, ???????g.";
$net2ftp_messages["If you want to move the files to another FTP server, enter your login data."] = "?p?G?A???????????????t?@?? FTP ???A??, ?????g?n?J????.";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "???s?????? <b>%1\$s</b> ??:";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "?????????? <b>%1\$s</b> ??:";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "?????? <b>%1\$s</b>";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "???s???? <b>%1\$s</b> ??:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "???????? <b>%1\$s</b> ??:";
$net2ftp_messages["File <b>%1\$s</b>"] = "???? <b>%1\$s</b>";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "???s symlink <b>%1\$s</b> ??:";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "???? symlink <b>%1\$s</b> ??:";
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Symlink <b>%1\$s</b>";
$net2ftp_messages["Target directory:"] = "??????????:";
$net2ftp_messages["Target name:"] = "?????W??:";
$net2ftp_messages["Processing the entries:"] = "?B?z????:";

} // end copymovedelete


// -------------------------------------------------------------------------
// Download file module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// EasyWebsite module
if ($net2ftp_globals["state"] == "easyWebsite") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create a website in 4 easy steps"] = "Create a website in 4 easy steps";
$net2ftp_messages["Template overview"] = "Template overview";
$net2ftp_messages["Template details"] = "Template details";
$net2ftp_messages["Files are copied"] = "Files are copied";
$net2ftp_messages["Edit your pages"] = "Edit your pages";

// Screen 1 - printTemplateOverview
$net2ftp_messages["Click on the image to view the details of a template."] = "Click on the image to view the details of a template.";
$net2ftp_messages["Back to the Browse screen"] = "Back to the Browse screen";
$net2ftp_messages["Template"] = "Template";
$net2ftp_messages["Copyright"] = "Copyright";
$net2ftp_messages["Click on the image to view the details of this template"] = "Click on the image to view the details of this template";

// Screen 2 - printTemplateDetails
$net2ftp_messages["The template files will be copied to your FTP server. Existing files with the same filename will be overwritten. Do you want to continue?"] = "The template files will be copied to your FTP server. Existing files with the same filename will be overwritten. Do you want to continue?";
$net2ftp_messages["Install template to directory: "] = "Install template to directory: ";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Size"] = "?p???j?p";
$net2ftp_messages["Preview page"] = "Preview page";
$net2ftp_messages["opens in a new window"] = "opens in a new window";

// Screen 3
$net2ftp_messages["Please wait while the template files are being transferred to your server: "] = "Please wait while the template files are being transferred to your server: ";
$net2ftp_messages["Done."] = "Done.";
$net2ftp_messages["Continue"] = "Continue";

// Screen 4 - printEasyAdminPanel
$net2ftp_messages["Edit page"] = "Edit page";
$net2ftp_messages["Browse the FTP server"] = "Browse the FTP server";
$net2ftp_messages["Add this link to your favorites to return to this page later on!"] = "Add this link to your favorites to return to this page later on!";
$net2ftp_messages["Edit website at %1\$s"] = "Edit website at %1\$s";
$net2ftp_messages["Internet Explorer: right-click on the link and choose \"Add to Favorites...\""] = "Internet Explorer: ?b?s???W???????k???????? \"?[?????????R...\"";
$net2ftp_messages["Netscape, Mozilla, Firefox: right-click on the link and choose \"Bookmark This Link...\""] = "Netscape, Mozilla, Firefox: ?b?s???W???????k???????? \"Bookmark This Link...\"";

// ftp_copy_local2ftp
$net2ftp_messages["WARNING: Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing..."] = "WARNING: Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created target subdirectory <b>%1\$s</b>";
$net2ftp_messages["WARNING: Unable to copy the file <b>%1\$s</b>. Continuing..."] = "WARNING: Unable to copy the file <b>%1\$s</b>. Continuing...";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
}


// -------------------------------------------------------------------------
// Edit module
if ($net2ftp_globals["state"] == "edit") {
// -------------------------------------------------------------------------

// /modules/edit/edit.inc.php
$net2ftp_messages["Unable to open the template file"] = "?L?k?}??????????";
$net2ftp_messages["Unable to read the template file"] = "?L?k????????????";
$net2ftp_messages["Please specify a filename"] = "?????w?????W??";
$net2ftp_messages["Status: This file has not yet been saved"] = "???A: ???????????x?s";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "???A: ?? <b>%1\$s</b> ???? %2\$s ?????x?s";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "???A: <b>???????L?k?x?s</b>";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";

// /skins/[skin]/edit.template.php
$net2ftp_messages["Directory: "] = "??????: ";
$net2ftp_messages["File: "] = "?????W??: ";
$net2ftp_messages["New file name: "] = "?s?????W??: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Note: changing the textarea type will save the changes"] = "?`?N: ???????r?????|?x?s????";
$net2ftp_messages["Copy up"] = "Copy up";
$net2ftp_messages["Copy down"] = "Copy down";

} // end if edit


// -------------------------------------------------------------------------
// Find string module
if ($net2ftp_globals["state"] == "findstring") {
// -------------------------------------------------------------------------

// /modules/findstring/findstring.inc.php 
$net2ftp_messages["Search directories and files"] = "?j??????????????";
$net2ftp_messages["Search again"] = "???s?j??";
$net2ftp_messages["Search results"] = "?j?????G";
$net2ftp_messages["Please enter a valid search word or phrase."] = "?????J???T???????r????.";
$net2ftp_messages["Please enter a valid filename."] = "?????J???T???????W??.";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "???b \"from\" ???r?????J???T???????j?p, ???p 0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "???b \"to\" ???r?????J???T???????j?p, ???p 500000.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "???b \"from\" ???r?????J???T?????????? Y-m-d.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "???b \"to\" ???r?????J???T?????????? Y-m-d.";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "?b????????????????????, ?????r <b>%1\$s</b> ?S????????????????.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "?????r <b>%1\$s</b> ?Q?????b:";

// /skins/[skin]/findstring1.template.php
$net2ftp_messages["Search for a word or phrase"] = "?j???r????";
$net2ftp_messages["Case sensitive search"] = "?????j?p?g?j??";
$net2ftp_messages["Restrict the search to:"] = "?????j????:";
$net2ftp_messages["files with a filename like"] = "?????W????";
$net2ftp_messages["(wildcard character is *)"] = "(wildcard ???r?O *)";
$net2ftp_messages["files with a size"] = "?????j?p";
$net2ftp_messages["files which were last modified"] = "??????????????";
$net2ftp_messages["from"] = "?q";
$net2ftp_messages["to"] = "??";

$net2ftp_messages["Directory"] = "??????";
$net2ftp_messages["File"] = "????";
$net2ftp_messages["Line"] = "Line";
$net2ftp_messages["Action"] = "Action";
$net2ftp_messages["View"] = "?d??";
$net2ftp_messages["Edit"] = "?s??";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "???G???? %1\$s ?????????l?X";
$net2ftp_messages["Edit the source code of file %1\$s"] = "?s?? %1\$s ?????????l?X";

} // end findstring


// -------------------------------------------------------------------------
// Help module
// -------------------------------------------------------------------------
// No messages yet


// -------------------------------------------------------------------------
// Install size module
if ($net2ftp_globals["state"] == "install") {
// -------------------------------------------------------------------------

// /modules/install/install.inc.php
$net2ftp_messages["Install software packages"] = "Install software packages";
$net2ftp_messages["Unable to open the template file"] = "?L?k?}??????????";
$net2ftp_messages["Unable to read the template file"] = "?L?k????????????";
$net2ftp_messages["Unable to get the list of packages"] = "Unable to get the list of packages";

// /skins/blue/install1.template.php
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "The net2ftp installer script has been copied to the FTP server.";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "This script runs on your web server and requires PHP to be installed.";
$net2ftp_messages["In order to run it, click on the link below."] = "In order to run it, click on the link below.";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp has tried to determine the directory mapping between the FTP server and the web server.";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "Should this link not be correct, enter the URL manually in your web browser.";

} // end install


// -------------------------------------------------------------------------
// Java upload module
if ($net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload directories and files using a Java applet";
$net2ftp_messages["Number of files:"] = "Number of files:";
$net2ftp_messages["Size of files:"] = "Size of files:";
$net2ftp_messages["Add"] = "Add";
$net2ftp_messages["Remove"] = "Remove";
$net2ftp_messages["Upload"] = "?W??????";
$net2ftp_messages["Add files to the upload queue"] = "Add files to the upload queue";
$net2ftp_messages["Remove files from the upload queue"] = "Remove files from the upload queue";
$net2ftp_messages["Upload the files which are in the upload queue"] = "Upload the files which are in the upload queue";
$net2ftp_messages["Maximum server space exceeded. Please select less/smaller files."] = "Maximum server space exceeded. Please select less/smaller files.";
$net2ftp_messages["Total size of the files is too big. Please select less/smaller files."] = "Total size of the files is too big. Please select less/smaller files.";
$net2ftp_messages["Total number of files is too high. Please select fewer files."] = "Total number of files is too high. Please select fewer files.";
$net2ftp_messages["Note: to use this applet, Sun's Java plugin must be installed (version 1.4 or newer)."] = "Note: to use this applet, Sun's Java plugin must be installed (version 1.4 or newer).";

} // end jupload



// -------------------------------------------------------------------------
// Login module
if ($net2ftp_globals["state"] == "login") {
// -------------------------------------------------------------------------
$net2ftp_messages["Login!"] = "Login!";
$net2ftp_messages["Once you are logged in, you will be able to:"] = "Once you are logged in, you will be able to:";
$net2ftp_messages["Navigate the FTP server"] = "Navigate the FTP server";
$net2ftp_messages["Once you have logged in, you can browse from directory to directory and see all the subdirectories and files."] = "Once you have logged in, you can browse from directory to directory and see all the subdirectories and files.";
$net2ftp_messages["Upload files"] = "Upload files";
$net2ftp_messages["There are 3 different ways to upload files: the standard upload form, the upload-and-unzip functionality, and the Java Applet."] = "There are 3 different ways to upload files: the standard upload form, the upload-and-unzip functionality, and the Java Applet.";
$net2ftp_messages["Download files"] = "Download files";
$net2ftp_messages["Click on a filename to quickly download one file.<br />Select multiple files and click on Download; the selected files will be downloaded in a zip archive."] = "Click on a filename to quickly download one file.<br />Select multiple files and click on Download; the selected files will be downloaded in a zip archive.";
$net2ftp_messages["Zip files"] = "Zip files";
$net2ftp_messages["... and save the zip archive on the FTP server, or email it to someone."] = "... and save the zip archive on the FTP server, or email it to someone.";
$net2ftp_messages["Unzip files"] = "Unzip files";
$net2ftp_messages["Different formats are supported: .zip, .tar, .tgz and .gz."] = "Different formats are supported: .zip, .tar, .tgz and .gz.";
$net2ftp_messages["Install software"] = "Install software";
$net2ftp_messages["Choose from a list of popular applications (PHP required)."] = "Choose from a list of popular applications (PHP required).";
$net2ftp_messages["Copy, move and delete"] = "Copy, move and delete";
$net2ftp_messages["Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted."] = "Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted.";
$net2ftp_messages["Copy or move to a 2nd FTP server"] = "Copy or move to a 2nd FTP server";
$net2ftp_messages["Handy to import files to your FTP server, or to export files from your FTP server to another FTP server."] = "Handy to import files to your FTP server, or to export files from your FTP server to another FTP server.";
$net2ftp_messages["Rename and chmod"] = "Rename and chmod";
$net2ftp_messages["Chmod handles directories recursively."] = "Chmod handles directories recursively.";
$net2ftp_messages["View code with syntax highlighting"] = "View code with syntax highlighting";
$net2ftp_messages["PHP functions are linked to the documentation on php.net."] = "PHP functions are linked to the documentation on php.net.";
$net2ftp_messages["Plain text editor"] = "Plain text editor";
$net2ftp_messages["Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server."] = "Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server.";
$net2ftp_messages["HTML editors"] = "HTML editors";
$net2ftp_messages["Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from."] = "Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from.";
$net2ftp_messages["Code editor"] = "Code editor";
$net2ftp_messages["Edit HTML and PHP in an editor with syntax highlighting."] = "Edit HTML and PHP in an editor with syntax highlighting.";
$net2ftp_messages["Search for words or phrases"] = "Search for words or phrases";
$net2ftp_messages["Filter out files based on the filename, last modification time and filesize."] = "Filter out files based on the filename, last modification time and filesize.";
$net2ftp_messages["Calculate size"] = "Calculate size";
$net2ftp_messages["Calculate the size of directories and files."] = "Calculate the size of directories and files.";

$net2ftp_messages["FTP server"] = "FTP ???A??";
$net2ftp_messages["Example"] = "?d??";
$net2ftp_messages["Port"] = "Port";
$net2ftp_messages["Username"] = "?????W??";
$net2ftp_messages["Password"] = "?????K?X";
$net2ftp_messages["Anonymous"] = "Anonymous";
$net2ftp_messages["Passive mode"] = "?Q???s?u(Passive mode)";
$net2ftp_messages["Initial directory"] = "?i?J??????";
$net2ftp_messages["Language"] = "?y??";
$net2ftp_messages["Skin"] = "????";
$net2ftp_messages["FTP mode"] = "FTP mode";
$net2ftp_messages["Automatic"] = "Automatic";
$net2ftp_messages["Login"] = "?n?J";
$net2ftp_messages["Clear cookies"] = "?M?? Cookies";
$net2ftp_messages["Admin"] = "Admin";
$net2ftp_messages["Please enter an FTP server."] = "Please enter an FTP server.";
$net2ftp_messages["Please enter a username."] = "Please enter a username.";
$net2ftp_messages["Please enter a password."] = "Please enter a password.";

} // end login


// -------------------------------------------------------------------------
// Login module
if ($net2ftp_globals["state"] == "login_small") {
// -------------------------------------------------------------------------

$net2ftp_messages["Please enter your Administrator username and password."] = "Please enter your Administrator username and password.";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Please enter your username and password for FTP server <b>%1\$s</b>.";
$net2ftp_messages["Username"] = "?????W??";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Password"] = "?????K?X";
$net2ftp_messages["Login"] = "?n?J";
$net2ftp_messages["Continue"] = "Continue";

} // end login_small


// -------------------------------------------------------------------------
// Logout module
if ($net2ftp_globals["state"] == "logout") {
// -------------------------------------------------------------------------

// logout.inc.php
$net2ftp_messages["Login page"] = "Login page";

// logout.template.php
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "Note: other users of this computer could click on the browser's Back button and access the FTP server.";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "To prevent this, you must close all browser windows.";
$net2ftp_messages["Close"] = "Close";
$net2ftp_messages["Click here to close this window"] = "Click here to close this window";

} // end logout


// -------------------------------------------------------------------------
// New directory module
if ($net2ftp_globals["state"] == "newdir") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create new directories"] = "?????s??????";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "?s???????N?|?????b <b>%1\$s</b>.";
$net2ftp_messages["New directory name:"] = "?s???????W??:";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "?????? <b>%1\$s</b> ?w?g???\????.";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Directory <b>%1\$s</b> could not be created.";

} // end newdir


// -------------------------------------------------------------------------
// Raw module
if ($net2ftp_globals["state"] == "raw") {
// -------------------------------------------------------------------------

// /modules/raw/raw.inc.php
$net2ftp_messages["Send arbitrary FTP commands"] = "Send arbitrary FTP commands";


// /skins/[skin]/raw1.template.php
$net2ftp_messages["List of commands:"] = "List of commands:";
$net2ftp_messages["FTP server response:"] = "FTP server response:";

} // end raw


// -------------------------------------------------------------------------
// Rename module
if ($net2ftp_globals["state"] == "rename") {
// -------------------------------------------------------------------------
$net2ftp_messages["Rename directories and files"] = "???s?R?W????????????";
$net2ftp_messages["Old name: "] = "???W??: ";
$net2ftp_messages["New name: "] = "?s?W??: ";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "?s?W?????i?]?t???? <b>\".\"</b>?r?? ?????J?L?k???s?R?W?? <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> ?w?g???\???s?R?W?? <b>%2\$s</b>";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> could not be renamed to <b>%2\$s</b>";

} // end rename


// -------------------------------------------------------------------------
// Unzip module
if ($net2ftp_globals["state"] == "unzip") {
// -------------------------------------------------------------------------

// /modules/unzip/unzip.inc.php
$net2ftp_messages["Unzip archives"] = "Unzip archives";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Getting archive %1\$s of %2\$s from the FTP server";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Unable to get the archive <b>%1\$s</b> from the FTP server";

// /skins/[skin]/unzip1.template.php
$net2ftp_messages["Set all targetdirectories"] = "?]?w?@?P??????????";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "?]?w?@?P????????????, ???b?W???????r?????g???????????W?????? \"?]?w?@?P??????????\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "?`?N: ???s?????e, ???T?w???????????????s?b.";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Unzip archive <b>%1\$s</b> to:";
$net2ftp_messages["Target directory:"] = "??????????:";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "???????????W?? (?????????l??????)";

} // end unzip


// -------------------------------------------------------------------------
// Update file module
if ($net2ftp_globals["state"] == "updatefile") {
// -------------------------------------------------------------------------
$net2ftp_messages["Update file"] = "Update file";
$net2ftp_messages["<b>WARNING: THIS FUNCTION IS STILL IN EARLY DEVELOPMENT. USE IT ONLY ON TEST FILES! YOU HAVE BEEN WARNED!"] = "<b>?`?N: ???\???|?b???????q. ?u?????b??????????!";
$net2ftp_messages["Known bugs: - erases tab characters - doesn't work well with big files (> 50kB) - was not tested yet on files containing non-standard characters</b>"] = "?w?? bugs: - erases tab characters - ???????T?b???n?j???????B?@ (> 50kB) - ?????b?t?????????r????????????</b>";
$net2ftp_messages["This function allows you to upload a new version of the selected file, to view what are the changes and to accept or reject each change. Before anything is saved, you can edit the merged files."] = "???\???e?\?A?W?????s??????????, ?d?????????????????\?A???????????C?@??????. ?x?s?e, ?A?i?H???s???X???F??????.";
$net2ftp_messages["Old file:"] = "??????:";
$net2ftp_messages["New file:"] = "?s????:";
$net2ftp_messages["Restrictions:"] = "????:";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s kB</b> and by PHP to <b>%2\$s</b>"] = "net2ftp ?e?\???j???????????n?? <b>%1\$s kB</b>, PHP ?e?\???j???????????n?? <b>%2\$s</b>";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "???j?e?\???@?????? <b>%1\$s ??</b>";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "FTP???e???? (ASCII ?? BINARY) ?N?|?????????W????????";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "?p?G?????????s?b, ?N?|?Q???\\";
$net2ftp_messages["You did not provide any files or archives to upload."] = "?A?S?????????n?W?????????????Y????.";
$net2ftp_messages["Unable to delete the new file"] = "?L?k?R???s????";

// printComparisonSelect()
$net2ftp_messages["Please wait..."] = "???y?J...";
$net2ftp_messages["Select lines below, accept or reject changes and submit the form."] = "?????U???????C, ????????????????????????.";

} // end updatefile


// -------------------------------------------------------------------------
// Upload module
if ($net2ftp_globals["state"] == "upload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload to directory:"] = "?W??????????:";
$net2ftp_messages["Files"] = "????";
$net2ftp_messages["Archives"] = "Archives";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "?b?o?????J???????N?|???e?? FTP ???A??.";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "?b?o?????J?????Y?????N?|?Q???????B?????t?????????e?? FTP ???A??.";
$net2ftp_messages["Add another"] = "?[?J???L";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "???????????W?? (?????????l??????)";

$net2ftp_messages["Choose a directory"] = "????????????";
$net2ftp_messages["Please wait..."] = "???y?J...";
$net2ftp_messages["Uploading... please wait..."] = "?W????... ???y?J...";
$net2ftp_messages["If the upload takes more than the allowed <b>%1\$s seconds<\/b>, you will have to try again with less/smaller files."] = "?p?G?W???????W?L <b>%1\$s ??<\/b>, ?A???n?????W?????????q???W?????n??????????.";
$net2ftp_messages["This window will close automatically in a few seconds."] = "???????N????????????????.";
$net2ftp_messages["Close window now"] = "???Y????????";

$net2ftp_messages["Upload files and archives"] = "?W???????????Y????";
$net2ftp_messages["Upload results"] = "?W?????G";
$net2ftp_messages["Checking files:"] = "???d????:";
$net2ftp_messages["Transferring files to the FTP server:"] = "???e?? FTP ???A????????:";
$net2ftp_messages["Decompressing archives and transferring files to the FTP server:"] = "?????????e?? FTP ???A????????:";
$net2ftp_messages["Upload more files and archives"] = "?W?????h?????????Y????";

} // end upload


// -------------------------------------------------------------------------
// Messages which are shared by upload and jupload
if ($net2ftp_globals["state"] == "upload" || $net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Restrictions:"] = "????:";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s kB</b> and by PHP to <b>%2\$s</b>"] = "net2ftp ?e?\???j???????????n?? <b>%1\$s kB</b>, PHP ?e?\???j???????????n?? <b>%2\$s</b>";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "???j?e?\???@?????? <b>%1\$s ??</b>";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "FTP???e???? (ASCII ?? BINARY) ?N?|?????????W????????";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "?p?G?????????s?b, ?N?|?Q???\\";

} // end upload or jupload


// -------------------------------------------------------------------------
// View module
if ($net2ftp_globals["state"] == "view") {
// -------------------------------------------------------------------------

// /modules/view/view.inc.php
$net2ftp_messages["View file %1\$s"] = "View file %1\$s";
$net2ftp_messages["View image %1\$s"] = "?d?????? %1\$s";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "View Macromedia ShockWave Flash movie %1\$s";
$net2ftp_messages["Image"] = "Image";

// /skins/[skin]/view1.template.php
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://geshi.org\">GeSHi</a>"] = "Syntax highlighting powered by <a href=\"http://geshi.org\">GeSHi</a>";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "To save the image, right-click on it and choose 'Save picture as...'";

} // end view


// -------------------------------------------------------------------------
// Zip module
if ($net2ftp_globals["state"] == "zip") {
// -------------------------------------------------------------------------

// /modules/zip/zip.inc.php
$net2ftp_messages["Zip entries"] = "???Y????";

// /skins/[skin]/zip1.template.php
$net2ftp_messages["Save the zip file on the FTP server as:"] = "?b FTP ???A???W?x?s???Y??????:";
$net2ftp_messages["Email the zip file in attachment to:"] = "?q?l???Y????????????:";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "?`?N: ???e?????|?O???A?? IP ?a?}?M?????????o???????@???e?X.";
$net2ftp_messages["Some additional comments to add in the email:"] = "???e?q?l???[?T??:";

$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "?A?S?????J???Y???????W??. ?????^?????J.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "???q?l?a?} (%1\$s) ?????????T.<br />???????????? <b>username@domain.com</b>";

} // end zip

?>