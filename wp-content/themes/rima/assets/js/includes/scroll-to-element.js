// Scroll to element with offset
const scrollToElement = (el, offset = 0) => {
    let element = document.querySelector(el);
	let headerOffset = offset;
	let elementPosition = element.getBoundingClientRect().top;
	let offsetPosition = elementPosition + window.pageYOffset - headerOffset;
	window.scrollTo({
		top: offsetPosition,
		behavior: "smooth"
	});
}

export default scrollToElement;