---
title: "[SOLVED] Error on line 1 at column 7 XML declaration allowed only"
description: "If you're encountering the \"Error on line 1 at column 7: XML declaration allowed only\" error, you're likely dealing with a problem in your XML document's format"
pubDate: 2023-01-29T02:50:03.000Z
tags: ["Error on line 1 at column 7 XML declaration allowed only at the start of the document", "RankMath Sitemap Issue", "WordPress Sitemap Error"]
draft: false
---

If you're encountering the "Error on line 1 at column 7: XML declaration allowed only" error, you're likely dealing with a problem in your XML document's formatting. This issue can be caused by a number of factors, but typically <strong>it's the result of extra space or character before the XML declaration at the top of the file.</strong> In this post, we'll explore some of the common causes of this error and provide a solution to help you fix it and get your XML document working properly.

<img class="alignnone wp-image-890 size-full" src="https://www.elharony.com/wp-content/uploads/2023/01/SOLVED-error-on-line-1-at-column-7-XML-declaration-allowed-only-at-the-start-of-the-document-elharony.com_.png" alt="Error on line 1 at column 7 XML declaration allowed only at the start of the document" width="785" height="170" />
<h2>Error on line 1 at column 7 XML declaration allowed only at the start of the document in WordPress Sitemap</h2>
As a developer, I understand the frustration of trying to find a solution and coming up empty. Recently, I recently encountered this issue on a website I was working on that was using the RankMath plugin. Initially, I suspected a problem with the RankMath plugin and tried all the solutions listed in their <a href="https://rankmath.com/kb/fix-sitemap-issues/">"Sitemap Issues and Fixes" guide</a>, deactivating all plugins and reactivating them one by one, but I was still unable to resolve the issue. However, after digging deeper, I discovered <strong>the root cause was an extra space at the top of my XML Sitemap file</strong>. Here's the sitemap code with the extra top space:

<img class="alignnone size-full wp-image-891" src="https://www.elharony.com/wp-content/uploads/2023/01/SOLVED-error-on-line-1-at-column-7-XML-declaration-allowed-only-at-the-start-of-the-document-extra-space-elharony.com_.png" alt="Extra Space - Error on line 1 at column 7 XML declaration allowed only at the start of the document" width="939" height="265" />

After trying various solutions, I eventually discovered the source of the error by thoroughly examining each PHP file in my custom theme's directory. To my surprise, the culprit was an extra space at the end of the functions.php file:

<img class="alignnone size-full wp-image-892" src="https://www.elharony.com/wp-content/uploads/2023/01/SOLVED-error-on-line-1-at-column-7-XML-declaration-allowed-only-at-the-start-of-the-document-solution-elharony.com_.png" alt=" Error on line 1 at column 7 XML declaration allowed only at the start of the document" width="727" height="346" />

And that's it, the sitemap works now! 🎉🚀

In conclusion, if you are experiencing the "Error on line 1 at column 7 XML declaration allowed only" error, don't immediately blame your SEO plugin. Instead, start by thoroughly checking all of the PHP files in your theme, as this is likely the source of the issue. In my case, an extra space after the closing PHP tag in the functions.php file was causing the problem. By identifying and fixing this small error, the problem was quickly resolved.