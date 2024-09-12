document.addEventListener('DOMContentLoaded', () => {
    const homeLink = document.getElementById('home-link');
    const adminLink = document.getElementById('admin-link');
    const servicesLink = document.getElementById('services-link');
    const homeSection = document.getElementById('home');
    const adminSection = document.getElementById('admin');
    const servicesSection = document.getElementById('services');
    
    function showSection(sectionToShow) {
        homeSection.style.display = 'none';
        adminSection.style.display = 'none';
        servicesSection.style.display = 'none';
        sectionToShow.style.display = 'block';
    }
    
    homeLink.addEventListener('click', (e) => {
        e.preventDefault();
        showSection(homeSection);
    });
    
    adminLink.addEventListener('click', (e) => {
        e.preventDefault();
        showSection(adminSection);
    });
    
    servicesLink.addEventListener('click', (e) => {
        e.preventDefault();
        showSection(servicesSection);
    });
    
    // Show home section by default
    showSection(homeSection);
});
