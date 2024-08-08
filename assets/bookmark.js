const bookmarkBtns = document.querySelectorAll(".bookmark-img");

bookmarkBtns.forEach(bookmark => {
    bookmark.addEventListener("click", () => {
        if (bookmark.src.includes("assets/bookmark.svg")) {
            bookmark.src = "assets/bookmarked.svg"
        } else {
            bookmark.src = "assets/bookmark.svg"
        }
    });
})