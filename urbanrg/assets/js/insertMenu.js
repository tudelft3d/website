function get_root_url() {
	const root_folder = "urbanrg"
	let root_href = window.location.href;
	//console.log("root_href", root_href);
	let root_url = root_href.split(root_folder)[0] // http://localhost:8080/ with backslash
	root_url = root_url.concat(root_folder, "/")
	//console.log("root_url", root_url); // http://localhost:8080/urbanrg with backslash
	return root_url
}

function myIncludeHTML() {
	
	w3.includeHTML(myCallback);

	function myCallback() {
		// code that has to wait goes here
		const root_url = get_root_url();
		//console.log("root_url", root_url);
		let e;
		e = document.getElementById('navbar-img-tud');
		//console.log("e.class", e.className);
		e.src = root_url + 'images/tudwhite.png';
		e.onmouseover = function(){
			this.src = root_url + 'images/tudblue.png';
			};
		e.onmouseout = function(){
			this.src = root_url + 'images/tudwhite.png';	
			};

		e = document.getElementById('navbar-img-3dgi');
		e.src = root_url + 'images/navbar-white.png';
		e.onmouseover = function(){
			this.src = root_url + 'images/navbar-white_alt.png';
			};
		e.onmouseout = function(){
			this.src = root_url + 'images/navbar-white.png';	
			};

		e = document.getElementById('navbar-a-urbanrg');
		e.href = root_url + 'index.html';
		e = document.getElementById('navbar-img-urbanrg');
		e.src = root_url + 'images/urbanrg_white.png';
		e.onmouseover = function(){
			this.src = root_url + 'images/urbanrg_white_alt.png';
			};
		e.onmouseout = function(){
			this.src = root_url + 'images/urbanrg_white.png';	
			};

		e = document.getElementById('navbar-menu-index');
		e.href = root_url + 'index.html';
		e = document.getElementById('navbar-menu-members');
		e.href = root_url + 'members/members.html';
		e = document.getElementById('navbar-menu-news');
		e.href = root_url + 'news/news.html';
		e = document.getElementById('navbar-menu-projects');
		e.href = root_url + 'projects/projects.html';
		e = document.getElementById('navbar-menu-output');
		e.href = root_url + 'output/output.html';
	}
}