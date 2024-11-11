document.addEventListener("DOMContentLoaded", function() {
    const teamMembers = document.querySelectorAll('.team-member');
    function showOnScroll() {
        teamMembers.forEach(member => {
            const memberTop = member.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (memberTop < windowHeight - 100) {
                member.classList.add('show');
            }
        });
    }
    window.addEventListener('scroll', showOnScroll);
    showOnScroll();
});
