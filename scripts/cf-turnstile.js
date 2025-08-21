const encodedEmail = "anVsaWVuQGZsdXNpbi5mcg==";
const encodedPhoneStyle = "KCszMykgMDYgMTcgNDYgNjUgNjM=";
const encodedPhone = "KzMzNjE3NDY2NTYz";

function decodeBase64(str) {
	return atob(str);
}

// callback turnstile
function onTurnstileSuccess() {
	document.getElementById("email-header").innerText = "✉️ " + decodeBase64(encodedEmail);
	document.getElementById("email-header").href = "mailto:" + decodeBase64(encodedEmail);
	document.getElementById("phone-header").innerText = "📞 " + decodeBase64(encodedPhoneStyle);
	document.getElementById("phone-header").href = "tel:" + decodeBase64(encodedPhone);
	document.getElementById("email-footer").innerText = "✉️ " + decodeBase64(encodedEmail);
	document.getElementById("email-footer").href = "mailto:" + decodeBase64(encodedEmail);
	document.getElementById("phone-footer").innerText = "📞 " + decodeBase64(encodedPhoneStyle);
	document.getElementById("phone-footer").href = "tel:" + decodeBase64(encodedPhone);
	document.getElementById("protected-info").classList.remove("hidden");
	document.getElementById("captcha-invalid-header").classList.add("hidden");
	document.getElementById("captcha-invalid-footer").classList.add("hidden");
	document.getElementById("contact-protected").classList.remove("hidden");
	document.getElementById("cf-turnstile").classList.add("hidden");
}