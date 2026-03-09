lucide.createIcons();

const yearEl = document.getElementById("year");
if (yearEl) {
  yearEl.textContent = new Date().getFullYear();
}

const mobileBtn = document.getElementById("mobileBtn");
const mobileMenu = document.getElementById("mobileMenu");
const header = document.getElementById("siteHeader");
const toTop = document.getElementById("toTop");
const inquiryFab = document.getElementById("inquiryFab");
const inquirySection = document.getElementById("inquire");
const form = document.getElementById("inquiryForm");
const sendBtn = document.getElementById("sendBtn");
const statusEl = document.getElementById("formStatus");
const toast = document.getElementById("toast");
const toastMsg = document.getElementById("toastMsg");
const toastClose = document.getElementById("toastClose");
const filterButtons = document.querySelectorAll(".filter-btn");
const jobCards = document.querySelectorAll(".job-card");
const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

function toggleMobileMenu(forceOpen = null) {
  if (!mobileMenu || !mobileBtn) return;

  const shouldOpen =
    typeof forceOpen === "boolean"
      ? forceOpen
      : mobileMenu.classList.contains("hidden");

  mobileMenu.classList.toggle("hidden", !shouldOpen);
  mobileBtn.setAttribute("aria-expanded", String(shouldOpen));
}

mobileBtn?.addEventListener("click", () => toggleMobileMenu());

document.querySelectorAll(".mnav").forEach((link) => {
  link.addEventListener("click", () => toggleMobileMenu(false));
});

document.addEventListener("click", (event) => {
  if (!mobileMenu || !mobileBtn) return;

  const clickedInsideMenu = mobileMenu.contains(event.target);
  const clickedButton = mobileBtn.contains(event.target);

  if (!mobileMenu.classList.contains("hidden") && !clickedInsideMenu && !clickedButton) {
    toggleMobileMenu(false);
  }
});

document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    toggleMobileMenu(false);
    toast?.classList.remove("show");
  }
});

const revealEls = document.querySelectorAll(".reveal");

if (reduceMotion) {
  revealEls.forEach((el) => el.classList.add("reveal-visible"));
} else {
  const revealObserver = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        const el = entry.target;
        const delay = el.getAttribute("data-delay");

        if (delay) {
          el.style.transitionDelay = `${delay}ms`;
        }

        el.classList.add("reveal-visible");
        observer.unobserve(el);
      });
    },
    { threshold: 0.12 }
  );

  revealEls.forEach((el) => revealObserver.observe(el));
}

function handleHeaderState() {
  if (!header) return;

  if (window.scrollY > 10) {
    header.classList.add("header-scrolled");
  } else {
    header.classList.remove("header-scrolled");
  }
}

window.addEventListener("scroll", handleHeaderState, { passive: true });
handleHeaderState();

const navLinks = Array.from(document.querySelectorAll("#deskNav .navlink"));
const sections = navLinks
  .map((link) => document.querySelector(link.getAttribute("href")))
  .filter(Boolean);

if (sections.length && !reduceMotion) {
  const navObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        const currentId = `#${entry.target.id}`;

        navLinks.forEach((link) => {
          link.classList.toggle(
            "navlink-active",
            link.getAttribute("href") === currentId
          );
        });
      });
    },
    { threshold: 0.35, rootMargin: "-15% 0px -45% 0px" }
  );

  sections.forEach((section) => navObserver.observe(section));
}

function handleTopButton() {
  if (!toTop) return;

  if (window.scrollY > 600) {
    toTop.classList.add("show");
  } else {
    toTop.classList.remove("show");
  }
}

window.addEventListener("scroll", handleTopButton, { passive: true });
handleTopButton();

toTop?.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: reduceMotion ? "auto" : "smooth"
  });
});

function handleFab() {
  if (!inquiryFab) return;

  if (window.scrollY > 180) {
    inquiryFab.classList.add("show");
  } else {
    inquiryFab.classList.remove("show");
  }
}

window.addEventListener("scroll", handleFab, { passive: true });
handleFab();

function focusInquiryForm() {
  inquirySection?.scrollIntoView({
    behavior: reduceMotion ? "auto" : "smooth",
    block: "start"
  });

  window.setTimeout(() => {
    document.getElementById("fullName")?.focus();
  }, reduceMotion ? 0 : 450);
}

inquiryFab?.addEventListener("click", focusInquiryForm);

let toastTimer = null;

