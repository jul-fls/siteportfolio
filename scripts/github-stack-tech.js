fetch("https://raw.githubusercontent.com/jul-fls/jul-fls/refs/heads/master/README.md")
.then(r => r.text())
.then(text => {
	// Extract the Tech Stack section from your README
	const start = text.indexOf("Tech Stack:");
	const end = text.indexOf("# 📊 GitHub Stats:");
	if (start === -1 || end === -1) return;
	const md = text.slice(start, end);
	const converter = new showdown.Converter();
	const html = converter.makeHtml(md);
	const container = document.getElementById("tech-fill");
	container.innerHTML = html;
	// Replace the <p> Showdown created with a flex wrapper
	const p = container.querySelector("p");
	if (p) {
		const flex = document.createElement("div");
		flex.className = "flex flex-wrap items-center gap-2"; // Tailwind layout
		// Move children over
		while (p.firstChild) flex.appendChild(p.firstChild);
		container.replaceChild(flex, p);
		// Style each shield
		flex.querySelectorAll("img").forEach(img => {
			img.classList.add("h-7", "rounded", "shadow"); // nice uniform badges
			img.loading = "lazy";
			img.referrerPolicy = "no-referrer"; // avoid mixed referrer issues
			// optional: remove inline height to let Tailwind height apply
			img.removeAttribute("height");
			img.removeAttribute("width");
		});
	}
})
.catch(() => {
	// fallback: show nothing or a simple message
	document.getElementById("tech-fill").innerHTML =
		'<span class="text-sm text-gray-500">Impossible de charger la stack depuis GitHub.</span>';
});