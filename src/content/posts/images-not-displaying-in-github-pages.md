---
title: "[Solved] Images not displaying in GitHub Pages?"
description: "<!-- wp:paragraph --> <p>After deploying my 5th project of my <a href=\"https://openclassrooms.com/en/paths/61-front-end-developer\">OpenClassrooms Front End Dev"
pubDate: 2019-05-25T16:33:54.000Z
tags: ["Images not displaying in GitHub Pages", "Images show up locally but not on GitHub Pages", "Why can't I see my images in the website hosted in Github"]
draft: false
---

<!-- wp:paragraph -->
<p>After deploying my 5th project of my <a href="https://openclassrooms.com/en/paths/61-front-end-developer">OpenClassrooms Front End Developer Diploma</a> today, I noticed that Images not displaying in GitHub Pages as it is locally.</p>
<p>Here's what I found:</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>GitHub Pages is case-sensitive</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Locally, it doesn't matter. But if you are deploying your app on GitHub Pages, you have to double-check the sensitivity of the images' name. Keep in mind;</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul>
<li><strong>myImage.jpg</strong> isn't the same as <strong>myImage.JPG</strong></li>
<li>Moreover, <strong>myImage.jpg</strong> isn't the same as <strong>myimage.jpg</strong></li>
</ul>
<!-- /wp:list -->

<!-- wp:quote -->
<blockquote class="wp-block-quote">
<p>I kept all the images lowercase, and I used <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/toLowerCase">.toLowerCase()</a> method in my JS File while importing images dynamically to avoid any case-sensitive problem.</p>
</blockquote>
<!-- /wp:quote -->

<!-- wp:heading -->
<h2>Wrong PATH/URL of the image</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Here's my WRONG code:</p>
<pre class="lang:js decode:true  ">myElement.style.background = `#ffffff url(../img/time.jpg) center`</pre>
<p>I was shaking my head to know what's wrong with it, and I noticed that after deploying this to GitHub Pages, and trying to access the image URL:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":346} -->
<figure class="wp-block-image"><img class="wp-image-346" src="https://www.elharony.com/wp-content/uploads/2019/05/Element-Background.png" alt="Element Background Image" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>It redirects me to this 404 Not Found page:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":345} -->
<figure class="wp-block-image"><img class="wp-image-345" src="https://www.elharony.com/wp-content/uploads/2019/05/Images-not-displaying-in-GitHub-Pages.png" alt="Wrong Image URL on GitHub Pages" /></figure>
<!-- /wp:image -->

<!-- wp:quote -->
<blockquote class="wp-block-quote">
<p>That <strong><code>../</code></strong> forced GitHub Pages to search for the image on a different path (i.e. <strong>One-level backward</strong>). In order to solve it, I changed the <strong><code>../</code></strong> to <strong><code>./</code></strong> and it worked!</p>
</blockquote>
<!-- /wp:quote -->

<!-- wp:image {"id":347} -->
<figure class="wp-block-image"><img class="wp-image-347" src="https://www.elharony.com/wp-content/uploads/2019/05/Images-not-displaying-in-GitHub-Pages-2.png" alt="It worked!" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>---</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Curious about that <strong>Quote-Generator</strong> project? <a href="https://elharony.github.io/Quote-Generator/">Give it a look</a>, it's <a href="https://github.com/elharony/Quote-Generator">open-source</a>. So, feel free to contribute, it's ideal for beginners-intermediates Front End Developers who wants to practice on HTML/CSS/Vanilla JavaScript without any JS Frameworks!</p>
<!-- /wp:paragraph -->