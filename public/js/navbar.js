   window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar');
        var navbar_sticky = this.document.getElementById("card-nav-sticky")
        if (window.scrollY > 0) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-semi-purple');
            navbar_sticky.classList.remove('bg-semi-purple')
        } else {
            navbar.classList.remove('bg-semi-purple');
            navbar.classList.add('bg-transparent');
            navbar_sticky.classList.add('bg-semi-purple')
        }
    });
