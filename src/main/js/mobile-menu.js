(() => {
    const menuBtnRef = document.querySelector('.header__menu-mob');
    const iconRef = document.querySelector('[data-menu-button]');
    const mobileMenuRef = document.querySelector('[data-menu]');
    menuBtnRef.addEventListener('click', () => {
      const expanded =
      iconRef.getAttribute('aria-expanded') === 'true' || false;
      iconRef.classList.toggle('is-open');
      iconRef.setAttribute('aria-expanded', !expanded);
      mobileMenuRef.classList.toggle('is-open');
    });
  })();