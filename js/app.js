const Navigation = {
  init() {
    document.querySelectorAll(".nav-b").forEach((l) =>
      l.addEventListener("click", async (e) => {
        e.preventDefault();
        const filep = l.dataset.page;
        await Page.load(filep);
      }),
    );
  },
};

const Page = {
  async load(f) {
    const main = document.getElementById("page-c");

    try {
      const html = await (await fetch(f)).text();
      const parser = new DOMParser();
      main.innerHTML = parser.parseFromString(html, "text/html").body.innerHTML;
    } catch {
      main.innerHTML = `<div class="error">Error loading ${f}</div>`;
    }
  },
};

document.addEventListener("DOMContentLoaded", () => Navigation.init());
