const AdminSidebar = document.getElementById("admin-sidebar");
const btnAdminSidebar = document.getElementById("btn-admin-sidebar");
const overlayClosed = document.getElementById("overlay-closed");

btnAdminSidebar.addEventListener("click", () => {
  AdminSidebar.classList.toggle("hidden");
});
