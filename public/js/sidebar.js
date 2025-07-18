function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  const content = document.querySelector('.content');

  // For desktop: collapse/expand
  sidebar.classList.toggle('collapsed');
  content.classList.toggle('collapsed');

  // For mobile: slide in/out
  sidebar.classList.toggle('open');

  // Save state only for collapse (desktop)
  const isCollapsed = sidebar.classList.contains('collapsed');
  localStorage.setItem('sidebar', isCollapsed ? 'collapsed' : 'expanded');
}


function toggleDarkMode() {
  const body = document.body;
  body.classList.toggle('dark');

  const isDark = body.classList.contains('dark');
  localStorage.setItem('theme', isDark ? 'dark' : 'light');
}

// Apply theme and sidebar state on load
document.addEventListener('DOMContentLoaded', () => {
  const savedTheme = localStorage.getItem('theme');
  const savedSidebar = localStorage.getItem('sidebar');

  if (savedTheme === 'dark') {
    document.body.classList.add('dark');
  }

  if (savedSidebar === 'collapsed') {
    document.getElementById('sidebar').classList.add('collapsed');
    document.querySelector('.content').classList.add('collapsed');
  }
});
