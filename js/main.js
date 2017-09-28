var loggedin = false;

if(loggedin){
    document.getElementById("navbuttons").innerHTML = 
        '<button class="navbutton" href="#">Sell</button>\n' +
        '<button class="navbutton" href="#">Account</button>\n' +
        '<button class="navbutton" href="#">Logout</button>\n';
}else{
    document.getElementById("navbuttons").innerHTML = 
        '<button class="navbutton" href="#">Sell</button>\n' +
        '<button class="navbutton" href="#">Login</button>\n';
}