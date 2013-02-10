<!----------------------------------------------------------------------------
Edit PHP for IanPaschal.com
Designed by Ian Paschal, ©2012
contact@ianpaschal.com
http://www.ianpaschal.com/
----------------------------------------------------------------------------->

<script type="text/javascript" src="/assets/js/edit.js"></script>

<div class="pop_bg" id="pop_a">
	<div class="popup">
		<input type="text" id="a_field" placeholder="http://" >
		<a
			class="left"
			onclick="popup_cancel('a');return false;">
				<img src="/assets/img/popcancel.png"/>
		</a>
		<a
			class="right"
			onclick="insert('a',($('#a_field').val()));return false;">
				<img src="/assets/img/popsave.png"/>
		</a>
	</div>
</div>

<div class="pop_bg" id="pop_img">
	<div class="popup">
		<input type="file" name="file" id="img_field">
		<a
			class="left"
			onclick="popup_cancel('img');return false;">
				<img src="/assets/img/popcancel.png"/>
		</a>
		<a
			class="right"
			onclick="upload();return false;">
				<img src="/assets/img/popsave.png"/>
		</a>
	</div>
</div>

<form>
	<div class="edit_info">
		<h3>Main Info</h3>
		<input type="text" name="title" id="title" placeholder="Title" onkeyup="update('title');">
		<input type="text" name="type" id="type" placeholder="Type (e.g. Graphic Design)" onkeyup="update('type');">
		<input type="text" name="date" id="date" placeholder="Date (e.g. January 2013)" onkeyup="update('date');">
	</div>
	<div class="edit_code">
		<h3>Code Editor</h3>
		<textarea id="code" onkeydown="timer_reset();" rows="4" cols="80" placeholder="HTML Code"></textarea>
		<a class="left" onclick="insert('strong');return false;"><img src="/assets/img/strong.png"/></a>
		<a class="left" onclick="insert('em');return false;"><img src="/assets/img/em.png"/></a>
		<a class="left" onclick="insert('p');return false;"><img src="/assets/img/p.png"/></a>
		<a class="left" onclick="insert('h3');return false;"><img src="/assets/img/h3.png"/></a>
		<a class="left" onclick="popup_open('a');return false;"><img src="/assets/img/a.png"/></a>
		<a class="left" onclick="popup_open('img');return false;"><img src="/assets/img/img.png"/></a>
	</div>
	<div class="changes">
		<a href="/dashboard" class="left"><img src="/assets/img/cancel.png"/></a>
		<a href="#" class="right"><img src="/assets/img/save.png"/></a>
	</div>
</form>

<div class="preview">
	<h3>Preview:</h3>
	<p></p>
	<h2 id="title_output">
		<span style="color: #CCC;">Project Title</span>
	</h2>
	<p>
		<span id="type_output">
			<span style="color: #CCC;">Project Type</span>
		</span> &mdash; <span id="date_output">
			<span style="color: #CCC;">Project Date</span>
		</span>
	</p>
	<div id="code_output">
		<div class="paragraph_container">
			<p style="color: #CCC;">Code output will appear here...</p>
		</div>
	</div>
</div>