---
title: "Gems in VSCode: Must-Have Extensions for Developers"
description: "Every developer can maximize coding experience with my Gems In VSCode, highlights a collection of helpful VS Code extensions I've personally used, loved, and sh"
pubDate: 2022-01-10T08:23:26.000Z
tags: ["Gems In VSCode", "VSCode"]
draft: false
---

Every developer can maximize coding experience with my Gems In VSCode, highlights a collection of helpful VS Code extensions I've personally used, loved, and shared over the years:
<h2>1. Gems In VSCode – Import Cost 💸</h2>
"Import Cost" is one of the most helpful VS Code Extensions!

Whenever you write <code>import</code> or <code>require</code> statements, it automatically shows the actual & gzipped size of the module/package right inside your editor 🤖
<blockquote>⚠️ This is <strong>NOT</strong> a bundle analysis tool. If you're using it for that purpose, check out <code>webpack-bundle-analyzer</code> instead.</blockquote>
It's all about giving you visibility, early on, into the cost of what you're importing.

It also comes with a simple config file to color-code package sizes:
<ul data-spread="false">
 	<li>Small Package: < 50 KB</li>
 	<li>Medium Package: < 100 KB</li>
 	<li>Large Package: > 100 KB</li>
</ul>
🔗 <a href="https://marketplace.visualstudio.com/items?itemName=wix.vscode-import-cost">Install Extension</a>
<div>

<hr />

</div>
<h2>2. Gems In VSCode – Nest Comments 🔁</h2>
Ever wondered how to comment out code that already has comment blocks? 🤔

<strong>Nest Comments</strong> solves that neatly by modifying the comment symbols. For example:
<ul data-spread="false">
 	<li>HTML comment <code><!-- --></code> becomes <code><!~~ ~~></code> inside, so it won't break your code.</li>
</ul>
<h3>How to use:</h3>
<ul data-spread="false">
 	<li>Install <a href="https://marketplace.visualstudio.com/items?itemName=philsinatra.nested-comments">Nest Comments</a></li>
 	<li>Use:
<ul data-spread="false">
 	<li><strong>Mac</strong>: CMD + Alt + /</li>
 	<li><strong>Windows</strong>: CTRL + Alt + /</li>
</ul>
</li>
</ul>
Supported in: <code>html</code>, <code>css</code>, <code>vue</code>, <code>php</code>, <code>xml</code>, <code>jsx</code>, <code>asp</code>, <code>svg</code>, <code>tsx</code>, and more.

Shoutout to <a href="https://www.linkedin.com/in/philsinatra/"><strong>Phil Sinatra</strong></a> for building this gem 👏
<div>

<hr />

</div>
<h2>3. Gems In VSCode – Code Spell Checker 🔤</h2>
Spelling mistakes happen. To all of us. Especially if you're not a native English speaker.

But these small mistakes can cause huge inconsistency issues in a codebase. For example, a key object named <code>calender</code> instead of <code>calendar</code> can cause confusion and bugs later.
<h3>Solution:</h3>
<ol start="1" data-spread="false">
 	<li>Acknowledge the problem</li>
 	<li>Encourage your team to double-check naming</li>
 	<li>Use this <a href="https://marketplace.visualstudio.com/items?itemName=streetsidesoftware.code-spell-checker">Code Spell Checker Extension</a></li>
</ol>
✅ Supported Languages:
<ul data-spread="false">
 	<li>English (US, GB), Spanish, Dutch, French, and more</li>
 	<li>Specialized dictionaries (Medical Terms, etc.)</li>
</ul>
✅ Enabled File Types: JS, TS, HTML, Markdown, JSON, YAML, Python, PHP, Rust, C++, and many others.

Thanks to <a href="https://www.linkedin.com/in/jasondent/"><strong>Jason Dent</strong></a> for this amazing tool 🙏
<div>

<hr />

</div>
<h2>4. Gems In VSCode – Turbo Console Log ⚡</h2>
Console logging is helpful... but repetitive. Especially during on-the-fly debugging.

<strong>Turbo Console Log </strong>automates the console log generation:
<h3>How to use:</h3>
<ol start="1" data-spread="false">
 	<li>Highlight a variable</li>
 	<li>Press <strong>CTRL + ALT + L</strong></li>
 	<li>Done! It logs something like:</li>
</ol>
<pre><code>console.log("🚀 ~ file: app.js ~ line 30 ~ foo", foo);</code></pre>
✨ It even supports <strong>multi-line selections</strong> and logs each line separately!

🔗 <a href="https://marketplace.visualstudio.com/items?itemName=ChakrounAnas.turbo-console-log">Install Extension</a> 🔗 <a href="https://github.com/Chakroun-Anas/turbo-console-log">Open-Source Code</a>

Big thanks to <a href="https://www.linkedin.com/in/anas-chakroun/"><strong>Anas Chakroun</strong></a> 🙏
<div>

<hr />

</div>
<h2>5. Gems In VSCode – Change Case 🔤🔁</h2>
During code reviews or after pasting random text, inconsistent casing can get annoying.

This extension lets you change casing instantly:
<h3>Steps:</h3>
<ol start="1" data-spread="false">
 	<li>Install <a href="https://marketplace.visualstudio.com/items?itemName=wmaurer.change-case">Change Case Extension</a></li>
 	<li>Highlight the text</li>
 	<li>Run <code>Ctrl + Shift + P</code>, then choose "Change Case"</li>
 	<li>Select the desired case → Done 🚀</li>
</ol>
✨ Supports multi-line cursor selection.

Thanks <strong>Wayne Maurer</strong> for this practical tool ❤️

<hr />

<h2>6. Gems In VSCode – GitLens 🔍</h2>
If I could install only one extension, it would be <strong>GitLens</strong>. Hands down. ✋

It makes Git in VSCode powerful and visual:
<h3>Why you need GitLens:</h3>
<ul>
 	<li><strong>Revision Navigation</strong> – Preview past file revisions, compare with current</li>
 	<li><strong>Current Line Blame</strong> – Know who last edited a line, with full commit info</li>
 	<li><strong>Status Bar Blame</strong> – Shows commit info in the status bar</li>
 	<li><strong>Sidebar Views</strong> – Browse Commits, Branches, Stashes, Tags via UI</li>
 	<li><strong>Terminal Links</strong> – Ctrl+Click to interact with commits/branches fast</li>
</ul>
🔗 <a href="https://marketplace.visualstudio.com/items?itemName=eamodio.gitlens">Install GitLens</a> 🔗 <a href="https://github.com/gitkraken/vscode-gitlens">Source Code</a>

Thanks <a href="https://www.gitkraken.com/"><strong>GitKraken</strong></a> for building this essential tool ❤️

<hr />

Hope you enjoyed it. Happy coding! 👨‍💻