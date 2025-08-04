document.addEventListener("DOMContentLoaded", function () {
  // Get all JOIN US buttons and modal elements
  const joinButtons = document.querySelectorAll('.join-btn');
  const joinModal = document.getElementById('joinModal');
  const closeBtn = document.querySelector('.closeBtn');

  // Show modal when any "JOIN US" button is clicked
  joinButtons.forEach(button => {
    button.addEventListener('click', function () {
      joinModal.style.display = 'block';
    });
  });

  // Close modal when close button is clicked
  closeBtn.addEventListener('click', function () {
    joinModal.style.display = 'none';
  });

  // Close modal when clicking outside the modal content
  window.addEventListener('click', function (e) {
    if (e.target === joinModal) {
      joinModal.style.display = 'none';
    }
  });

  // Mobile navbar toggle
  const menuBtn = document.getElementById("mobile-menu");
  const navLinks = document.getElementById("nav-links");

  menuBtn.addEventListener("click", function () {
    menuBtn.classList.toggle("active");
    navLinks.classList.toggle("active");
  });

  // Close nav on mobile after clicking a link or button
  const navItems = navLinks.querySelectorAll("a, button");
  navItems.forEach(item => {
    item.addEventListener("click", () => {
      menuBtn.classList.remove("active");
      navLinks.classList.remove("active");
    });
  });
});

// Show confirmation modal using SweetAlert2
function confirmRegistration() {
  const form = document.getElementById("joinForm");

  if (!form.checkValidity()) {
    form.reportValidity();
    return;
  }

  Swal.fire({
    title: "Are you sure?",
    text: "Do you really want to become a member of the organization?",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#0B5093",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, register me",
    cancelButtonText: "Cancel",
    backdrop: true,
    allowOutsideClick: false,
    allowEscapeKey: false
  }).then((result) => {
    if (result.isConfirmed) {
      form.submit();
    }
  });
}

function closeConfirmModal() {
  document.getElementById('confirmModal').style.display = 'none';
}

function submitRealForm() {
  closeConfirmModal();
  document.getElementById("joinForm").submit();
}
// Add this in your script.js
const scrollBtn = document.getElementById("scrollTopBtn");
window.onscroll = function () {
  scrollBtn.style.display = (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) ? "block" : "none";
};
scrollBtn.onclick = function () {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};
