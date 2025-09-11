/* ----- AGE ----- */
const ageSpan = document.getElementById("age");

const birthDate = new Date(2005, 2, 27);
const today = new Date();
let age = today.getFullYear() - birthDate.getFullYear();
const monthDifference = today.getMonth() - birthDate.getMonth();

if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
    age--;
}

ageSpan.textContent = '' + age;

/* ----- ANNEE COPYRIGHT ----- */
const yearSpan = document.getElementById("copyrightYear");
const currentYear = new Date().getFullYear();
yearSpan.textContent = '' + currentYear;