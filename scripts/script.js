/**
 * Created by User on 21.12.2018.
 */
function redirect(){
    let cur = window.location.pathname.split('/')[1];
    window.location = cur + '/del';
    window.location = cur;

    // setTimeout(window.location = cur, 10000);
}