function showToast(message) {
  if (!toast || !toastMsg) return;

  toastMsg.textContent = message;
  toast.classList.add("show");

  if (toastTimer) {
    clearTimeout(toastTimer);
  }

  toastTimer = setTimeout(() => {
    toast.classList.remove("show");
  }, 4500);
}

toastClose?.addEventListener("click", () => {
  toast?.classList.remove("show");
});

filterButtons.forEach((btn) => {
  btn.addEventListener("click", () => {
    const filter = (btn.dataset.filter || "").toLowerCase();

    filterButtons.forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");

    jobCards.forEach((card) => {
      const categories = (card.dataset.category || "").toLowerCase().split(/\s+/);
      const shouldShow = filter === "all" || categories.includes(filter);
      card.classList.toggle("hidden-job", !shouldShow);
    });
  });
});

function openInquiryWithRole(roleText = "") {
  const roleSelect = document.getElementById("role");

  if (roleSelect && roleText) {
    const options = Array.from(roleSelect.options);
    const matched = options.find(
      (option) => option.text.trim().toLowerCase() === roleText.trim().toLowerCase()
    );

    if (matched) {
      roleSelect.value = matched.value;
    }
  }

  focusInquiryForm();
}

jobCards.forEach((card) => {
  const role = card.getAttribute("data-role");

  card.addEventListener("click", (event) => {
    const clickedButton = event.target.closest("[data-role-btn]");

    if (clickedButton) {
      event.stopPropagation();
      openInquiryWithRole(clickedButton.dataset.roleBtn || "");
      return;
    }

    if (role) openInquiryWithRole(role);
  });

  card.addEventListener("keydown", (event) => {
    if (event.key === "Enter" || event.key === " ") {
      event.preventDefault();
      if (role) openInquiryWithRole(role);
    }
  });
});

function setStatus(message, ok = true) {
  if (!statusEl) return;

  statusEl.textContent = message;
  statusEl.classList.remove("hidden", "text-green-700", "text-red-700");
  statusEl.classList.add(ok ? "text-green-700" : "text-red-700");
}

function setLoading(isLoading) {
  if (!sendBtn) return;

  sendBtn.disabled = isLoading;
  sendBtn.classList.toggle("opacity-70", isLoading);
  sendBtn.classList.toggle("cursor-not-allowed", isLoading);

  sendBtn.innerHTML = isLoading
    ? '<span class="inline-flex items-center gap-2"><span class="h-4 w-4 animate-spin rounded-full border-2 border-white border-t-transparent"></span> Sending...</span>'
    : '<i data-lucide="send" class="h-4 w-4"></i> Send Inquiry';

  lucide.createIcons();
}

function validateEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function validatePhilippinePhone(phone) {
  if (!phone) return true;
  return /^(?:\+63|0)?9\d{9}$/.test(phone.replace(/\s+/g, ""));
}

form?.addEventListener("submit", async (event) => {
  event.preventDefault();

  if (sendBtn?.disabled) return;

  const payload = {
    full_name: document.getElementById("fullName")?.value.trim() || "",
    user_email: document.getElementById("email")?.value.trim() || "",
    phone: document.getElementById("phone")?.value.trim() || "",
    preferred_role: document.getElementById("role")?.value.trim() || "",
    destination: document.getElementById("destination")?.value.trim() || "",
    message: document.getElementById("message")?.value.trim() || ""
  };

  if (!payload.full_name || !payload.user_email || !payload.message) {
    setStatus("Please complete Full Name, Email, and Message.", false);
    return;
  }

  if (!validateEmail(payload.user_email)) {
    setStatus("Please enter a valid email address.", false);
    return;
  }

  if (!validatePhilippinePhone(payload.phone)) {
    setStatus("Please enter a valid Philippine mobile number.", false);
    return;
  }

  setLoading(true);
  setStatus("Sending your inquiry...", true);

  try {
    const response = await fetch(window.LaravelApp.inquiryEndpoint, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
        "X-CSRF-TOKEN": window.LaravelApp.csrfToken
      },
      body: JSON.stringify(payload)
    });

    const result = await response.json();

    if (!response.ok) {
      throw new Error(result.message || "Server could not process the inquiry.");
    }

    setStatus(result.message || "Inquiry sent successfully.", true);
    showToast(`Thanks, ${payload.full_name}! Your inquiry has been submitted.`);
    form.reset();
  } catch (error) {
    console.error(error);
    setStatus(error.message || "Something went wrong. Please try again.", false);
  } finally {
    setLoading(false);
  }
});