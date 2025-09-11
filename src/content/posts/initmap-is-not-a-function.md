---
title: "[Solved] initMap is not a function"
description: "Honestly, the <code>initMap is not a function</code> error is one of the most common mistakes Web Developers make when trying to build an interesting Map-Style,"
pubDate: 2019-09-29T20:55:47.000Z
tags: ["Google Maps API", "Google Maps API problem - initMap()", "initMap is not a function", "TypeError: window.initMap is not a function", "Uncaught InvalidValueError: initMap is not a function"]
draft: false
---

Honestly, the <code>initMap is not a function</code> error is one of the most common mistakes Web Developers make when trying to build an interesting Map-Style, Side-Project Application (i.e. <a href="https://www.zillow.com/homes/_rb/">Zillow</a>) using Vanilla JavaScript or JavaScript Framework/Library like <a href="https://angular.io/">Angular</a>, <a href="https://vuejs.org/">Vue</a> or <a href="https://reactjs.org/">React</a>.
<blockquote>Before fixing an error, you need to know why it occurs at the first place.</blockquote>
<h2>What is Google Maps API <code>initMap</code> function?</h2>
Google Maps API script looks like this:
<pre class="theme:monokai lang:default decode:true"><script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script></pre>
The <code>initMap</code> is a callback function; It's the function that will be executed after the Google Maps API Asynchronous Script loads.
<h2>How to fix the <code>initMap is not a function</code> error?</h2>
Well, there are many reasons why you get this error, and here's a list of the most common 3 reasons, and an insight to fix it if matched any reason:

<strong>Reason #1: You don't even have an <code>initMap</code> function in your code.
</strong>💡 Make sure to add it, here's the documentation example:
<pre class="theme:monokai lang:js decode:true">var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
}</pre>
<strong>Reason #2: You have it, but it loads AFTER the script. </strong>
💡 Whenever the scripts loads, it won't find the <code>initMap</code> saved in the memory, that's why you need to have the <code>initMap</code> BEFORE the script loads if you're using Vanilla JS.
<pre class="theme:monokai lang:default decode:true">// Wrong
<script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
<script src="app.js"></script>

// Correct
<script src="app.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script></pre>
<strong>Reason #3: You are using JS Framework/Library (React, for example)</strong>
💡 Even if you have got the <code>initMap</code> function in your code and everything is OK. You might get this error because React doesn't know where to find the <code>initMap</code> function... Weird, haa? 🙄

Let me explain this to you, take a look at this code sample:
<pre class="theme:monokai lang:js decode:true">componentDidMount() {
  this.renderMap();
}
  
renderMap = () => {
  loadScript("https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap");
}

initMap = () => {
  let {lat, lng} = this.state;
  map = new window.google.maps.Map(document.getElementById('map'), {
    center: {lat, lng},
    zoom: 8
  });
}</pre>
After loading the script, React will search for the callback function <code>initMap</code> to execute it, and it won't find it anywhere, that's why we need to the <code>window</code> global object:
<blockquote>Wonder about <code>loadScript</code> function? It's a custom function I wrote to load Google Maps API properly in React Application. For more about it, Watch: <a href="https://www.youtube.com/watch?v=W5LhLZqj76s">Add Google Maps to React App </a> YouTube Tutorial</blockquote>
Anyways, here's how to add our <code>initMap</code> callback function to <code>window</code> object, by modifying the <code>renderMap</code> function:
<pre class="theme:monokai lang:js decode:true">renderMap = () => {
  loadScript("https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap");
  window.initMap = this.initMap;
}</pre>
Now, we've added a new variable called <code>initMap</code> in our <code>window</code> global object and we assign its value to be our <code>initMap</code> callback function! ✌️

---

Hopefully, this quick tutorial helps you to load Google Maps API in your Web App.

If you have other problems with Google Maps API, let me know in the comments below, and I will add more <a href="https://www.elharony.com/category/problem-solved/">Problem Solved</a> tutorials like this frequently ⚡️