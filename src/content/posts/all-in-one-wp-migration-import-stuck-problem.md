---
title: "[Solved] All-in-One WP Migration import stuck problem"
description: "All-in-One WP Migration import stuck at 0% is a very common problem. It happens, over and over again. Whenever you decide to migrate a WordPress Testing Website"
pubDate: 2019-05-16T22:48:43.000Z
tags: ["All-in-One WP Migration Plugin", "Import stuck at 0%", "WordPress Plugin Issue"]
draft: false
---

All-in-One WP Migration import stuck at 0% is a very common problem. It happens, over and over again. Whenever you decide to migrate a WordPress Testing Website to the production, you decide to use <a href="https://wordpress.org/plugins/all-in-one-wp-migration/">All-in-One WP Migration Plugin</a> - one of the most used Migration Plugin for WordPress - to "Export" a .wpress file, and "Import" it from the Production WordPress Installation.

<img class="alignnone size-full wp-image-333" src="https://www.elharony.com/wp-content/uploads/2019/05/All-in-One-WP-Migration-Import-Stuck-at-0.png" alt="" width="539" height="230" />

Although the Internet Connection is good, and it's a fairly new WordPress Installation without any installed plugins, the import might be stuck at 0% or 100% or any other number, and it's a very common problem with that plugin.

I am not sure why the plugin developers didn't address/fix it until now, but here's how I solved it:
<h2>I used "backups" instead of "import"</h2>
"All-in-One WP Migration" plugin has 3 options;
<ul>
 	<li>Export</li>
 	<li>Import</li>
 	<li>Backups</li>
</ul>
Stop trying to import your .wpress file using the "Import" option, let's use the "Backups" instead, by following these steps:
<h3>1) "Export" your .wpress file</h3>
First of all, make sure to use the "Export" option to have a .wpress file available locally
<h3>2) Login to FTP</h3>
Using <a href="https://filezilla-project.org/">FileZilla</a> or any other File Transfer Protocol Software to access the Hosting Files of your Production Website.
<h3>3) Upload your .wpress to the "backup" directory</h3>
Go to the "backup" directory of the All-in-One WP Migration Plugin; <strong>wp-content/ai1wm-backups/</strong>
<h3>4) Restore it</h3>
Now, go to your WordPress <strong>Dashboard > All-inOne WP Migration > Backups</strong>, and you will find the uploaded .wpress available there... Click on the "Restore" option!

<img class="alignnone size-full wp-image-335" src="https://www.elharony.com/wp-content/uploads/2019/05/All-in-One-WP-Migration-Backups.png" alt="All-in-One WP Migration - Backups" width="1028" height="244" />

After a while, you will get this lifesaver popup... Click on "Proceed" to continue:

<img class="alignnone size-full wp-image-334" src="https://www.elharony.com/wp-content/uploads/2019/05/All-in-One-WP-Migration-Proceed.png" alt="All-in-One WP Migration - Proceed" width="502" height="214" />

A few seconds/minutes later, everything is done!

<img class="alignnone size-full wp-image-336" src="https://www.elharony.com/wp-content/uploads/2019/05/All-in-One-WP-Migration-Your-data-has-been-imported-successfully.png" alt="Your data has been imported successfully" width="503" height="209" />
<h2>Restoring a backup is available via Unlimited extension!</h2>
In case you've updated your All-in-one WP Migration Plugin, or even you installed it recently, you won't be able to use the solution above, and you will get this annoying popup:

<img class="alignnone size-full wp-image-400" src="https://www.elharony.com/wp-content/uploads/2019/05/All-in-One-WP-Migration-Restore-functionality-has-been-moved-to-a-paid-extension.png" alt="Restore functionality has been moved to a paid extension" width="500" height="190" />

To fix it, you need to use a previous (a little bit older) version of the plugin, let's do it together:
<ul>
 	<li>Deactivate & Uninstall your current version of the plugin</li>
 	<li>Download the older version of <a href="http://elharony.com/files/all-in-one-wp-migration.6.77.zip">All-in-one WP Migration Plugin V6.77</a>, and unzip it</li>
 	<li>Upload the unzipped directory via <code>FTP</code> to <code>wp-content/plugins</code></li>
 	<li>Go to your WordPress <code>Dashboard > Plugins > Installed Plugins</code></li>
 	<li>You will find the plugin there, but it's not activated, so you need to activate it first</li>
 	<li>Apply the solution we mentioned above, and it will works perfectly fine!</li>
</ul>
---

Have a question? Don't hesitate to write a comment below!