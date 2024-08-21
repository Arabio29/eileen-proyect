
<!--contenido-->
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../img/perfil1.jpg" alt="" style border-radius: 50%;;>
                </span>

                <a href="perfil.php">
                    <div class="text logo-text">
                        <span class="name">Eileen </span>
                        <span class="profession">Web developer</span>
                    </div>
                </a>
                
            </div>
            
        </header>
        <div class="menu-bar">
            <div class="menu">
                
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="fichas.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">FICHAS</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="trimestralizacion.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">TRIMESTRALIZACIÓN</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="competencias.php">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">COMPETENCIAS</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="contactos.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">CONTACTOS</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="index.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                
                
            </div>
        </div>
    </nav>


    <script>
    const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");
    var active = sidebar.classList.toggle("close");
toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})
searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})
modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

    <style>
:root{
    /* ===== Colors ===== */
    --body-color: #E4E9F7;
    --sidebar-color: #00324d;
    --primary-color: #695CFE;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --text-color: #fff;
    /* ====== Transition ====== */
    --tran-03: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.3s ease;
    --tran-05: all 0.3s ease;
}
*{
    font-family: 'Poppins', sans-serif;
}
.sidebar{
    position: fixed;
    top: 48px;
    left: 0;
    height:95%;
    width: 250px;
    padding: 10px 14px;
    background: var(--sidebar-color);
    transition: var(--tran-05);
    z-index: 100;  
    font-family: Work Sans;
}
.sidebar.close{
    width: 88px;
}
/* ===== Reusable code - Here ===== */
.sidebar li{
    height: 50px;
    list-style: none;
    display: flex;
    align-items: center;
    margin-top: 10px;
}
.sidebar header .image,
.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
}
.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}
.sidebar .text,
.sidebar .icon{
    color: var(--text-color);
    transition: var(--tran-03);
}
.sidebar .text{
    font-size: 17px;
    font-weight: 500;
    white-space: nowrap;
    opacity: 1;
}
.sidebar.close .text{
    opacity: 0;
}
/* =========================== */
.sidebar header{
    position: relative;
}
.sidebar header .image-text{
    display: flex;
    align-items: center;
}
.sidebar header .logo-text{
    display: flex;
    flex-direction: column;
}
header .image-text .name {
    margin-top: 2px;
    font-size: 18px;
    font-weight: 600;
}
header .image-text .profession{
    font-size: 16px;
    margin-top: -2px;
    display: block;
}
.sidebar header .image{
    display: flex;
    align-items: center;
    justify-content: center;
}
.sidebar header .image img{
    width: 40px;
    border-radius: 6px;
}
.sidebar header .toggle{
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translateY(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background-color: var(--primary-color);
    color: var(--sidebar-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
    transition: var(--tran-05);
}
body.dark .sidebar header .toggle{
    color: var(--text-color);
}
.sidebar.close .toggle{
    transform: translateY(-50%) rotate(0deg);
}
.sidebar .menu{
    margin-top: 40px;
}
.sidebar li.search-box{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    cursor: pointer;
    transition: var(--tran-05);
}
.sidebar li.search-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    background-color: var(--primary-color-light);
    color: var(--text-color);
    border-radius: 6px;
    font-size: 17px;
    font-weight: 500;
    transition: var(--tran-05);
}
.sidebar li a{
    list-style: none;
    height: 100%;
    background-color: transparent;
    display: flex;
    align-items: center;
    height: 100%;
    width: 100%;
    border-radius: 6px;
    text-decoration: none;
    transition: var(--tran-03);
}
.sidebar li a:hover{
    background-color: var(--primary-color);
}
.sidebar li a:hover .icon,
.sidebar li a:hover .text{
    color: var(--sidebar-color);
}
body.dark .sidebar li a:hover .icon,
body.dark .sidebar li a:hover .text{
    color: var(--text-color);
}
.sidebar .menu-bar{
    height: calc(100% - 55px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: scroll;
}
.menu-bar::-webkit-scrollbar{
    display: none;
}
.sidebar .menu-bar .mode{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    position: relative;
    transition: var(--tran-05);
}
.menu-bar .mode .sun-moon{
    height: 50px;
    width: 60px;
}
.mode .sun-moon i{
    position: absolute;
}
.mode .sun-moon i.sun{
    opacity: 0;
}
body.dark .mode .sun-moon i.sun{
    opacity: 1;
}
body.dark .mode .sun-moon i.moon{
    opacity: 0;
}
.menu-bar .bottom-content .toggle-switch{
    position: absolute;
    right: 0;
    height: 100%;
    min-width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    cursor: pointer;
}
.toggle-switch .switch{
    position: relative;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
    transition: var(--tran-05);
}
.switch::before{
    content: '';
    position: absolute;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    background-color: var(--sidebar-color);
    transition: var(--tran-04);
}
body.dark .switch::before{
    left: 20px;
}

.sidebar.close ~ .home{
    left: 78px;
    height: 91vh;
    width: calc(100% - 78px);
}
body.dark .home .text{
    color: var(--text-color);
}
    </style>
</body>
</html>