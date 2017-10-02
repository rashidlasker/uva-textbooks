var loggedin = false;

if(loggedin){
    document.getElementById("navbuttons").innerHTML = 
        '<button class="navbutton" href="#">Sell</button>\n' +
        '<button class="navbutton" href="#">Account</button>\n' +
        '<button class="navbutton"><a href="about.html" style="text-decoration: none">About Us</a></button>\n'+
        '<button class="navbutton" href="#">Logout</button>\n';
}else{
    document.getElementById("navbuttons").innerHTML = 
        '<button class="navbutton">Sell</button>\n' +
        '<button class="navbutton"><a href="about.html" style="text-decoration: none">About Us</a></button>\n'+
        '<button class="navbutton"><a href="login.html" style="text-decoration: none">Login</a></button>\n';
}