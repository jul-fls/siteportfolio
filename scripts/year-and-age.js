// année dynamique
document.getElementById('year').textContent = new Date().getFullYear();

// age dynamique avec date exacte
const birthDate = new Date(2001, 5, 1);
const age = new Date().getFullYear() - birthDate.getFullYear();
const monthDiff = new Date().getMonth() - birthDate.getMonth();
if (monthDiff < 0 || (monthDiff === 0 && new Date().getDate() < birthDate.getDate())) {
	age--;
}
document.getElementById('age').textContent = age;