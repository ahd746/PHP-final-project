// validation to make sure that user enter 1 or 0 to hero and active fields

const hero = document.getElementById('hero')
const active = document.getElementById('active')
const form = document.getElementById('form')

form.addEventListener('submit', (e) => {

    if (active.value < 0 || active.value > 1 || isNaN(active.value)) {
        window.alert("Active must be 0 or 1");
        e.preventDefault()
    }

    if (hero.value < 0 || hero.value > 1 || isNaN(hero.value)) {
        window.alert("Hero must be 0 or 1");
        e.preventDefault()
    }
})