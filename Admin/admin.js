
function changeTab(tab) {
    let views = ['users-tab', 'other-tab', 'trend-tab']
    views.forEach(element => {
        if (element === tab) {
            document.getElementById(element).style.display = 'block'
        } else {
            document.getElementById(element).style.display = 'none'
        }
    });
}

changeTab('users-tab')
