function toggleMobileNav() {
            let mobileNav = document.getElementById('mobile-nav');
            if (mobileNav.className == 'mobile-nav-hidden') {mobileNav.className = 'mobile-nav'}
            else {mobileNav.className = 'mobile-nav-hidden'}
            
            console.log('toggled');
        }