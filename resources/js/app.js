import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


const t = document.getElementById("sidebar");
if (t) {
    const o = (s, g, i, m) => {
        s.classList.toggle("hidden"),
            g.classList.toggle("hidden"),
            i.classList.toggle("hidden"),
            m.classList.toggle("hidden")
    }
        , a = document.getElementById("toggleSidebarMobile")
        , e = document.getElementById("sidebarBackdrop")
        , l = document.getElementById("toggleSidebarMobileHamburger")
        , d = document.getElementById("toggleSidebarMobileClose");
    document.getElementById("toggleSidebarMobileSearch")?.addEventListener("click", () => {
        o(t, e, l, d)
    }
    ),
        a?.addEventListener("click", () => {
            o(t, e, l, d)
        }
        ),
        e?.addEventListener("click", () => {
            o(t, e, l, d)
        }
        )
}
const c = document.getElementById("theme-toggle-dark-icon")
    , n = document.getElementById("theme-toggle-light-icon");
localStorage.getItem("color-theme") === "dark" || !("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches ? n.classList.remove("hidden") : c.classList.remove("hidden");
const r = document.getElementById("theme-toggle");
let h = new Event("dark-mode");
r.addEventListener("click", function () {
    c.classList.toggle("hidden"),
        n.classList.toggle("hidden"),
        localStorage.getItem("color-theme") ? localStorage.getItem("color-theme") === "light" ? (document.documentElement.classList.add("dark"),
            localStorage.setItem("color-theme", "dark")) : (document.documentElement.classList.remove("dark"),
                localStorage.setItem("color-theme", "light")) : document.documentElement.classList.contains("dark") ? (document.documentElement.classList.remove("dark"),
                    localStorage.setItem("color-theme", "light")) : (document.documentElement.classList.add("dark"),
                        localStorage.setItem("color-theme", "dark")),
        document.dispatchEvent(h)
});
