window.addEventListener("load", init);
const body = document.body;
const main = document.querySelector("main");
let cats

let infoBox;
let parentArticle;

function init() {
    console.log("All elements loaded");

    let stored = localStorage.getItem("favorited-cats")
    if (stored){
        console.log("Cats uit localstorage gehaald")
        cats = JSON.parse(stored)
    } else {
        console.log("Er zijn geen favorited cats")
        cats = []
        localStorage.setItem("favorited-cats", JSON.stringify(cats))
    }
    loadCats();
    body.addEventListener("click", catClickHandler);
}

function loadCats() {
    fetch("data.php")
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(loadCatsSuccessHandler)
        .catch(errorHandler);
}

function loadCatsSuccessHandler(data) {
    for (let cat of data) {
        const article = document.createElement("article");
        article.classList.add("article-item");
        article.dataset.name = cat.name
        article.id = cat.id;

        const div1 = document.createElement("div");
        const h2 = document.createElement("h2");
        h2.classList.add("article-item");
        h2.textContent = cat.name;
        div1.id = "div-top"
        div1.appendChild(h2);

        const h3 = document.createElement("h3");
        h3.textContent = "*"
        h3.dataset.name = cat.name
        if (cats.includes(cat.name)) {
            h3.classList.add("favorited")
        }
        h3.addEventListener("click", addFavoriteHandler)
        div1.appendChild(h3);

        const div2 = document.createElement("div");
        const img = document.createElement("img");
        img.classList.add("article-item");
        img.src = cat.image;
        img.alt = cat.name;
        div2.appendChild(img);

        const p = document.createElement("p");
        p.classList.add("article-item");
        p.textContent = "Click for more info!";
        div2.appendChild(p);

        article.appendChild(div1);
        article.appendChild(div2);
        main.appendChild(article);
    }
}

function catClickHandler(e) {
    infoBox = document.getElementById("info-box");

    if (e.target.classList.contains("article-item") && !infoBox) {
        createNewInfoBox(e);
    } else if (infoBox && e.target.id !== "info-box") {
        infoBox.remove();
        if (e.target.classList.contains("article-item")) {
            createNewInfoBox(e);
        }
    }
}

function createNewInfoBox(e, data) {
    const createInfoBox = document.createElement("section");
    createInfoBox.id = "info-box";
    body.appendChild(createInfoBox);

    parentArticle = e.target.closest("article")

    fetch(`data.php?id=${parentArticle.id}`)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(loadCatDetails)
        .catch(errorHandler);
}
function loadCatDetails(data) {
    infoBox = document.getElementById("info-box");
    const h2 = document.createElement("h2");
    h2.innerText = parentArticle.dataset.name
    infoBox.appendChild(h2)

    const p = document.createElement("p");
    p.textContent = data.description; // Assuming description is one of the properties in catDetails
    infoBox.appendChild(p);


    const tagsDiv = document.createElement("div");
    for (let tagData of data.tags) {
        const newTag = document.createElement("p");
        newTag.textContent = tagData
        tagsDiv.appendChild(newTag)
    }

    infoBox.appendChild(p);
    infoBox.appendChild(tagsDiv)
}

function addFavoriteHandler(e) {
    let h3 = e.target
    let name = h3.dataset.name
    if (!h3.classList.contains("favorited")) {
        h3.classList.add("favorited")
        cats.push(name)
        localStorage.setItem("favorited-cats", JSON.stringify(cats))
    } else {
        h3.classList.remove("favorited")
        cats.splice(cats.indexOf(h3.innerText), 1)
        localStorage.setItem("favorited-cats", JSON.stringify(cats))
    }
}

function errorHandler(error) {
    console.log("An error occurred:", error);
}