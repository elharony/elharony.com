---
title: "[Solved] Remove Disqus Footer and \"Also on\" sections using CSS"
description: "If you're using Disqus as your Comments System, and want to keep your website clean, then you need to Remove Disqus Footer and \"Also on\" sections (aka. Disqus R"
pubDate: 2019-10-11T02:07:36.000Z
tags: ["Hiding “Also on Disqus”", "How To Hide or Remove Disqus Footer?", "How to remove Discovery from Disqus", "How to Remove Disqus footer from webpage", "Turn off 'also on' Disqus"]
draft: false
---

If you're using Disqus as your Comments System, and want to keep your website clean, then you need to Remove Disqus Footer and "Also on" sections (aka. Disqus Recommendation Section) from your website, it looks MUCH better and minimal after removing both sections!
<h2>Why to remove Disqus Footer and "Also On" sections?</h2>
Mainly, there are 2 reasons:
<ul>
 	<li>Clean, and Minimal looking to your website by removing any unnecessary content, especially if you have other sections below the "Disqus Comments" section, the page will be a little bit taller than expected.</li>
 	<li>Disqus doesn't update the Permalinks of your posts. So, if you're using WordPress, and someone commented on your post (www.example.com/post-permalink/) and you've changed that URL to something else (www.example.com/updated-post-permalink/) the users will get redirector to a 404 Page Not Found!</li>
</ul>
<img class="size-full wp-image-595 aligncenter" src="https://www.elharony.com/wp-content/uploads/2019/10/Disqus-Footer-Also-On.jpg" alt="Disqus Footer & Also On sections" width="688" height="377" />

For me, both reasons were valid. Especially that I already have my "Related Articles" section below "Disqus Comments" section. So, I don't really need Disqus to suggest anything to my audience, especially if it might redirect them to a 404 Page Not Found!

That's enough. Let's jump to the action steps:
<h2 class="ellip">How to turn off/Remove Disqus 'Also On' section?</h2>
It's very simple, and you don't need any coding-related solutions. All you need is to:
<ul>
 	<li class="ellip"><a href="https://disqus.com/profile/login/">Login to your Disqus Account</a></li>
 	<li>Click on the ⚙️, then "Admin"</li>
</ul>
<img class="size-full wp-image-589 aligncenter" src="https://www.elharony.com/wp-content/uploads/2019/10/Remove-Also-On-Disqus-section-Admin.jpg" alt="Remove "Also On" Disqus section from Admin" width="165" height="288" />
<ul>
 	<li>Under "Settings", uncheck the "Discovery" option</li>
</ul>
<img class="size-large wp-image-590 aligncenter" src="https://www.elharony.com/wp-content/uploads/2019/10/Remove-Also-On-Disqus-section-Discovery-1024x629.jpg" alt="Remove "Also On" Disqus section - Discovery option" width="1024" height="629" />

That's it, you won't see the "Also on" anymore on your website!
<h2 class="ellip">How to remove Disqus Footer?</h2>
If you're on a Disqus Pro Plan, you will find an option, called "Disqus Branding" under "Settings", you can check/uncheck it if you want.

<img class="size-large wp-image-588 aligncenter" src="https://www.elharony.com/wp-content/uploads/2019/10/Remove-Disqus-Footer-1024x28.jpg" alt="Remove Disqus Footer" width="1024" height="28" />

But, if you're - like most Disqus users - on the Free Plan, you will need to involve some code. I've seen a lot of solutions, from the simplest to the most complicated ones, but I preferred to use a Non-JavaScript solution to fit all developers, and minimal our JS use if we could achieve it with CSS!
<pre class="theme:monokai lang:default decode:true">#disqus_thread {
  position: relative;
}
#disqus_thread:after {
  content: "";
  display: block;
  height: 55px;
  width: 100%;
  position: absolute;
  bottom: 0;
  background: white;
}</pre>
Let me explain what's going on here; We aren't REMOVING the Footer, we are HIDING it from the users, which is great if we can achieve it using a small CSS Snippet!

---

Works for you? Do you have any questions? Let me know in the comments!