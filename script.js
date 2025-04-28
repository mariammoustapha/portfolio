function opn(){
	var nav = document.querySelector('.nav');
	if (nav.style.display === 'none') {
	  nav.style.display = 'block';
	} else {
	  nav.style.display = 'none';
	}	
}
var tabs = document.querySelectorAll('.single-tab');
tabs.forEach(function(tab) {
  tab.addEventListener('click', function(event) {
    var id = this.getAttribute('id');

    tabs.forEach(function(tab) {
      tab.classList.remove('active-tab');
    });
    this.classList.add('active-tab');

    var contents = document.querySelectorAll('.tab-content');
    contents.forEach(function(content) {
      content.classList.remove('activecontent');
    });
    document.querySelector('.' + id).classList.add('activecontent');
  });
});
