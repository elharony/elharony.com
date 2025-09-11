---
title: "Add WooCommerce Reviews Pagination - Limit WooCommerce Reviews"
description: "In case you are building a WordPress Theme from Scratch, and you are using WooCommerce, you should consider Adding WooCommerce Reviews Pagination to Limit your "
pubDate: 2019-12-22T05:02:15.000Z
tags: ["Avoid an excessive DOM size", "Avoid an excessive DOM size on WordPress", "Broken WooCommerce Reviews Pagination Style", "Fix Lighthouse Performance Audit Problem", "How to add WooCommerce Reviews Pagination", "How to Limit WooCommerce Product Reviews to X", "Improve Lighthouse Performance Score on WordPress", "Improve the Performance of WooCommerce Product Page", "Slower WooCommerce Product Page"]
draft: false
---

In case you are building a WordPress Theme from Scratch, and you are using WooCommerce, you should consider Adding WooCommerce Reviews Pagination to Limit your WooCommerce Reviews. Obviously, nobody will notice anything at the beginning, but once your WooCommerce Products get some reviews, you will face a serious performance issue.
<h2>Avoid an excessive DOM size</h2>
Here's an example DOM of WooCommerce Reviews List:

<img class="alignnone size-full wp-image-641" src="https://www.elharony.com/wp-content/uploads/2019/12/WooCommerce-Review-DOM.jpg" alt="WooCommerce Review DOM" width="755" height="675" />

We have +10 DOM elements per review. What if we had +100 reviews? BANG, you get this cool <a href="https://developers.google.com/web/tools/lighthouse">Google Lighthouse</a> error:

<img class="alignnone size-full wp-image-642" src="https://www.elharony.com/wp-content/uploads/2019/12/Avoid-an-excessive-DOM-size-Google-Lighthouse-Performance-Audit.jpg" alt="Avoid an excessive DOM size" width="553" height="338" />

This is going to affect your users, especially Mobile Traffic, and there is nothing new here, this is a very old problem, we had it with our Blog Posts and even Social Media Posts and the solution is easy - <strong>Don't render everything at once, and use a Pagination</strong> (Either clicks on a specific page - Next, or Previous, or Infinite Scroll).
<h2>How to add WooCommerce Reviews Pagination?</h2>
<ul>
 	<li>Go to your <strong>WordPress Dashboard</strong></li>
 	<li>From the <strong>Settings</strong> menu, choose <strong>Discussion</strong></li>
 	<li>Under <strong>Other comment settings</strong>, check the <strong>"Break comments into pages with..."</strong> option with the configuration that suits your website/situation</li>
</ul>
<img class="alignnone wp-image-643 size-large" title="How to Limit WooCommerce Reviews to X" src="https://www.elharony.com/wp-content/uploads/2019/12/WooCommerce-Reviews-Pagination-WordPress-Settings-Tab-1024x272.jpg" alt="" width="1024" height="272" />
<h2>How to Limit WooCommerce Product Reviews to X?</h2>
<ul>
 	<li>Follow the steps mentioned above</li>
 	<li>Under the <strong>Other comment settings</strong>, change the value of <strong>"Break comments into pages with X"</strong> to the number you want (Assuming 10)</li>
 	<li>Choose which Reviews Page you want to display by default - <strong>"First"</strong> (Oldest) or <strong>"Last"</strong> (Newest)</li>
 	<li>Finally, choose which sorting style you want; <strong>Older</strong> at the top, or <strong>Newer</strong> at the top</li>
</ul>
After limiting your WooCommerce Product Reviews, you will notice that your Google Lighthouse Performance score has been increased - It was 80 and becomes 91 in my case!
<h2>Broken WooCommerce Reviews Pagination Style</h2>
It's very natural to get a broken WooCommerce Pagination, especially if you're building your WordPress Theme from scratch where no styles given (and so many overwriting). It might be looking like this:

<img class="alignnone size-full wp-image-644" src="https://www.elharony.com/wp-content/uploads/2019/12/Broken-WooCommerce-Pagination-Style.jpg" alt="Broken WooCommerce Pagination Style" width="101" height="144" />

For me, I already have a dedicated style file for WooCommerce-related Pages/Styles, and I will use the WooCommerce Pagination DOM to give it a custom style, check its DOM elements:

<img class="alignnone size-full wp-image-645" src="https://www.elharony.com/wp-content/uploads/2019/12/WooCommerce-Pagination-DOM.jpg" alt="WooCommerce Pagination DOM" width="294" height="177" />

Here's how my pretty basic styles look like:

<img class="alignnone size-full wp-image-649" src="https://www.elharony.com/wp-content/uploads/2019/12/Styled-WooCommerce-Reviews-Pagination.jpg" alt="Styled WooCommerce Reviews Pagination" width="203" height="65" />

If you're interested, here's the CSS Code (Easy to convert to SASS/LESS):
<pre class="theme:monokai bottom-set:false lang:css decode:true ">/** Reviews Pagination **/
 nav.woocommerce-pagination {
     margin-top: 1rem;
}
 nav.woocommerce-pagination .page-numbers li {
     display: inline-block;
     margin: 5px;
}
 nav.woocommerce-pagination .page-numbers li span.page-numbers.current {
     background: #000;
     color: #fff;
     padding: 6px;
     font-weight: bold;
}
 nav.woocommerce-pagination .page-numbers li a.page-numbers {
     padding: 5px;
}
</pre>
That's it for today's article. I hope you find it helpful!