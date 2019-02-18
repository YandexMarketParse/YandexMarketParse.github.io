	var submitInput = document.getElementById('submit');
	var valueInputVal = document.getElementById('value').value;		
	
	var title = document.getElementsByClassName('n-link_theme_blue');

if(screen.width < 576) {
	for(i=0; i<title.length; i++) {
		if(title[i].innerHTML.length > 50) {
			var shortText = title[i].innerHTML.slice(0,40);
			title[i].innerHTML = shortText + "...";
		}
	}

};
