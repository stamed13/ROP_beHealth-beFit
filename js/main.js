window.onload = function () {
	const menu_btn = document.querySelector('#hamburger');
	const header_nav = document.querySelector('#header-nav');
	const content = document.querySelector('#content');

	menu_btn.addEventListener('click', function () {
		menu_btn.classList.toggle('is-active');
		header_nav.classList.toggle('is-active');
		content.classList.toggle('is-active');
	});
}