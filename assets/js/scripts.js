function mudar_form() {
    const signin = document.getElementsByClassName('signin')[0];
    const signup = document.getElementsByClassName('signup')[0];

    if (!signin.classList.contains('close')) {
        signin.classList.add('close');
        signup.classList.remove('close');
    } else {
        signup.classList.add('close');
        signin.classList.remove('close');
    }
}