---
title: "[SOLVED] Failed to install this extension vscode issue"
description: "Cannot install any extensions on VSCode? Did you try to uninstall and re-install VSCode? Failed to install Download Manually? That's OK. I've been watching a Re"
pubDate: 2020-02-03T02:06:30.000Z
tags: ["Cannot install any extensions in VSC", "failed to install download manually", "Failed to install Go extension in Visual Studio Code", "Failed to install this extension", "vs code fails to install extensions", "vscode Cannot install any extension"]
draft: false
---

Cannot install any extensions on VSCode? Did you try to uninstall and re-install VSCode? Failed to install Download Manually? That's OK. I've been watching a React Course on <a href="https://frontendmasters.com">Frontend Masters</a>, and the instructor - <a href="https://twitter.com/holtbt">Brian Holt</a> - was talking about <a href="https://prettier.io/">Prettier</a> and how important it is <em>(and he's right!)</em>, but when I tried to install the <a href="https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode">Prettier - Code Formatter VSCode Extension</a>, I got the "Failed to install this extension" vscode error message 👇

<img class="alignnone size-full wp-image-696" src="https://www.elharony.com/wp-content/uploads/2020/02/Failed-to-install-VS-Code-Extension.png" alt="Failed to install VS Code Extension" width="475" height="136" />

Also, you might see an Offline VSCode Marketplace or VSCode Extensions' information not loading like this 👇

<img class="alignnone size-full wp-image-697" src="https://www.elharony.com/wp-content/uploads/2020/02/vscode-extentions-information-not-loading.png" alt="vscode extentions' information not loading" width="900" height="394" />

If you are reading this, you come to the right place to help you fix this problem.
<h2>How to fix: Failed to install this extension vscode issue?</h2>
The solution below is TESTED and it is WORKING 💯👌
<ul>
 	<li>Open your Connection Settings 🌐</li>
 	<li>Double-click on the "Internet Protocol Version 4 (TCP/IPv4)"</li>
 	<li>Check the "Use the following DNS server addresses" option, and write <a href="https://developers.google.com/speed/public-dns/docs/using">Google Public DNS IP addresses (IPv4)</a>, as follows:
<ul>
 	<li>Preferred DNS server: <strong>8.8.8.8</strong></li>
 	<li>Alternate DNS server: <strong>8.8.4.4</strong></li>
</ul>
</li>
</ul>
<img class="alignnone size-full wp-image-698" src="https://www.elharony.com/wp-content/uploads/2020/02/Internet-Protocol-Version-4-TCP-IPv4.png" alt="Internet Protocol Version 4 (TCP-IPv4)" width="660" height="457" />
<ul>
 	<li>After that, we need to change the "Internet Protocol Version 6 (TCP/IPv6)" with <a href="https://developers.google.com/speed/public-dns/docs/using">Google Public DNS IPv6 addresses</a>, as follows:
<ul>
 	<li>Preferred DNS server: <strong>2001:4860:4860::8888</strong></li>
 	<li>Alternate DNS server: <strong>2001:4860:4860::8844</strong></li>
</ul>
</li>
</ul>
<img class="alignnone size-full wp-image-699" src="https://www.elharony.com/wp-content/uploads/2020/02/Internet-Protocol-Version-6-TCP-IPv6.png" alt="Internet Protocol Version 6 (TCP-IPv6)" width="904" height="465" />
<ul>
 	<li>Disconnect your internet, and reconnect again 🔌</li>
 	<li>Congratulations, you can install any VSCode Extensions!  🎉</li>
</ul>
<img class="alignnone size-large wp-image-700" src="https://www.elharony.com/wp-content/uploads/2020/02/SOLVED-Failed-to-install-VS-Code-Extension-1024x606.png" alt=" Failed to install VS Code Extension" width="1024" height="606" />

Finally, I will continue watching that React Course and use Prettier. However, if someone is interested, I can write an article on Why to use it, and How to configure Prettier on VSCode! 😉