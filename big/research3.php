
<?php include "includes/header.php"?>

<div class ="content re">
<h2 class="pageID"><?=$PageID?></h2>
<h3>Flexbox vs Grid</h3>
<ol>
<li><b>One vs Two Dimensions</b></li>
<p>The most important thing to know is that flexbox is one-dimensional, while CSS Grid is two-dimensional. Flexbox lays out items along either the horizontal or the vertical axis, so you have to decide whether you want a row-based or a column-based layout.</p>
<p>A flex layout can also wrap in multiple rows or columns and flexbox treats each row or column as a separate entity, based on its content and the available space.</p>
<p>On the other hand, CSS Grid lets you work along two axes: horizontally and vertically. Grid allows you to create two-dimensional layouts where you can precisely place grid items into cells defined by rows and columns.</p>

<li><b>Focus on Content Placement: CSS Grid</b></li>
<p>CSS Grid focuses on precise content placement. Each item is a grid cell, lined up along both a horizontal and a vertical axis. If you want to accurately control the position of items within a layout, CSS Grid is the way to go.

<li><b>Focus on Content Flow: Flexbox</b></li>
<p>Flexbox focuses on content flow rather than content placement. Widths (or heights) of flex items are determined by the content of the item. Flex items grow and shrink according to their inner content and the available space.</p>
</ol>

<h3>browser flexbox support</h3>
<p>Flexbox has fairly good browser support, while CSS Grid is not supported by IE11- and Edge 15-. Most partial support refers to supporting an older version of the specification or an older syntax </p>
<ol>
    <li>Only supports the old flex box specification and does not support wrapping : FireFox2-21, Chrome4-20, Safari 3.2-6.1, Android browser 2.1-4.3</li>
    <li>Only support the 2012 syntax : IE10 </li>
    <li>Does not support flex-wrap, flex-flow or align-content properties: FireFox 22-27</li>
    <li>Partial support is due to large amount of bug present : IE10-11</li>
</ol>
<img src="images/1.png" alt="flexbox support browser" style ="width:100%; height:35%"> 


<h3>How to combine Flexbox & Grid</h3>
<p>A simple example : a grid of equal height cards across each row, each with a little footer content aligned along each row. </p>

<img src="https://nostrongbeliefs.com/images/simple-grid.png" alt = "simple flexbox grid combine" style ="width:100%; height:35%">

<p>Each cards has the author name at the bottom and aligned horizontally even though the titles and intro paragraphs are different lengths. This is achieved with flex: 1 on the paragraph. In total it’s used 6 CSS declarations for this layout and didn’t have to resort to fixed heights or absolute positioning to make it look nice and tidy.
A more complex example: a footer with 4 layouts depending on the viewport width.</p>

<img src="https://nostrongbeliefs.com/images/footer-4.png" alt="complexed flexbox grid combine" style ="width:100%; height:35%";>


<p>First of all media queries are involved in the largest two layouts. The two smaller layouts are controlled by the responsive in 1 line of CSS, swapping when the available room allows. In medium and larger viewports it’s moved to a more declarative approach with straight up fr units in a fixed number of columns. One thing to notice is how flexbox is used for a 2-dimensional layout of the &lt;li&gt;s in the Event Site section, and grid ends up as a 1 dimensional layout in the widest viewports. </p>
</div> 


<div class ="sidebar research">
  <h3> Citation</h3>
<ol>
      <li>Monus, Anna. “Flexbox vs. CSS Grid: Which Should You Use and When?” Web Design Envato Tuts , 11 Mar. 2019<a href="https://webdesign.tutsplus.com/articles/flexbox-vs-css-grid-which-should-you-use--cms-30184" target=”_blank” > [link]</a> </li>
      <li>Fitzgerald, Abbey. “How to Combine Flexbox and CSS Grids for Efficient Layouts.” Layout Creative Content for Designers Developers Marketers, 15 Dec. 2018<a href="https://getflywheel.com/layout/combine-flexbox-and-css-grids-for-layouts-how-to/" target=”_blank” > [link]</a></li>
      <li>“To Grid or to Flex?” CSS { In Real Life }, 10 Feb. 2019<a href="https://css-irl.info/to-grid-or-to-flex/" target=”_blank” > [link]</a></li>
      <li>Johnson, Derek. Using CSS Grid and Flexbox Together. 12 June 2018<a href="https://nostrongbeliefs.com/blog/using-css-grid-and-flexbox-together/" target=”_blank”> [link]</a></li>
</ol>
</div>
<?php include "includes/footer.php"?>