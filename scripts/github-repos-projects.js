const USER = "jul-fls";
const TOPIC_FILTER = "portfolio-project";
function cardHTML(r) {
	const lang = r.language || (r.topics && r.topics[0]) || "Repo";
	const desc = r.description ? r.description.replace(/</g, '&lt;') : "—";
	const updated = new Date(r.pushed_at || r.updated_at).toLocaleDateString();
	return `
    <article class="group h-full p-4 bg-white rounded-2xl shadow hover:shadow-lg transition">
        <a href="${r.html_url}" target="_blank" rel="noopener" class="block h-full">
        <div class="flex items-start justify-between gap-3">
            <h3 class="text-base font-semibold leading-tight line-clamp-2">${r.name}</h3>
            <span class="text-lg" aria-hidden="true">🐙</span>
        </div>
        <p class="mt-1 text-xs text-gray-500">${lang} • MAJ ${updated}</p>
        <p class="mt-3 text-sm text-gray-700 line-clamp-3">${desc}</p>
        ${r.topics && r.topics.length ?
                    `<div class="mt-4 flex flex-wrap gap-2">
            ${r.topics.map(t => `<span class="px-2 py-0.5 rounded-full text-xs bg-gray-100 text-gray-700 border">${t}</span>`).join("")}
            </div>` : ""}
        <div class="mt-4 inline-flex items-center text-sm text-blue-600 group-hover:underline">
            Voir sur GitHub →
        </div>
        </a>
    </article>
    `;
}

function renderRepos(repos) {
	const grid = document.getElementById("projects-grid");
	if (!repos.length) {
		grid.innerHTML = `<div class="col-span-full text-sm text-gray-500">Aucun dépôt avec le topic <code>${TOPIC_FILTER}</code>.</div>`;
		return;
	}
	grid.innerHTML = repos.map(cardHTML).join("");
}

async function fetchFilteredRepos(user) {
	const url = `https://api.github.com/search/repositories?q=user:${user}+topic:${TOPIC_FILTER}&per_page=100`;
	const res = await fetch(url, { headers: { "Accept": "application/vnd.github+json" } });
	if (!res.ok) throw new Error("GitHub API error: " + res.status);
	const json = await res.json();
	return (json.items || []).filter(r => !r.fork && !r.archived);
}

async function loadRepos() {
	try {
		const repos = await fetchFilteredRepos(USER);
		repos.sort((a, b) => new Date(b.pushed_at) - new Date(a.pushed_at));
		renderRepos(repos);
	} catch (e) {
		document.getElementById("projects-grid").innerHTML =
			`<div class="col-span-full text-sm text-red-600">Erreur de chargement GitHub : ${e.message}</div>`;
	}
}

function filterCardsByName(searchQuery) {
	document.querySelectorAll("#projects-grid > article").forEach((card) => {
		if (card.innerText.toLowerCase().includes(searchQuery.toLowerCase())) {
			card.style.display = "block";
		} else {
			card.style.display = "none";
		}
	});
}

loadRepos();