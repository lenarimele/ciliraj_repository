document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("search-input")
    const searchButton = document.getElementById("search-button")
  
    if (searchButton && searchInput) {
      searchButton.addEventListener("click", () => {
        const query = searchInput.value.trim()
        if (query !== "") {
          // Redirect to izdelki.html with search parameter
          window.location.href = `izdelki.html?search=${encodeURIComponent(query)}`
        }
      })
    }
  })




  document.addEventListener("DOMContentLoaded", () => {
    const urlParams = new URLSearchParams(window.location.search)
    const searchQuery = urlParams.get("search")
  
    if (searchQuery) {
      const normalizedQuery = searchQuery.toLowerCase()
  
      // If input field exists, fill it with search text
      const searchInput = document.getElementById("search-input")
      if (searchInput) {
        searchInput.value = searchQuery
      }
  
      const productCards = document.querySelectorAll(".product-card")
  
      productCards.forEach(card => {
        const text = card.textContent.toLowerCase()
        const isVisible = text.includes(normalizedQuery)
        card.classList.toggle("d-none", !isVisible)
      })
    }
  })



const searchInput = document.querySelector('[data-search]')
const searchButton = document.getElementById('search-button')
const productCards = document.querySelectorAll('.product-card')

searchButton.addEventListener('click', () => {
  const value = searchInput.value.toLowerCase()

  productCards.forEach(card => {
    const text = card.textContent.toLowerCase()
    const isVisible = text.includes(value)
    card.classList.toggle('d-none', !isVisible)
  })
})



function profil() {
    window.location.href = "profile.html";
}

function kosarica() {
    window.location.href = "košarica.html";
}

function domov() {
    window.location.href = "HOMEPAGE.html";
}

 